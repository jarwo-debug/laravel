<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
            'kategoris' => Kategori::all()
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
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'url_link' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('thumbnail-images');
        }

        Program::create($validatedData);

        return redirect('/dashboard/programs')->with('success', 'New program has been added');
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
    public function edit(Program  $program)
    {
        return view('dashboard.programs.edit', [
            'program' => $program,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program  $program)
    {
        $rules = [
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'url_link' => 'required',
        ];


        if ($request->slug != $program->slug) {
            $rules['slug'] = 'required|unique:programs';
        }
        $validatedData = $request->validate($rules);

        Program::where('id', $program->id)
            ->update($validatedData);

        return redirect('/dashboard/programs')->with('success', 'Program has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program  $program)
    {
        if ($program->image) {
            Storage::delete($program->image);
        }
        Program::destroy($program->id);

        return redirect('/dashboard/programs')->with('success', 'program has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Program::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
