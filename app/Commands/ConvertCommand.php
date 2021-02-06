<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\Traits\GeneralTrait;
use App\Classes\CommandClass;

class ConvertCommand extends Command
{
    use GeneralTrait;

    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'convert {input* : Enter your string}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Please enter a string';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $input = $this->argument('input');

        $commandFunction = new CommandClass(); 
        $upperCaseStr = $commandFunction->getUpperStr($input);
        $this->info($upperCaseStr);

        $alternateStr = $commandFunction->getAlternateStr($upperCaseStr);
        $this->info($alternateStr);

        $createCsv = $commandFunction->createCSV($upperCaseStr); 
        if($createCsv) 
            $this->info('CSV created');
        else
            $this->info('CSV creation failed');
    }
}
