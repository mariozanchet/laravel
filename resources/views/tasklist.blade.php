@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #84AE51;">
                    <div class="card-header">TaskList</div>

                    <div class="card-body">
                        <p style="text-align: justify">
                            Prova prática<br>
                            <br>
                            Informações importantes:<br>
                            O objetivo é avaliar a sua capacidade para construção de soluções, qualidade do código, entendimento da tecnologia. Competências como capacidade de organização, criatividade, clareza e assertividade também serão observadas. Você tem 48h para finalizar o trabalho. Disponibilize o código no github e envie o link por email.<br>
                            Tarefa: Implementar uma tasklist com a stack PHP/MySQL.<br>
                            Requisitos:<br>
                            O usuário deve poder:<br>
                            ·        Adicionar novas tarefas;<br>
                            ·        Marcar e desmarcar o status de concluído;<br>
                            ·        Editar o conteúdo da tarefa;<br>
                            ·        Deletar uma tarefa;<br>
                            ·        Obs.: uma tarefa deve conter ao menos: título e status, podendo conter adicionalmente descrição, datas de criação, edição, remoção e conclusão.<br>
                            <br>
                            Serão considerados diferenciais:<br>
                            ·        Versionamento com Git;<br>
                            ·        Camada de frontend independente do backend (API REST + frontend);<br>
                            ·        Utilização de frameworks ou bibliotecas de frontend (ex: jQuery, Angular, Bootstrap);<br>
                            ·        Utilização de framework para o backend (ex: CakePHP, Laravel, Slim ou outro   qualquer);<br>
                            ·        Bons padrões de desenvolvimento e código limpo (PSRs);<br>
                            ·        Documentação no código (onde aplicável);<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
