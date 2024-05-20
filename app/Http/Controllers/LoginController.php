<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login()
        {
            // Jika login berhasil di cek sesuai maka masuk ke halaman dashboard
            if (Auth::check()) 
                {
                    return redirect('dasbor');
                } 
            // Jika salah username atau password maka akan tetap di halaman login
            else 
                {
                    return view('login');
                }
        }
    public function actionlogin(Request $request)
    {
        $data = [
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                ];
                if (Auth::attempt($data)) {
                $request->session()->regenerate();
                $request->session()->put('user_id', Auth::id());
                $request->session()->put('email', $request->input('email'));

                return redirect('zzzzr');
                }
                else {
                session()->flash('error', 'Email atau Password Salah');
                return redirect('/');
                }
    }
}
                