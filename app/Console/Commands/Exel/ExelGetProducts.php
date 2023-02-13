<?php

namespace App\Console\Commands\Exel;

use App\Http\Services\APIS\Exel\ExelConection;
use App\Http\Services\APIS\Exel\ExelService;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductSupplier;
use App\Models\subcategories;
use Illuminate\Console\Command;

class ExelGetProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exel:getProducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obtiene los productos, marcas, categorias, subcategorias y actualiza los productSuppliers con el precio y la moneda de exel';

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
         (new ExelService())->getProducts($this->output);
   }
}
