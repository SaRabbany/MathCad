<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
//use Symfony\Component\String\ByteString;
use App\models\User;
use Auth;

class SocialController extends Controller
{
    public function fackbookRedirect(){
        return Socialite::driver('facebook')->redirect();

    }

    public function loginWithOutFB(){
        $user = Socialite::driver('facebook')->user();
        $findUser = User::where('facebook_id', $user->id)->first();
        if ($findUser){
            Auth::login($findUser);
            return redirect('home');
        }
        else{
            $newUser = new User();
            $newUser->name=$user->name;
            $newUser->email = $user->email;
            $newUser->facebook_id = $user->id;
            $newUser->password = bcrypt(123456);
            $newUser->save();

            return redirect('home');
        }
    }

    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function loginWithOutgit()
    {
        $user = Socialite::driver('github')->user();
        $findUser = User::where('github_id', $user->id)->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect('home');
        } else {
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->github_id = $user->id;
            $newUser->password = bcrypt(123456);
            $newUser->save();

            return redirect('home');
        }
    }
}
