<?php

namespace App\Console\Commands;

use App\Components\GazzleClient;
use Illuminate\Console\Command;

class OneCommand extends Command
{
    protected $signature = 'my_command:one';

    protected $description = 'Get json file';

    public function handle()
    {
        $import = new GazzleClient();
        $res = $import->client->request('get', '');
        echo '-----------------------------------------------------------------';
        dd($res->getBody()->getContents());
    }
}
