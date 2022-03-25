<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Task;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task= Task::all();
        $data= User::paginate(2);
        return view('admin.indexUser', compact(['data', 'task']));//->with('data', $data);
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


        
        $rdata = [   
            'user' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required',
            'address'=>'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            //'password' => Hash::make('password'),
        ];
        

        $request['password'] = bcrypt($request->password);
 


        $message=[
            'required' => 'This :attribute is required'
        ];


        $this->validate($request, $rdata, $message);

        
        $data = request()->except('_token');

        User::insert($data);
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
        $data = User::findOrFail($id);
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

        $rdata = [   
            'user' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required',
            'address'=>'required|string',
            'email' => 'required|email',
        ];



        $message=[
            'required' => 'This :attribute is required'
        ];

        $this->validate($request, $rdata, $message);

        $dataUser = request()->except(['_token', '_method']);
        User::where('id', "=", $id)->update($dataUser);

        $data = User::findOrFail($id);
        //return view('admin.userEdit', compact('data'));
        return redirect('users')->with('message', 'User updated:  ' .$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::destroy($id);
        return redirect('users')->with('message', 'User delete ' .$id);
    }
}
