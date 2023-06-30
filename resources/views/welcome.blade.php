@extends('layouts.app')
@section('page-title','Pagina principale')
@section('content')
<div class="container my-3">
    <h1>Lista treni</h1>
    <div class="row g-4">
            
            
            @foreach ($trains as $item)
            <div class="card col-3 mx-4 my-5">
                <div class="card-body">
                    <h5 class="card-title">{{$item->azienda}}</h5>
                    <p class="card-text">Stazione di partenza:{{$item->stazione_partenza}}</p>
                    <p class="card-text">Stazione arrivo:{{$item->stazione_arrivo}}</p>
                    <small class="card-text">Orario Partenza:{{$item->orario_partenza}}</small>
                    <p><small class="card-text">Orario Arrivo:{{ $item->orario_arrivo }}</small> </p>
                    <p class="card-text">Num carrozze: {{$item->num_carrozze}} </p>
                    <p class="card-text">In orario: {{$item->in_orario}} </p>
                    <p class="card-text">In cancellazione: {{$item->cancellato}} </p>
                    <p class="card-text">Data partenza: {{$item->data_partenza}}</p>
                    <div>
                            <a href="/" class="card-link">Card link</a>
                            <a href="/otherpage" class="card-link">Another link</a>
                    </div>
                  
                </div>
            </div>
            @endforeach
               
            
        
    </div>

</div>
@endsection