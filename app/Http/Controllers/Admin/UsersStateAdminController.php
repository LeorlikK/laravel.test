<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Users\UsersRequest;
use App\Models\User;

class UsersStateAdminController extends BaseAdminController
{
    public function __invoke(UsersRequest $usersRequest, User $patch): object
    {
        return $this->users_service->update_state($usersRequest, $patch, 'admin.users.users_all');
    }
}
