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
        ]);

        Movie::create([
            'title' => $request->title,
            'year' => $request->year,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('movies.index');
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