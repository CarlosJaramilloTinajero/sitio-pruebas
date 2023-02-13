<?php

namespace App\Console\Commands\Exel;

use App\Http\Services\APIS\Exel\ExelService;
use Illuminate\Console\Command;

class ExelGetSizeProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exel:getSizeProducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obtiene los tamaños de los productos de Exel';

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
        (new ExelService())->getSizeProducts($this->output);
    }
}
