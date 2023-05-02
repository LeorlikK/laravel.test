<?php

namespace App\Http\Controllers\Admin;

class GlassesCreateAdminController extends BaseAdminController
{
    public function __invoke(): object
    {
        return $this->glasses_service->create('admin.glasses.glasses_create');
    }
}
