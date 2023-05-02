<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Glasses\Request;

class GlassesCreatePostAdminController extends BaseAdminController
{
    public function __invoke(Request $request): object
    {
        return $this->glasses_service->create_post($request, 'admin.glasses');
    }
}
