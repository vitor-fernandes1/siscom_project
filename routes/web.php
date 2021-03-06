<?php

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

Route::get('/index', 'Site\SiteController@index')->name('home.index');
Route::get('central', 'Site\CentralController@index')->name('central.index');
Route::get('avisos', 'Site\AvisoController@index')->name('avisos.index');

Route::group( [ ], function(){
    Route::get('empresa', 'Api\EmpresaController@index')->name('empresa.index');
    Route::get('empresa/{id}', 'Api\EmpresaController@show')->name('empresa.show');
    Route::post('empresa', 'Api\EmpresaController@store')->name('empresa.store');
    Route::get('empresa/update/{id}', 'Api\EmpresaController@update')->name('empresa.update');
    Route::delete('empresa/delete/', 'Api\EmpresaController@destroy')->name('empresa.delete');
});

Route::group( [ ], function(){
    Route::get('equipamento', 'Api\EquipamentoController@index')->name('equipamento.index');
    Route::get('equipamento/{id}', 'Api\EquipamentoController@show')->name('equipamento.show');
    Route::post('equipamento', 'Api\EquipamentoController@store')->name('equipamento.store');
    Route::put('equipamento/update/{id}', 'Api\EquipamentoController@update')->name('equipamento.update');
    Route::delete('equipamento/delete/', 'Api\EquipamentoController@destroy')->name('equipamento.delete');
});

Route::group( [ ], function(){
    Route::get('manutencao', 'Api\ManutencaoController@index')->name('manutencao.index');
    Route::get('manutencao/{id}', 'Api\ManutencaoController@show')->name('manutencao.show');
    Route::post('manutencao', 'Api\ManutencaoController@store')->name('manutencao.store');
    Route::get('manutencao/update/{id}', 'Api\ManutencaoController@update')->name('manutencao.update');
    Route::get('manutencao/delete/', 'Api\ManutencaoController@destroy')->name('manutencao.delete');
});

Route::group( [ ], function(){
    Route::get('estatistica', 'Api\EstatisticaController@index')->name('estatistica.index');
    Route::get('estatistica/equipamento/{id}', 'Api\EstatisticaController@show')->name('estatistica.show');
    Route::get('estatistica/equipamento/relatorio/{id}', 'Api\EstatisticaController@geradorRelatorio')->name('estatistica.relatorio');
    /*Route::post('estatistica', 'Api\ManutencaoController@store')->name('manutencao.store');
    Route::get('estatistica/update/{id}', 'Api\ManutencaoController@update')->name('manutencao.update');
    Route::get('estatistica/delete/', 'Api\ManutencaoController@destroy')->name('manutencao.delete');*/
});

Route::group( [ ], function(){
    Route::get('grafico', 'Api\GraficoController@index')->name('estatistica.index');
    Route::get('grafico/equipamento/{id}', 'Api\GraficoController@show')->name('estatistica.show');
    /*Route::post('estatistica', 'Api\ManutencaoController@store')->name('manutencao.store');
    Route::get('estatistica/update/{id}', 'Api\ManutencaoController@update')->name('manutencao.update');
    Route::get('estatistica/delete/', 'Api\ManutencaoController@destroy')->name('manutencao.delete');*/
});

Route::group( [ ], function(){
    Route::get('gerenciamento', 'Api\GerenciamentoController@index')->name('gerenciamento.index');
    Route::get('gerenciamento/equipamento/{id}', 'Api\GerenciamentoController@show')->name('gerenciamento.show');
});

Route::group( [ ], function(){
    Route::get('avisos', 'Api\AvisoController@index')->name('avisos.index');
    //Route::get('avisos', 'Api\AvisoController@show')->name('avisos.show');
});

Route::group( [ ], function(){
    Route::get('indicar-empresa', 'Api\IndicarEmpresaController@index')->name('indicar.index');
    //Route::get('indicar/equipamento/{id}', 'Api\indicarController@show')->name('indicar.show');
});

Route::group( [ ], function(){
    Route::get('baixar-manutencao', 'Api\BaixarManutencaoController@index')->name('baixar-manutencao.index');
    Route::get('baixar-manutencao/{id}', 'Api\BaixarManutencaoController@show')->name('baixar-manutencao.show');
    Route::get('baixar-manutencao/{id}/{avaliacao}', 'Api\BaixarManutencaoController@avaliar')->name('baixar-manutencao.avaliar');
});

Auth::routes();

