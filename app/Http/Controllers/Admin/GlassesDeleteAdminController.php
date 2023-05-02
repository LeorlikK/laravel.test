<?php

namespace App\Http\Controllers\Admin;

use App\Models\Glasses;

class GlassesDeleteAdminController extends BaseAdminController
{
    public function __invoke(Glasses $patch): object
    {
        return $this->glasses_service->delete($patch, 'admin.glasses_read');
    }
}
