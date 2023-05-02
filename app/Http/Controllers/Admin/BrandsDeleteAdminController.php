<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;

class BrandsDeleteAdminController extends BaseAdminController
{
    public function __invoke(Brand $patch): object
    {
        return $this->brands_service->delete($patch, 'admin.brands');
    }
}
