@extends('layouts.app')

@section('titulo', 'Equipo Mas Titulos')

@section('content')
<br>
<div class="content-wrapper" style="background-color: #FFF;">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-2">
                        <a href="/" class="btn btn-danger">
                            <i class="fa-solid fa-house"></i>
                            home
                        </a>
                    </div>
                    <div class="col" style="text-align: center">
                        <h2>EQUIPOS CON MAS TITULOS</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                    <div class="col">
                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Equipo</th>
                                        <th>Titulos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipos as $item)
                                        <tr>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->titulos }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascript_extra')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [ 
                '{{ $equipos[0]->nombre }}',
                '{{ $equipos[1]->nombre }}',
                '{{ $equipos[2]->nombre }}',
                '{{ $equipos[3]->nombre }}',
                '{{ $equipos[4]->nombre }}',
                '{{ $equipos[5]->nombre }}',
                '{{ $equipos[6]->nombre }}',
                '{{ $equipos[7]->nombre }}',
                '{{ $equipos[8]->nombre }}',
                '{{ $equipos[9]->nombre }}',
                '{{ $equipos[10]->nombre }}',
                '{{ $equipos[11]->nombre }}',
                '{{ $equipos[12]->nombre }}',
                '{{ $equipos[13]->nombre }}',
                '{{ $equipos[14]->nombre }}'
            ],
            datasets: [{
                label: 'Titulos',
                data: [ 
                    '{{ $equipos[0]->titulos }}',
                    '{{ $equipos[1]->titulos }}',
                    '{{ $equipos[2]->titulos }}',
                    '{{ $equipos[3]->titulos }}',
                    '{{ $equipos[4]->titulos }}',
                    '{{ $equipos[5]->titulos }}',
                    '{{ $equipos[6]->titulos }}',
                    '{{ $equipos[7]->titulos }}',
                    '{{ $equipos[8]->titulos }}',
                    '{{ $equipos[9]->titulos }}',
                    '{{ $equipos[10]->titulos }}',
                    '{{ $equipos[11]->titulos }}',
                    '{{ $equipos[12]->titulos }}',
                    '{{ $equipos[13]->titulos }}',
                    '{{ $equipos[14]->titulos }}'
                ],
                backgroundColor: [
                    '#21915F',
                    '#542581',
                    '#D4001F',
                    '#000000',
                    '#04529C',
                    '#1560BD',
                    '#6D0D25',
                    '#F47896',
                    '#E3621F',
                    '#D93025',
                    '#007CC2',
                    '#0C2E59',
                    '#9579AD',
                    '#E3223E',
                    '#2C5234',
                ],
                borderColor: [
                    '#219150',
                    '#542580',
                    '#D40010',
                    '#000000',
                    '#045290',
                    '#1560B0',
                    '#6D0D20',
                    '#F47890',
                    '#E36210',
                    '#D93020',
                    '#007CC0',
                    '#0C2E50',
                    '#9579A0',
                    '#E32230',
                    '#2C5230',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush