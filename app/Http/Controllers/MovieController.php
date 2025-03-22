<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Auth;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::where('user_id', Auth::id())->get();
        return view('movies.index', compact('movies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->user_id = auth()->id(); 

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('movies', 'public');
            $movie->image = $imagePath;
        }

        $movie->save();

        return response()->json([
            'id' => $movie->id,
            'title' => $movie->title,
            'year' => $movie->year,
            'image' => $movie->image ? asset('storage/' . $movie->image) : null,
            'markAsWatchedUrl' => route('movies.markAsWatched', $movie),
            'deleteUrl' => route('movies.destroy', $movie),
        ]);
    }

    public function destroy(Movie $movie)
    {
        $this->authorize('delete', $movie);
    
        $movie->delete();
    
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }

    public function markAsWatched(Movie $movie)
    {
        $movie->watched = !$movie->watched;
        $movie->save();

        return response()->json(['watched' => $movie->watched]);
    }
}