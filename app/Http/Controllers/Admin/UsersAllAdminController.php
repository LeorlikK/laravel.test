<?php

namespace App\Http\Controllers\Admin;

class UsersAllAdminController extends BaseAdminController
{
    public function __invoke(): object
    {
        return $this->users_service->get_all_paginator_template('admin.users.users_all');
    }
}
