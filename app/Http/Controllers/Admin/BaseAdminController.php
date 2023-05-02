<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Glasses\Service as Glasses_Service;
use \App\Service\Brands\Service as Brands_Service;
use \App\Service\Users\Service as Users_Service;

class BaseAdminController extends Controller
{
    public Glasses_Service $glasses_service;
    public Brands_Service $brands_service;
    public Users_Service $users_service;

    public function __construct(Glasses_Service $glasses_service, Brands_Service $brands_service, Users_Service $users_service)
    {
        $this->glasses_service = $glasses_service;
        $this->brands_service = $brands_service;
        $this->users_service = $users_service;
    }
}
