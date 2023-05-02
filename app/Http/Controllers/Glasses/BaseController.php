<?php

namespace App\Http\Controllers\Glasses;

use App\Http\Controllers\Controller;
use App\Service\Glasses\Service;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
