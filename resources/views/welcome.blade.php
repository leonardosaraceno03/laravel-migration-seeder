@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $elem)
                    <tr>
                        <td>{{ $elem['id'] }}</td>
                        <td>{{ $elem['stazione_di_partenza'] }}</td>
                        <td>{{ $elem['stazione_di_arrivo'] }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
