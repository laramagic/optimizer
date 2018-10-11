<?php

namespace LaralLover\Optimizer\Console;

use DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Input\InputArgument;

use LaralLover\Optimizer\Models\Permission;

class PermissionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vendor:discover {enable}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Vendor Discovery';

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
        /*@todo: Need to write permission to optimize HTML*/

        $this->info("Command Successfully Executed..!!");
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['enable', InputArgument::OPTIONAL, 'Enable Permission'],
        ];
    }
}
