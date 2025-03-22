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
    $movie->user_id = auth()->id(); // Set the user_id to the currently authenticated user

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('movies', 'public');
        $movie->image = $imagePath;
    }

    $movie->save();

    return redirect()->route('movies.index')->with('success', 'Movie added successfully!');
}

    public function destroy(Movie $movie)
    {
        $this->authorize('delete', $movie);
        $movie->delete();
        return redirect()->route('movies.index');
    }

    public function markAsWatched(Movie $movie)
    {
        $this->authorize('update', $movie);
        $movie->watched = true;
        $movie->save();
        return redirect()->route('movies.index');
    }
}