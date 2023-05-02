<?php

namespace App\Http\Controllers\Glasses;

use App\Models\Glasses;

class DeleteController extends BaseController
{
    public function __invoke(Glasses $patch): object
    {
        return $this->service->delete($patch, 'get_all');
    }
}
