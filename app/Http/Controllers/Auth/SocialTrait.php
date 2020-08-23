<?php


namespace App\Http\Controllers\Auth;


use App\Models\Provider;
use App\User;

trait SocialTrait
{

    protected function deal($user,$method)
    {
        $provider = $this->provider($user->getId());
        if (!$provider) {
            $user->provider = $method;
            session()->put('user', $user);
            return redirect('/newPassword/' . $user->getId());
        }
        $userData = $this->userFindOrCreate('id', $provider->user_id);
        auth()->login($userData);
        return redirect('/chat');
    }

    protected function provider($userId)
    {
        return Provider::where('provider_id', $userId)->first();
    }

    protected function userFindOrCreate($attribute, $value, $name = null, $password = null)
    {
        return User::firstOrCreate([$attribute => $value],
            ['name' => $name, 'password' => bcrypt($password)]
        );
    }

    protected function new($request)
    {
        $user = $request->session()->get('user');
        $userData = $this->userFindOrCreate('email', $user->getEmail(),
            $user->getName(), $request->password);
        $this->providerCreate($userData->id, $user->getId(), $user->provider);
        auth()->login($userData);
        session()->forget('user');
        return redirect('/chat');
    }

    protected function providerCreate($user_id, $provider_id = null, $name = null)
    {
        return Provider::firstOrCreate(['user_id' => $user_id], [
            'name' => $name,
            'provider_id' => $provider_id,
        ]);
    }

}
