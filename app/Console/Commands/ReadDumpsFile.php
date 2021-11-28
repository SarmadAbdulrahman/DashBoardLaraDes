<?php

namespace App\Console\Commands;

use App\Models\FileDump;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ReadDumpsFile extends Command
{
    // * * * * * /usr/bin/php7.1 /Users/murtadajawad/Documents/2021/larDop/ResTabox/artisan schedule:run 1>> /dev/null 2>&1
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dumps:read';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this for read dat files from the dir';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $directory='';
        $files = Storage::disk('datFiles')->allFiles($directory);

        foreach ($files as $key => $value) {

            FileDump::create([
                'file_name'=>$value,
                'trace'=>$key,
            ]);

        }
        return Command::SUCCESS;
    }
}
