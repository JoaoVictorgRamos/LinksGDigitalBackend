<?php

use App\BaseLinks;
use Illuminate\Http\Request;
use App\Models\BaseLink;     
use App\Models\Link;     


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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-link', function (Request $informacoes) {
    $dataBase = BaseLink::create([
        'titulo'=> $informacoes -> titulo,
        'url_original'=>$informacoes->url_original,
        'total_max_click'=>$informacoes->total_max_click
    ]);
    echo $dataBase->id;
});

Route::get('/mostrar-link',function () {
    $dados = BaseLink::all();
return $dados;
});

Route::get('/editar-link/{id}',function ($id) {
$dados = BaseLink::find($id);
return view('editar_link',['dados'=>$dados]);
});

Route::put('/atualizar-link/{id}',function (Request $informacoes , $id) {
    $dados = BaseLink::find($id);
    $dados->titulo= $informacoes->titulo;
    $dados->url_original= $informacoes->url_original;
    $dados->total_max_click= $informacoes->total_max_click;
    $dados->save();
    echo "link salvo";
    });

Route::get('/excluir-link/{id}',function ($id) {
    $dados = BaseLink::find($id);
    $dados->delete();
    echo "link excluido";
});





Route::post('/cadastrarlinks', function (Request $informacoeslinks) {;
    Link::create([
        'id_base'=> $informacoeslinks->get('id_base'),
        'url_titulo'=>$informacoeslinks->get('url_titulo'),
        'cliques,'=>$informacoeslinks->get('cliques'),
        'total_cliques,'=>$informacoeslinks->get('total_cliques'),
    ]);
    echo "links Criado";
});

Route::get('/mostrarlinks/{id}',function ($id) {
    $dados = Link::find($id);
echo $dados->id;
echo $dados->id_base;
echo $dados->url_titulo;
echo $dados->cliques;
echo $dados->total_cliques;
});

Route::get('/editarlinks/{id}',function ($id) {
    $dados = Link::find($id);
    return view('editar_link',['dados'=>$dados]);
    });
    
    Route::put('/atualizarlinks/{id}',function (Request $informacoes , $id) {
        $dados = Link::find($id);
        $dados->id_base= $informacoes->id_base;
        $dados->url_titulo= $informacoes->url_titulo;
        $dados->cliques= $informacoes->cliques;
        $dados->total_cliques= $informacoes->total_cliques;
        $dados->save();
        echo "link salvo";
        });
    
    Route::get('/excluirlinks/{id}',function ($id) {
        $dados = Link::find($id);
        $dados->delete();
        echo "link excluido";
    });

