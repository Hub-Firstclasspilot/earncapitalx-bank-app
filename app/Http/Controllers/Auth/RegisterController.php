<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $countries = DB::table('countries')->get();

        return view('auth.register', compact('countries'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'referral_link' => ['nullable', 'string'],
            'country' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'unhashed_pass' => $data['password'],
            'referral_link' => uniqid(),
            'ip_address' => request()->ip(),
            'country' => $data['country']
        ]);

        $user->referrals()->create([
            'referrals' => 0
        ]);

        if ($data['referral_link']) {

            $userThatHasLink = User::where('referral_link', '=', $data['referral_link'])->get()[0]->load('referrals');

            $referrals = $userThatHasLink->referrals->referrals;

            $userThatHasLink->referrals()->update([
                'referrals' => $referrals + 1
            ]);

        }

        $user->account()->create([
            'balance' => 0,
            'profit' => 0
        ]);

        Mail::to(request()->email)->send(new WelcomeMail($user));
        
        alert('Successful', 'Your account has been created successfully', 'success');

        return $user;
    }


    public function register()
    {
        $this->validator(request()->all())->validate();

        event(new Registered($user = $this->create(request()->all())));

        if ($response = $this->registered(request(), $user)) {
            return $response;
        }

        return request()->wantsJson()
        ? new JsonResponse([], 201)
        : redirect($this->redirectPath());
    }
}
