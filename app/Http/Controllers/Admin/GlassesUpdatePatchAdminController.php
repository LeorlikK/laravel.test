<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Glasses\UpdateRequest;
use App\Models\Glasses;

class GlassesUpdatePatchAdminController extends BaseAdminController
{
    public function __invoke(UpdateRequest $updateRequest, Glasses $patch, $page): object
    {
        return $this->glasses_service->update_patch($updateRequest, $patch, 'admin.glasses_read', $page);
    }
}
