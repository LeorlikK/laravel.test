<?php

namespace App\Http\Controllers\Admin;

class AdminController extends BaseAdminController
{
    public function __invoke(): object
    {
        return view('admin.index.index');
    }
}
