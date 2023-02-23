<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
        return view('admin.authentication.login');
    }

    public function login_proses(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/administrator')->with('success','Berhasil Validasi Login');
        }
        
        return back()->withErrors([
            // 'email' => 'The provided credentials do not match our records.',
            'password' => 'Password tidak sesuai!!!',
        ])->onlyInput('email','password');
    }

    public function logout(){
        Auth::logout();
        return redirect('/administrator');
    }


    public function add_user(){
        $data = User::all();

        return view('admin.add.add-user', compact('data'));
    }

    public function insert_user(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'foto' => 'required',
            'password' => 'required',
        ]);
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'foto' => $request->foto,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60) ,
        ]);

        if($request->hasfile('foto')){
            $nama_baru = Str::random(8) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/user/', $nama_baru);
            $data->foto = $nama_baru;
            $data->save();
        }


        return redirect()->route('admin_user')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit_user($id){
        $data = User::find($id);


        return view('admin.edit.edit-user',compact('data'));
    }

    public function update_user(Request $request,$id){
        $data = User::find($id);

        if ($request->email == $data->email) {
            $request->validate([
                'name' => 'required',
                // 'email' => 'required|unique:users',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
            ]);
        }


        if($request->hasfile('foto')){
            if(File_exists(public_path('images/user/'.$data->foto))){ //either you can use file path instead of $data->image
                unlink(public_path('images/user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        $data->update($request->all());
        $data->remember_token = Str::random(60);
        if($request->hasfile('foto')){
             $nama_baru = Str::random(8) . '.' . $request->file('foto')->extension();
             $request->file('foto')->move('images/user/', $nama_baru);
             $data->foto = $nama_baru;
             $data->save();
        }
        return redirect()->route('admin_user')->with('success','Data Berhasil DiUpdate');
    }

    public function edit_user_password($id)
    {
        $data = User::find($id);

        return view('admin.edit.edit-user-password' ,compact('data'));
    }
    public function update_user_password(Request $request,$id)
    {
        $data = User::find($id);

        $data->update([
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect()->route('admin_user')->with('success', 'Password Berhasil Diupdate');
    }

    public function delete_user($id){
        $data = User::find($id);

        if(File_exists(public_path('images/user/'.$data->foto))){ //either you can use file path instead of $data->image
            unlink(public_path('images/user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        
        $data->delete();

        return redirect()->route('admin_user')->with('error','Data Berhasil Dihapus');
    }
}
