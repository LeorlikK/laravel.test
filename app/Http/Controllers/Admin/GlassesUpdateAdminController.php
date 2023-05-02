<?php

namespace App\Http\Controllers\Admin;

use App\Models\Glasses;

class GlassesUpdateAdminController extends BaseAdminController
{
    public function __invoke(Glasses $item, $page): object
    {
        return $this->glasses_service->update($item, $page, 'admin.glasses.glasses_update');
    }
}
