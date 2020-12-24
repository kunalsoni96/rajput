<?php
  
namespace App\Http\Controllers\Frontend;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\User;
use Illuminate\Support\Facades\Auth;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();

    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback(request $request, $provider)
    {

            $user = Socialite::driver('google')->stateless()->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
       
                Auth::loginUsingId($finduser->id,true);
        
                return redirect()->route('Shopping-Cart');
            }

            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    'profile'=> $user->avatar,
                    'role' => 'customer'
                ]);
      
                Auth::loginUsingId($newUser->id,true);
                
                return redirect()->route('Shopping-Cart');
            }
        

    }
}