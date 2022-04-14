<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterRepository
{
    public $register;
    public function __construct(User $register)
    {
        $this->register = $register;
    }

    public function createUser($data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->register->create($data);
    }
}