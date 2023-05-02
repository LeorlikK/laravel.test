<?php

namespace App\Http\Controllers\Glasses;

class CreateController extends BaseController
{
    public function __invoke(): object
    {
        return $this->service->create('glasses.glasses_create');
    }
}
