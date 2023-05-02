<?php

namespace App\Http\Controllers\Glasses;

use App\Models\Glasses;

class UpdateController extends BaseController
{
    public function __invoke(Glasses $item, $page): object
    {
        return $this->service->update($item, $page, 'glasses.glasses_update');
    }
}
