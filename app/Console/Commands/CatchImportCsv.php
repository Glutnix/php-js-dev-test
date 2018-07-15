<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Reader;
use App\Customer;

class CatchImportCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'catch:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports the resources/assets/customers.csv file into the database.';

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
        $this->info('Importing customers.csv into the database...');

        $csv = Reader::createFromPath(resource_path('assets/customers.csv'), 'r');

        $csv->setHeaderOffset(0);
        $headers = $csv->getHeader();
        $count = count($csv);

        $bar = $this->output->createProgressBar($count);

        foreach ($csv as $record) {
            Customer::updateOrCreate($record);
            $bar->advance();
        }

        $bar->finish();

        $this->info("\nSuccess! $count users imported!");
    }
}
