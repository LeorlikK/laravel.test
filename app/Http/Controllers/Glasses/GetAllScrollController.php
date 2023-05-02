<?php

namespace App\Http\Controllers\Glasses;

class GetAllScrollController extends BaseController
{
    public function __invoke(): object
    {
        return $this->service->get_all_scroll('glasses.all.glasses_all_scroll');
    }
}
