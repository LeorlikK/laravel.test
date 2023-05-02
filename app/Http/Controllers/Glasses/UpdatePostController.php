<?php

namespace App\Http\Controllers\Glasses;

use App\Http\Requests\Glasses\UpdateRequest;
use App\Models\Glasses;

class UpdatePostController extends BaseController
{
    public function __invoke(UpdateRequest $updateRequest, Glasses $patch): object
    {
        return $this->service->update_patch($updateRequest, $patch, 'glasses_read');
    }
}
