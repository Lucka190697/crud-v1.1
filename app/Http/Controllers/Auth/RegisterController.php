<?php
namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Requests\UserRegisterRequest;

use App\Repositories\UserRepository;

class RegisterController extends Controller
{
   public function showRegistrationForm()
   {
        return view('auth.register');
   }

   public function register(UserRegisterRequest $request, UserRepository $repository)
   {
        $data = $request->all();

        $data['city'] = '';
        $data['state'] = '';
        $data['cep'] = '';
        $data['district'] = '';

        $users = $repository->createUser($data);
        $users->save();

        return view('auth.login');
   }
}