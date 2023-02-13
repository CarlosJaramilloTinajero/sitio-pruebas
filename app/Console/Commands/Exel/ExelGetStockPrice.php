<?php

namespace App\Console\Commands\Exel;

use App\Http\Services\APIS\Exel\ExelService;
use Illuminate\Console\Command;

class ExelGetStockPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exel:getStockPrice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obtiene el precio y el stcok de un producSupplier por almacen';

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
        (new ExelService())->getStockPrice($this->output);
    }
}
