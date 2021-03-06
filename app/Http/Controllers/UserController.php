<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
       
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role'=>'required',
            'nama'=>'required',
            'email'=>'required|unique:users',
            'username'=>'required|unique:users',
            'password'=>'required',
        ]);

        // $data = new Users();
        $data = $request->except(['_token', '_method']);
        if($request->get('password')!=''){
            $data['password'] = bcrypt($request->get('password'));
        }
        $user = User::create($data);
        // $data->role = request()->get('role');
        // $data->username = request()->get('username');
        // $data->password = request()->get('password');
        // $data->email = request()->get('email');
        // $data->save();

        // $data = $request->except(['_token', '_method']);
        // if($request->get('password')!=''){
        //     $data['password'] = bcrypt($request->get('password'));
        // }
        // $user = User::create($data);

        return redirect('/users')->with('success', 'User saved!');
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
        $user = User::find($id);
         {
            return view('users.edit', compact('user')); 
        }
        
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
        $request->validate([
            //
        ]);

        $user = User::find($id);
        $data = $request->except(['_token', '_method', 'password']);

        if($request->get('password')!=''){
            $data['password'] = bcrypt($request->get('password'));
        }

        $user->update($data);

        return redirect('/users')->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted!');
    }

    public function changePass()
    {
        return view('changepass');
    }

    public function changePassSubmit(Request $request, $id)
    {
        $request->validate([
            'old_pass'=>'required',
            'new_pass'=>'required',
            'con_pass'=>'required',
        ]);

        $user = User::find($id);
        if($request->get('new_pass') != $request->get('con_pass')){
            return redirect('/changepass')->with('error', 'Password baru tidak sama dengan konfirmasi password');
        }

        if(Hash::check($request->get('old_pass'), $user->password)){
            $user->password = bcrypt($request->get('new_pass'));
            $user->save();

            return redirect('/changepass')->with('success', 'Password updated!');
        } else {
            return redirect('/changepass')->with('error', 'Password lama salah');
        }
    }
}
