@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Trains </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Azienda</th>
                        <th>stazione_di_partenza</th>
                        <th>stazione_di_arrivo</th>
                        <th>codice_treno</th>
                        <th>numero_carrozze</th>
                        <th>in_orario</th>
                        <th>cancellato</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>orario_di_partenza</th>
                        <th>orario_di_arrivo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->azienda }}</td>
                            <td>{{ $train->stazione_di_partenza }}</td>
                            <td>{{ $train->stazione_di_arrivo }}</td>
                            <td>{{ $train->codice_treno }}</td>
                            <td>{{ $train->numero_carrozze }}</td>
                            <td>{{ $train->in_orario }}</td>
                            <td>{{ $train->cancellato }}</td>
                            <td>{{ $train->created_at }}</td>
                            <td>{{ $train->updated_at }}</td>
                            <td>{{ $train->orario_di_partenza }}</td>
                            <td>{{ $train->orario_di_arrivo }}</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
