<?php
    use App\Http\Controllers\TodosController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CategoriesController; 

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/todos', TodosController::class . '@index')->name('todos');
    Route::post('/todos', TodosController::class . '@store');
    Route::delete('/todos/{id}', [TodosController::class, 'destroy'])->name('todos-destroy');
    Route::get('/todos/{id}', [TodosController::class, 'show'])->name('todos-edit');
    Route::patch('/todos/{id}', [TodosController::class, 'update'])->name('todos-update');

    // Categorias
    Route::resource('categories', CategoriesController::class);