<?php

namespace Company\Repositories;

use User;
use Contact;
use Hash;

class UserRepository extends EloquentRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function register($input)
    {
        $input[ 'password' ] = Hash::make($input[ 'password' ]);
        return $this->model->create($input);
    }

    public function getAllContacts()
    {
        return $this->model->contacts()
            ->get();
    }

    public function hasContact(Contact $contact)
    {
        return $contact->user_id == $this->model->id;
    }

    public function getByEmail($email)
    {
        $userObject = $this->model->where('email', '=', $email)
            ->first();

        if ($userObject) {
            $this->model = $userObject;
        }

        return $userObject;
    }
}
