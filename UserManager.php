<?php

class UserManager implements ActionInterface
{

    protected int $role;

    public function __construct($role)
    {
        $this->role = $role;
    }


    function create()
    {
        // TODO: Implement create() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function edit()
    {
        // TODO: Implement edit() method.
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
    }

    function isAdmin(): bool
    {
        return $this->role == RoleInterface::ROLE_ADMIN;
    }


    function getByIndex($index)
    {
        // TODO: Implement getByIndex() method.
    }
}