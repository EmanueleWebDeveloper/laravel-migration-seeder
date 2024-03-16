@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('content')
    <h1>Pagina di benvenuto</h1>

    <main>
    <div class="container">
        @foreach ( $trains as $item )

        <div class="card">
            <h2>{{$item->Stazione_arrivo}}</h2>
            <h4>Company: {{$item->Azienda}}</h4>
            <div>
                <b>Departure Station:</b>
                {{$item->Stazione_partenza}}
            </div>
            <div>
                <b>Departure Time:</b>
                {{$item->Orario_partenza}}
            </div>
            <div>
                <b>Arrival Time:</b>
                {{$item->Orario_arrivo}}
            </div>
            <div>
                <b>On Time?</b>
                {{ $item->In_orario == 1 ? 'Yes' : 'No' }}
            </div>
            <div>
                <b>Cancelled?</b>
                {{$item->Cancellato == 1 ? 'Yes' : 'No'}}
            </div>
        </div>

        @endforeach
@endsection
