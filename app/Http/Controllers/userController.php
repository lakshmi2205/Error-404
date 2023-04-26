<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    
    
    public function index()
    {
        $user=user::all();
        return view('user.index')->with('user',$user);
    }

    
    public function create()
    {
        return view('user.create');
    }

    
    public function store(Request $request)
    {
        $requestData=$request->all();
        $fileName=time().$request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('images',$fileName,'public');
        $requestData["photo"]='/storage/'.$path;
        user::create($requestData);
        return redirect('user')->with('flasph_message','user Addeded:');
    }

    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
