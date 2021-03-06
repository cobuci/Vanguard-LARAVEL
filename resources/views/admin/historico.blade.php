@extends('admin.master.layout')
@section('title', 'Histórico')
@section('content')


    <div class="container">
        <h1 class="text-center text-light">Histórico</h1>
    </div>
    <div class="container" style="margin-top: 15px">
        <div class="row" style="padding-right: 16px; padding-left: 16px">
            <div class="col-12"
                style="background: rgba(255, 255, 255, 0.7);color: var(--bs-gray-900);border-radius: 10px;">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class="text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Ação</th>
                                <th>Descrição</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody class="text-truncate text-dark">
                            @foreach (Historico::listarHistorico() as $historico)
                                <tr>
                                    <td># {{ $historico->id}}</td>
                                    <td>{{ $historico->tipo}}</td>
                                    <td>{{ $historico->descricao}}</td>
                                    <td>{{ $historico->data}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
