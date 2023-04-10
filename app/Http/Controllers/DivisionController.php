<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function admin()
    {
        $admins = Division::where('division', 'Admin')->get();
        $members = Division::all();
        return view('division.admin', compact('admins', 'members'));
    }
    public function android()
    {
        $androids = Division::where('division', 'Android')->get();
        $members = Division::all();
        return view('division.android', compact('androids', 'members'));
    }
    public function courses()
    {
        $courses = Division::where('division', 'Courses')->get();
        $members = Division::all();
        return view('division.courses', compact('courses', 'members'));
    }
    public function contentCreator()
    {
        $content_creators = Division::where('division', 'Content Creator')->get();
        $members = Division::all();
        return view('division.content_creator', compact('content_creators', 'members'));
    }
    public function service()
    {
        $services = Division::where('division', 'Service')->get();
        $members = Division::all();
        return view('division.service', compact('services', 'members'));
    }
    public function website()
    {
        $websites = Division::where('division', 'Website')->get();
        $members = Division::all();
        return view('division.website', compact('websites', 'members'));
    }
    public function store(Request $request)
    {
        $division = Division::create([
            'full_name' => $request->full_name,
            'photo' => $request->file('image')->store('images'),
            'division' => $request->division,
            'address' => $request->address,
            'status' => $request->status
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.jpg';
            $request->file('image')->storeAs('public/image/photo_member', $filename);
            $division->update([
                'photo' => $filename
            ]);
            session()->flash('success', 'division successfully created');
            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to created member');
        }
    }
    public function update(Request $request, $id)
    {
        $division = Division::where('id', $request->id)->first();

        $division->update([
            'full_name' => $request->full_name,
            'photo' => $request->file('image')->store('images'),
            'division' => $request->division,
            'address' => $request->address,
            'status' => $request->status
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.jpg';
            $request->file('image')->storeAs('public/image/photo_member', $filename);
            $division->update([
                'photo' => $filename
            ]);
            session()->flash('success', 'division successfully updated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to update member');
        }
    }
    public function destroy($id)
    {
        $member = Division::find($id);
        $member->delete();

        if ($member) {
            session()->flash('success', 'member successfully deleted');
            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to delete member');
        }
    }
}
