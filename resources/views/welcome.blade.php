@extends('layouts.main')

@section('title', 'PH Home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form>
        <input type="text" id="search" name="search" class="form-control">

    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>
        Veja os eventos dos próximos dias
    </p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/logo.jpg" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">10/09/2023</p>
                <h5 class="card-title">10/09/2023</h5>
                <p class="card-participantes">43</p>
                <a href="#" class="btn btn-primary">Saiba mais!</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection