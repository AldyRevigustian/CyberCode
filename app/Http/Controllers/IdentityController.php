<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identity = Identity::first();
        return view('identity.index', compact('identity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $identity = Identity::where('id', '1')->first();


        $identity->update([
            'name' => $request->name,
            'logo' => $request->file('image')->store('logo'),
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.jpg';
            $request->file('image')->storeAs('public/image/logo', $filename);
            $identity->update([
                'logo' => $filename
            ]);
            session()->flash('success', 'division successfully updated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to update member');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
