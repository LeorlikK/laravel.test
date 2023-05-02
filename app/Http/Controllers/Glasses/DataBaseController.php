<?php

namespace App\Http\Controllers\Glasses;

class DataBaseController extends BaseController
{
    public function __invoke(): object
    {
        return view('glasses.all.database');
    }
}
