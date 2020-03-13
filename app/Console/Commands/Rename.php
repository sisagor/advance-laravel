<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Rename extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Illusive:Rename {from : name of table you want to rename} {to : table name you want to}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rename Table';

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
     * @return mixed
     */
    public function handle()
    {
        $from = $this->argument('from');
        $to = $this->argument('to');
        $action = DB::statement("ALTER TABLE $from RENAME TO $to");
        if ($action == 1){
            $msg = "Success! Table $from now Renamed to $to";
        }else{
            $msg = "failed!";
        }
        $this->info($msg);
    }
}
