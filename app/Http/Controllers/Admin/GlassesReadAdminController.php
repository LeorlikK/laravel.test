<?php

namespace App\Http\Controllers\Admin;

use App\Models\Glasses;

class GlassesReadAdminController extends BaseAdminController
{
    public function __invoke(Glasses $item, $page): object
    {
        return $this->glasses_service->read($item, $page, 'admin.glasses.glasses_read');
    }
}
