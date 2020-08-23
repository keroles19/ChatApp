<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Social\PasswordRequest;
use App\Models\Provider;
use App\User;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    use SocialTrait;
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @param $provider
     * @return void
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
       return $this->deal($user,$provider);

//        $provider = Provider::where('provider_id', $user->getId())->first();
//        if (!$provider) {
//            $userData =  User::firstOrCreate(
//                    ['email' => $user->getEmail()],
//                    ['name'=>$user->getName()]
//                );
//            Provider::create([
//               'name'=>$provider,
//                'provider_id'=>$user->getId(),
//                'user_id'=>$userData->id()
//            ]);
//
//        }
//        else{
//            $userData = User::findOrFail($provider->user_id);
//        }
//        auth()->login($userData);
//        $user->provider = $provider;
//        session()->put('user', $user);
//        return redirect('/newPassword/' . $user->getId());
    }


    public function newPassword($id)
    {

        $user = session('user');
        if ($user == null || $id !== $user->getId()) {
            return redirect()->route('login');
        }
        return view('auth.social.password');
    }

    public function createPassword(PasswordRequest $request)
    {
       $request->validated();
        return $this->new($request);

    }


}
