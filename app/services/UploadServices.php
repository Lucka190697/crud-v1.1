<?php

namespace App\services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\UserController;

use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\ProductController;


use App\User;

class UploadServices
{
	/* IMAGENS do usuario */
	public function createProfile($request)
	{
		$profile = $request->file('profile');
		$profileName = time() . '-' . request()->profile->getClientOriginalName();
		request()->profile->move(public_path('profiles'), $profileName);

		$data = $request->all();
		$data['profile'] = $profileName;

		return $data;
	}

	public function updateProfile($id, $request)
	{
		$profile = $request->file('profile');
		$profileName = time() . '-' . request()->profile->getClientOriginalName();
		request()->profile->move(public_path('profiles'), $profileName);

		$data = $request->all();
		$data['profile'] = $profileName;

		return $data;
	}

	/*imagens dos produtos*/

	public function createPicture($request)
	{
		$thumbnail = $request->file('thumbnail');
		$image = $request->file('image');
		$thumbnailName = time() . '-' . request()->thumbnail->getClientOriginalName();
		$imageName = time() . '-' . request()->image->getClientOriginalName();
		request()->thumbnail->move(public_path('thumbnails'), $thumbnailName);
		request()->image->move(public_path('images'), $imageName);

		$data = $request->all();
		$data['thumbnail'] = $thumbnailName;
		$data['image'] = $imageName;

		return $data;
	}

	public function updatePicture($id, $request)
	{
		$thumbnail = $request->file('thumbnail');
		$image = $request->file('image');
		$thumbnailName = time() . '-' . request()->thumbnail->getClientOriginalName();
		$imageName = time() . '-' . request()->image->getClientOriginalName();
		request()->thumbnail->move(public_path('thumbnails'), $thumbnailName);
		request()->image->move(public_path('images'), $imageName);

		$data = $request->all();
		$data['thumbnail'] = $thumbnailName;
		$data['image'] = $imageName;
		return $data;
	}
}