<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.project.index', [
            'projects' => Project::all()->sortBy('id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['string', 'required', 'max:100'],
            'description' => ['string', 'required'],
            'img' => ['required', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        if($request->hasFile('img')) {
            $filename = time(). '_'. $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('public/project/images', $filename);
        }

        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'img' => $path,
        ]);

        return redirect(route('project.index'))->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('pages.dashboard.project.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $data = $request->validate([
            'title' => ['string', 'required', 'max:100'],
            'description' => ['string', 'required'],
            'img' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:4086'],
        ]);

        $request->validate($data);

        $project->title = $request->title;
        $project->description = $request->description;
        $project->img = $request->img;
        $project->save();

        if($request->hasFile('img')) {
            if($project->img) {
                Storage::delete($project->img);
            }
            $filename = time(). '_'. $request->file('foto')->getClientOriginalName();
            $saveto = $request->file('foto')->storeAs('project/images/', $filename);
            $project->img = $saveto;
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }
}
