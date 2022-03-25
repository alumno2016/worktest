<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Users::paginate(5);
        return view('admin.indexUser')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request = [   
            'user' => 'unique|required',
            'name' => 'required',
            'phone' => 'unique|required',
            'address'=>'required',
            'email' => 'unique|required',
            'password' => 'min:6|required'
        ];
        
        $data = request()->except('_token');

        Users::insert($data);
        return redirect('users')->with('message', 'Register succesfull');
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
        $data = Users::findOrFail($id);
        return view('admin.userEdit', compact('data'));
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
        $dataUser = request()->except(['_token', '_method']);
        Users::where('id', "=", $id)->update($dataUser);

        $data = Users::findOrFail($id);
        return view('admin.userEdit', compact('data'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Users::destroy($id);
        return redirect('users')->with('message', 'User delete ' .$id);
    }
}
