<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use Auth;
use Image;
use File;
use Input;

class ProjectController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth')->except(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(3);
        
        return view('projects.view', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'stage' => 'required',
            'description' => 'required',
            'termsAndConditions' => 'required',
        ]);

        $project = new Project;
        $project->user_id = Auth::id();
        $project->title = $request->input('title');
        $project->stage = $request->input('stage');
        $project->description = $request->input('description');
        $project->termsAndConditions = $request->input('termsAndConditions');

        $image = $request->file('project_image');
        $filename = time() . '-' . $image->getClientOriginalName();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(360, 150)->save($location);
        $project->image = $filename;

        $project->save();

        return redirect('/projects')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if(Auth::id() == $project->user_id) {
            $project->delete();
            File::delete(public_path() . '/images/' . $project->image);

            return redirect('/projects')->with('success', 'Project deleted successfully!');
        } else {
            return back()->with('error', "You're not the owner of this project");
        }
    }
}
