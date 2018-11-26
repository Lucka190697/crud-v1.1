<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\services\UploadServices;
use App\User;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller {

    public function index() {
        $users = User::all();

        return view('users/index', compact('users'));
    }

    public function create() {
        return view('users/create');
    }

    public function store(
        UserRequest $request,
        UserRepository $repository,
        UploadServices $profile
    ) {
        $createProfile = $profile->createProfile($request);
        $users = $repository->createUser($createProfile);

        $users->save();

        return redirect()->route('users');
    }

    public function edit(UserRepository $repository, $id) {
        $users = $repository->find($id);

        return view('users/edit', compact('users'));
    }

    public function update(
        UserRequest $request,
        UserRepository $repository, $id,
        UploadServices $profile
    ) {
        $user = $repository->find($id);
        $updateProfile = $profile->updateProfile($id, $request);
        $user = $repository->updateUser($updateProfile, $id);

        return redirect()->route('users');
    }

    public function show(UserRepository $repository, $id) {
        $user = $repository->find($id);

        return view('users/show', compact('user'));
    }

    public function destroy(UserRepository $repository, $id) {
        $repository->delete($id);

        return redirect()->route('users');
    }
}