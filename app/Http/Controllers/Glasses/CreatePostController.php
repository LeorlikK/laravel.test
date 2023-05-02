<?php

namespace App\Http\Controllers\Glasses;

use App\Http\Requests\Glasses\Request;

class CreatePostController extends BaseController
{
    public function __invoke(Request $request): object
    {
        return $this->service->create_post($request, 'get_all');
    }
}
