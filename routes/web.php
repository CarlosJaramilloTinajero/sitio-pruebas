<?php

use App\Http\Controllers\apiExelPruebaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\controladorSitio;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\products;
use App\Http\Controllers\pruebasGuzzle;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
use App\Jobs\newUser;
use App\Jobs\pruebaJob;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// API EXEL
Route::get('/getDatosApiExel/marcas', [apiExelPruebaController::class, 'getMarcas']);

Route::get('/getDatosApiExel/productos', [apiExelPruebaController::class, 'getProductos']);

Route::get('/getDatosApiExel/categorias', [apiExelPruebaController::class, 'getCategorias']);


// Inicio
Route::get('/', [controladorSitio::class, 'inicio'])->name('inicio');


// Rutas marcas
Route::resource('marcas', MarcaController::class);

// Rutas user
Route::resource('user', userController::class);

// Categorias
Route::get('/category/{id}', [products::class, 'categoryId'])->name('category.show');

// Producto
Route::get('/product/{id}', [products::class, 'productId'])->name('product.show');

// Rutas auth
Route::get('/registro', [registerController::class, 'registerView'])->name('registroVista');
Route::post('/registro', [registerController::class, 'register'])->name('registro');
Route::get('/login', [loginController::class, 'loginView'])->name('loginVista');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');


// Pruebas Guzzle API json placeholder
// posts
Route::get('/PruenasGuzzle/posts', [pruebasGuzzle::class, 'getPosts']);

Route::get('/productos-catalogo/{version}', function ($version) {
    $products = Product::where('category_id', 1)->get()->take(30);
    return view('frontend.productos.versiones', ['version' => $version, 'products' => $products]);
});

Route::get('/vistas-inicio/{version}', function ($version) {
    $products = Product::where('category_id', 1)->get()->take(30);
    $categories = Categories::get()->take(12);

    // Categorias para los dropdowns en el navbar
    $categoriesDrops = Categories::where('name', 'LIKE', "%Computo%")->orWhere('name', 'LIKE', "%Oficina y Escolar%")->orWhere('name', "Almacenamiento")->get();

    // La variale responsive es para poder quitar el dropdown de esa categoria dependiendo del tamaño de pantalla del dispositivo
    $categoryResponsive = $categoriesDrops->first();
    $categoryResponsive->reponsive = true;
    $categoriesDrops[0] = $categoryResponsive;

    return view('frontend.vistasInicio.index', ['version' => $version, 'products' => $products, 'categories' => $categories, 'categoriesDrops' => $categoriesDrops]);
})->name('inicio.version');

Route::get('/prueba-job-default', function () {
    pruebaJob::dispatch('queue = secondary')->onQueue('secondary');
    return response('Fin');
});

Route::get('/getUser/{id}', function ($id) {
    $user = User::find($id);
    newUser::dispatch($user)->onQueue('user');
});


Route::get('/prueba-job', function () {
    // Con el metodo 'dispatch' del job se ejecuta lo que esta en el metodo handle, y los parametros son los que se reciben en el constructor,
    // tambien en llos parametros de este funcion se pueden pasar modelos enteros de una clase modelo para poder trabajar con el en el job
    // Con este metodo el job se pone en cola
    pruebaJob::dispatch('queue = default');

    // El metodo 'onQueue' lo que hace es especificar en que cola se va a agregar, 
    // Lo que hace es guardar un nuevo registro en la tabla jobs de la BD, pero en el campo 'queue' le pone el nombre de lo que le es tamos pasando como parametro
    // que en este caso es 'secondary', ya que si no se especifica el nombre de la cola el va a poner el nombre que tengamos por defecto en el archivo 'queue.php' de la carpeta 'config'
    pruebaJob::dispatch('queue = secondary')->onQueue('secondary');


    // el metodo 'onConnection' sirve para especificar que tipo de conexion tiene cada job como 'sync', 'database', 'redis' etc.
    // pruebaJob::dispatch('Hola')->onConnection('database');

    // El metodo 'dispatchAfterResponse' hace lo mismo que el dispatch solo que se ejecuta despues de darle la respuesta al usuario
    // pruebaJob::dispatchAfterResponse('despues de la repuesta');

    return response('Fin');
});



Route::get('/editor-quill', function () {
    return view('frontend.editoresBlog.editor-quill');
});
