<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Socialprovider;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Socialite;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Redirect the user to the OAuth Provider.
     *
     * @param Socialprovider $socialprovider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider(Socialprovider $socialprovider)
    {
        return Socialite::driver($socialprovider->provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @param Socialprovider $socialprovider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback(Socialprovider $socialprovider)
    {
        $user = Socialite::driver($socialprovider->provider)->user();

        $authUser = $this->findOrCreateUser($user, $socialprovider);

        Auth::login($authUser, true);

        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param \Laravel\Socialite\One\User|\Laravel\Socialite\Two\User $user Socialite user object
     * @param Socialprovider $socialprovider
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function findOrCreateUser($user, Socialprovider $socialprovider)
    {
        $authUser = $socialprovider->users()->where('socialuser_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }

        return $socialprovider->users()->create([
            'name' => $user->getName(),
            'socialuser_email' => $user->getEmail(),
            'socialuser_id' => $user->getId(),
            'avatar' => $user->getAvatar(),
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:1|max:30',
            'company' => 'nullable|string|min:2|max:50',
            'code' => [
                'nullable',
                'required_with:phone',
                'string',
                'min:2',
                'max:2',
                'regex:/(17)|(25)|(29)|(33)|(44)/'
            ],
            'phone' => 'nullable|required_with:code|string|min:7|max:7|regex:/[0-9]{7}/',
            'email' => [
                'required',
                'string',
                'email',
                'min:3',
                'max:255',
                Rule::unique('users')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
            'password' => 'required|string|min:6|max:30|confirmed',
            'password_confirmation' => 'required|string|min:6|max:30',
            'avatar' => 'nullable|image|mimes:jpeg,png|max:2000',
            'terms' => 'required|accepted',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'company' => $data['company'],
            'phone' => '375' . $data['code'] . $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
