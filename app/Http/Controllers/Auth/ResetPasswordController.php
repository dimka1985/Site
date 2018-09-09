<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Validation\Rule;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * Get the password reset validation rules /override/.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token'                 => 'required|string|min:64|max:64',
            'email'                 => [
                'required',
                'string',
                'email',
                'min:3',
                'max:255',
                Rule::exists('users')->where(function ($query) {
                    $query->whereNull('deleted_at');
                }),
            ],
            'password'              => 'required|string|min:6|max:30|confirmed',
            'password_confirmation' => 'required|string|min:6|max:30',
        ];
    }
}
