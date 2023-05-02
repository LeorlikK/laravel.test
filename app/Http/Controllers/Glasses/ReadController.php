<?php

namespace App\Http\Controllers\Glasses;

use App\Models\Glasses;

class ReadController extends BaseController
{
    public function __invoke(Glasses $item, $page): object
    {
        return $this->service->read($item, $page, 'glasses.glasses_read');
    }
}
