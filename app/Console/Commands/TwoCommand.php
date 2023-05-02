<?php

namespace App\Console\Commands;

use App\Imports\GlassesImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class TwoCommand extends Command
{
    protected $signature = 'my_command:excel';

    protected $description = 'Get excel file';

    public function handle()
    {
        ini_set('memory_limit', -1);
        Excel::import(new GlassesImport, 'users.xlsx'); public_path('');

        return redirect('/')->with('success', 'All good!');
    }
}
