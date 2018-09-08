<?php

use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function country()
    {
        $countries =\DB::table('country')->get();

        return view ('signup' , ['country' => $countries]);
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
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $country = $request->input('belad');
      $user = \DB::insert('insert into signup (fullname,email,password,country) values(?,?,?,?)',[$name,$email,$password,$country]);
      echo "Record inserted successfully.<br/>";


      if($user){
        echo "<br> smabrook .<br/>";
        return redirect('login');

    }else{
        echo "<br> invalid username or password .<br/>";
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $id)
    {
        //
        $email      =   $id->input('email');
        $password   =   $id->input('password');

        $user   =   \DB::table('signup')->where('email' , $email)->first();
        
        if($user){
            echo "<br> smabrook .<br/>";
            $id->session()->put('email', $email);

            if ($id->session()->exists('email')) {
                return redirect('dashboard');                
            }
                
 
        }else{
            echo "<br> invalid username or password .<br/>";
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        return view('dashboard')->with('useremail', $id->session()->get('email', 'default'));

        
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
        //
    }
}
