<?php
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\RazonSocialController;
use App\Http\Controllers\VacacionController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\BonoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\NominaController;

/*use App\Http\Controllers\AsignacionController;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//rutas para gregar los proyectos y los grupos
Route::get('/gestion/grupos', [GroupController::class, 'index'])->name('grupo');
Route::resource('project', ProjectController::class);
Route::resource('group', GroupController::class);
Route::resource('projects', ProjectController::class);

//editar un proyecto
Route::put('/project/{id}', [ProjectController::class, 'update'])->name('project.update');




//rutas de los puestos
Route::get('/puestos', [PuestoController::class, 'index'])->name('puestos');
Route::resource('puesto', PuestoController::class);

//fin de la rutas de los puestos
//rutas razones sociales
Route::resource('razones', RazonSocialController::class);
Route::get('/razones', [RazonSocialController::class, 'index'])->name('razones');
Route::put('/razones/{id}', [RazonSocialController::class, 'update'])->name('razones.update');
Route::delete('/razones/{id}', [RazonSocialController::class, 'destroy'])->name('razones.destroy');
//fin de las rutas para los grupos

//rutas para asiganr equipos

Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos');
Route::resource('equipo', EquipoController::class);


Route::get('/asignar-equipo', [AsignacionController::class, 'index'])->name('asignar');
/* Route::post('/asignar-equipo/{empleado}', [AsignacionController::class, 'asignarEquipo'])->name('asignar_equipo'); */
Route::resource('asignaciones', AsignacionController::class);


//fin de asignar equipos
//rutas nominas
Route::resource('nomina', NominaController::class);
Route::get('/nomina', [NominaController::class, 'index'])->name('nomina');

//fin nominas

//Rutas para agregar un nuevo empleado
Route::resource('empleados', EmpleadoController::class);
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados');

/* Route::get('/empleados.store', [EmpleadoController::class, 'store'])->name('empleados.store'); */


//rutas para el calendario
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario');
Route::resource('projects', CalendarioController::class);

//rutas departamentos
Route::resource('departamentos', DepartamentoController::class);
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos');


//rutas de gestion operativa
Route::get('/gestion', [ProjectController::class, 'index'])->name('project');

//vacaciones rutas
Route::get('/vacaciones', [VacacionController::class, 'index'])->name('vacaciones');
/* Route::resource('vacacion', VacacionController::class); */
Route::resource('vacacion', VacacionController::class);

//recursos vacaciones
Route::post('/vacaciones', [VacacionController::class, 'store'])->name('vacacion.store');
Route::put('/vacaciones/{id}', [VacacionController::class, 'update'])->name('vacacion.update');
Route::delete('/vacaciones/{id}', [VacacionController::class, 'destroy'])->name('vacacion.destroy');
//fin vacaciones rutas

//rutas del perfil de usuario
Route::get('/perfil', [PerfilController::class, 'index'])->name('user');
/* Route::put('/perfil/{perfil}', [PerfilController::class, 'update'])->name('perfiles.update');
Route::resource('perfiles', PerfilController::class); */
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
Route::put('/perfil/update-name', [PerfilController::class, 'updateName'])->name('perfil.update.name');
Route::put('/perfil/update-photo', [PerfilController::class, 'updatePhoto'])->name('perfil.update.photo');
//fin de las rutas de perfil de usuarios

/* autenticacion para acceder */
Route::middleware(['auth'])->group(function () {
    // Aquí van todas las rutas que requieren autenticación
    Route::get('/inicio', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'logout']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Auth::routes();
});

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/incidencias', [IncidenciaController::class, 'index'])->name('incidencias');
Route::resource('incidencia', IncidenciaController::class);

Route::get('/bonos', [BonoController::class, 'index'])->name('bonos');
Route::resource('bono', BonoController::class);

Route::get()
Route::resource('compras', CompraController::class);

Route::get('/compras', [CompraController::class, 'index'])->name('compras.index');
Route::post('/compras', [CompraController::class, 'store'])->name('compras.store');
Route::put('/compras/{compra}', [CompraController::class, 'update'])->name('compras.update');
Route::delete('/compras/{compra}', [CompraController::class, 'destroy'])->name('compras.destroy');

