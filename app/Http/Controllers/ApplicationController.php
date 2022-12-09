<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $applications = Application::all();
        return view('application.application', compact('applications', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:applications,name',
            'image' => 'required|file|max:5120',
            'url' => 'required',
            'type' => 'required',
            'year' => 'required',
        ]);


        $application = Application::create([
            'name' => $request->name,
            'image' => $request->file('image')->store('images'),
            'url' => $request->url,
            'year' => $request->year,
            'type' => $request->type,
            'category_id' => $request->category_id,
        ]);

        if ($application) {
            session()->flash('success', 'Application successfully created');
            return redirect()->route('application');
        } else {
            session()->flash('error', 'Failed to create Application');
            return redirect()->route('application');
        }
    }


    public function update(Request $request, $id)
    {
        $application = Application::find($id);

        $request->validate([
            'name' => 'required|unique:applications,name',
            'image' => 'required',
            'url' => 'required',
            'year' => 'required',
        ]);

        $application->update([
            'name' => $request->name,
            'image' => $request->image,
            'url' => $request->url,
            'year' => $request->year,
            'category_id' => $request->category_id,
        ]);

        if ($application) {
            session()->flash('success', 'Application successfully updated');
            return redirect()->route('application');
        } else {
            session()->flash('error', 'Failed to update Application');
            return redirect()->route('application');
        }
    }


    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();

        if ($application) {
            session()->flash('success', 'Application successfully deleted');
            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to delete Application');
        }
    }
}
