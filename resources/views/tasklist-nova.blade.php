@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #84AE51;">
                    <div class="card-header">TaskList</div>
                    <div class="card-body">

                        <form method="POST" action="/tasklist/atualiza/{{$novaid}}">
                            @csrf

                            <div class="form-group row">
                                <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>

                                <div class="col-md-6">
                                    <input id="titulo" type="text" class="form-control" name="titulo" value="" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tarefa" class="col-md-4 col-form-label text-md-right">{{ __('Tarefa') }}</label>

                                <div class="col-md-6">
                                    <textarea id="tarefa" class="form-control" name="tarefa"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tarefa" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                                <div class="col-md-6">
                                <select class="form-control" name="estado" style="width: 140px">
                                    @foreach($estados as $estado)
                                    @if(empty($estado)){{ __('vazio') }}
                                    @else
                                            <option value="{{$estado}}" {{ (($estado == $tempestado)? "selected":"") }}>{{$estado}}</option>
                                    @endif
                                @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Inserir') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
