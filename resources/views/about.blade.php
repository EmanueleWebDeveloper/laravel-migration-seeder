@extends('layouts.basic')

@section('title', 'Benvenuto | About')

@section('content')
<main>
    <h2 style="text-align: center; margin-block: 1em; color: rgb(44, 104, 47)">Filtro:</h2>

    <div class="container">
        @foreach ( $filteredTrains as $item )

        <div class="card">
            <h2>{{$item->Stazione_arrivo}}</h2>
            <h4>Company: {{$item->Azienda}}</h4>
            <div>
                <b>Departure Station:</b>
                {{$item->Stazione_partenza}}
            </div>
            <div>
                <b>Departure Date:</b>
                {{$item->Data_Partenza}}
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

    </div>
</main>



@endsection
