<?php

namespace App\Service\Users;

use App\Http\Requests\Users\UsersRequest;
use App\Models\Brand;
use App\Models\User;

class Service
{
    public function get_all_paginator_template($view_way): object
    {
        $uss = User::paginate(2);
        return view($view_way, compact('uss'));
    }

    public function update_state(UsersRequest $usersRequest, User $patch, $view_way): object
    {
        $data = $usersRequest->validated();
        $patch['state'] = $data['state'];
        $patch->save();
        $uss = User::paginate(2);
        return view($view_way, compact('uss'));
    }
}
