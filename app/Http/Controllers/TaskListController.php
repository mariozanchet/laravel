<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskList;
use Auth;
use DB;
use Carbon\Carbon;

class TaskListController extends Controller
{

    private $tarefas;
    public function __construct(TaskList $tarefas){
        $this->tarefas = $tarefas;
        $this->middleware('auth')->except('index');
    }

    public function index(Tasklist $tarefa)
    {
        return view('tasklist');
    }

    public function lista()
    {
       $userid = Auth::user()->id;
       $busca = DB::select("SELECT * FROM tasklists where cliente = '$userid' order by id asc");

      //  dd($busca);

        if(count($busca) > 0) {
            return view('tasklist-list', compact( 'busca'));
        }
        else{
            return redirect('/tasklist/nova');
        }

    }



    public function nova()
    {
        $userid = Auth::user()->id;
        $tempestado = "nova";
        $estados = ['nova', 'adiada', 'trabalhando', 'concluida', 'cancelada'];

        $nova = $this->tarefas->create([
                'cliente' => $userid,
                'titulo' => '',
                'tarefa' => '',
                'ativo' => 0,
                'estado' => $tempestado]
        );
        $novaid = $nova->id;
        return view('tasklist-nova', compact('novaid', 'estados', 'tempestado'));
    }

    public function atualiza(Request $request, $novaid = 0)
    {
        $userid = Auth::user()->id;

       $input = $request->only(['titulo', 'tarefa', 'estado']);

        DB::select("update tasklists set estado = '$input[estado]' where (cliente = '$userid' and id = '$novaid')");
        DB::select("update tasklists set titulo = '$input[titulo]' where (cliente = '$userid' and id = '$novaid')");
        DB::select("update tasklists set tarefa = '$input[tarefa]' where (cliente = '$userid' and id = '$novaid')");

        $busca = DB::select("SELECT * FROM tasklists where cliente = '$userid' order by id asc");
        return view('tasklist-list', compact( 'busca'));

    }

    public function veja($tarefaid = 0)
    {
        $userid = Auth::user()->id;

        $current_time = Carbon::now()->toDateTimeString();
        DB::select("update tasklists set vista = '$current_time' where (cliente = '$userid' and id = '$tarefaid')");

        $dados = DB::select("SELECT * FROM tasklists where (cliente = '$userid' and id = '$tarefaid')");
        $estados = ['nova','adiada','trabalhando','concluida','cancelada'];
      return view('tasklist-veja', compact( 'dados','estados'));

    }
    public function apaga($tarefa =0)
    {
        $userid = Auth::user()->id;

        if($tarefa > 0) {
             DB::select("delete FROM tasklists where (cliente = '$userid' and id = '$tarefa')");
        }

        return redirect('/tasklist/lista');
    }
}
