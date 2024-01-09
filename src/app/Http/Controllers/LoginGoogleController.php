<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginGoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function start()
    {
        try {

            return Socialite::driver('google')->redirect();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->user['id'])->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->route('user.index')->with('message', 'Đăng nhập thành công!');
            }else{
                $newUser = User::updateOrCreate(['email' => $user->user['email']],[
                        'name' => $user->user['name'],
                        'google_id'=> $user->user['id'],
                        'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect()->route('user.index')->with('message', 'Đăng nhập thành công!');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }

}
