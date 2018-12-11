<?php
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return redirect('tasklist');
});

Auth::routes();

Route::group(['prefix' => 'tasklist'], function () {
    Route::any('/', 'TaskListController@index');
    Route::any('/lista', 'TaskListController@lista');
    Route::any('/nova', 'TaskListController@nova');
    Route::any('/atualiza/{novaid?}', 'TaskListController@atualiza');
    Route::any('/veja/{tarefa?}', 'TaskListController@veja');
    Route::any('/apaga/{tarefa?}', 'TaskListController@apaga');
});
