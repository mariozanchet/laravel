@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #84AE51;">
                    <div class="card-header">TaskList</div>

                    <div class="card-body">

        <table border="0">
            <tr>
                <td></td>
                <td>tarefa</td>
                <td>estado</td>
                <td></td>
            </tr>
            @forelse ($busca as $dado)
         <tr bgcolor="#84AE51">
             <td valign="top" height="30"><a title="Ver Mensagem" href="/tasklist/veja/{{$dado->id}}"><img src="/img/avante.gif" width="30" height="30" alt="Ver Mensagem"></a></td>
             <td valign="top" height="30"><a title="Ver Mensagem" href="/tasklist/veja/{{$dado->id}}"><big>{{$dado->titulo}}</big></a></td>
             <td valign="top" height="30">{{$dado->estado}}</td>
             <td valign="top" height="30"><a title="Apagar Mensagem" href="/tasklist/apaga/{{$dado->id}}"><img src="/img/lixo.gif" width="30" height="30" alt="Apagar Mensagem"></a></td>
         </tr>
        <tr bgcolor="#99BC6D" style="border-bottom:solid 2px #4B632E">
            <td></td>
            <td valign="top" colspan="4"><p style="text-align: justify">{!! nl2br(e($dado->tarefa))!!}</p></td>
        </tr>

        @empty
                <tr><td>sem dados</td></tr>


    @endforelse
        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
