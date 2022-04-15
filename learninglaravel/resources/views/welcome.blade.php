@extends('layouts.main')

@section('title', 'HDC events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id='search' name="search" class="form-control" placeholder="procurar...">
    </form>
</div>
 <div id="events-container" class="cold-md-12">
     <h2>Próximos Eventos</h2>
     <p>Veja os eventos nos próximos dias</p>

     <div id="cards-container" class="row">
        @foreach($events as $event)
            <div id="card" class="col-md-3">
                <img src="/img/logo0.jpg" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">
                        01/05/2022
                    </p>
                    <h5 class="card-title">
                        {{ $event->title }}
                    </h5>
                    <p class="card-participants">
                        X participantes
                    </p>
                    <a href="#" class="btn-btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
     </div>
 </div>

@endsection