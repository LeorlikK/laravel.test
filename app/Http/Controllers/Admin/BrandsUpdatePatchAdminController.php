<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Brands\BrandsRequest;
use App\Models\Brand;

class BrandsUpdatePatchAdminController extends BaseAdminController
{
    public function __invoke(BrandsRequest $brandsRequest, Brand $patch, $page): object
    {
        return $this->brands_service->update_patch($brandsRequest, $patch, 'admin.brands_read', $page);
    }
}
