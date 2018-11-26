<?php

namespace App\Repositories;

use App\User;
use App\Base\Repository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository
{

    protected function getClass()
    {
        return User::class;
    }

    public function createUser($data)
    {
      $data['password'] = Hash::make($data['password']);
      return $this->model->create($data);
      // dd('aki');
    }

    public function updateUser($data, $id)
    {
      $model = $this->model->find($id);
      
      $data['password'] = Hash::make($data['password']);

      return $model->update($data);
    }
}
