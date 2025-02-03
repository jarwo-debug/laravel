<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Program;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\Program;

class DashboardProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.programs.index', [
            'programs' => Program::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.programs.create', [
            'programs' => Program::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:programs',
            'category_id' => 'required',
            // 'image' => 'image|file|max:1024',
            'body' => 'required',

        ]);

        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('Program-images');
        // }

        // $validatedData['author_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200,);

        Program::create($validatedData);

        return redirect('/dashboard/programs')->with('success', 'New Program has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('dashboard.programs.show', [
            'program' => $program
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.programs.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];


        if ($request->slug != $post->slug) {
            $rules['slug'] = "required|unique:programs";
        }
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['author_id'] = auth()->user()->id;
        $validatedData['body'] = strip_tags($request->body);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/programs')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->mage) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/programs')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
