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
        // dd($admin);
        return view('division.admin', compact('admins','members'));
    }
    public function android()
    {
        return view('division.android');
    }
    public function courses()
    {
        return view('division.courses');
    }
    public function contentCreator()
    {
        return view('division.content-creator');
    }
    public function service()
    {
        return view('division.service');
    }
    public function website()
    {
        return view('division.website');
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
            session()->flash('success', 'division successfully created');
            return redirect()->back();
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
