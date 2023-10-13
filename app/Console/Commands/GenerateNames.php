<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GenerateNames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a random name.';

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
        $names = User::all();

        $namings = [];

        foreach($names as $name)
        {
            $namings[] =  $name->name;
        }

        shuffle($namings);

        $this->info($namings[0]);
    }
}
