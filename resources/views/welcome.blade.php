@extends('layout.app')

@section('content')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12">
                <h4>Drag and Drop - Liveware - Sortable.js</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-default">Conteudo</button>
                <button type="button" class="btn btn-default">Noticia</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Itens:
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="border: 1px solid gray; min-height: 350px; max-width: 100vw;">
                <livewire:drag-drop-sortable />
            </div>
        </div>
    </div>
@endsection
