@extends('layouts.app')

@section('titulo', 'Equipos Playoffs')

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
                        <h2>EQUIPOS QUE CLASIFICAN A PLAYOFFS</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Conferencia Oeste</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Equipo</th>
                                    <th>Victorias</th>
                                    <th>Derrotas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($victorias['Oeste'] as $item)
                                    <tr>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->victorias }}</td>
                                        <td>{{ $item->derrotas }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-7">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div><br><hr>
                <div class="row">
                    <div class="col-md-7">
                        <canvas id="myChart2" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-5">
                            <h2>Conferencia Este</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Equipo</th>
                                        <th>Victorias</th>
                                        <th>Derrotas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($victorias['Este'] as $item)
                                        <tr>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->victorias }}</td>
                                            <td>{{ $item->derrotas }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="jumbotron">
                    <p style="font-size: 25px">
                        Los equipos que clasifican a playoffs de la conferencia del: <span class="badge badge-warning">Oeste</span> de la temporada 2017/2018 son:
                        @foreach ($victorias['Oeste'] as $item)
                            <li>{{ $item->nombre }}</li>
                        @endforeach
                    </p>
                    <p style="font-size: 25px">
                        Los equipos que clasifican a playoffs de la conferencia del: <span class="badge badge-warning">Este</span> de la temporada 2017/2018 son:
                        @foreach ($victorias['Este'] as $item)
                            <li>{{ $item->nombre }}</li>
                        @endforeach
                    </p>
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
        type: 'bar',
        data: {
            labels: [
                    '{{ $victorias["Oeste"][0]->nombre }}',
                    '{{ $victorias["Oeste"][1]->nombre }}',
                    '{{ $victorias["Oeste"][2]->nombre }}',
                    '{{ $victorias["Oeste"][3]->nombre }}',
                    '{{ $victorias["Oeste"][4]->nombre }}',
                    '{{ $victorias["Oeste"][5]->nombre }}',
                    '{{ $victorias["Oeste"][6]->nombre }}',
                    '{{ $victorias["Oeste"][7]->nombre }}',
            ],
            datasets: [{
                label: 'Victorias',
                data: [ 
                    '{{ $victorias["Oeste"][0]->victorias }}',
                    '{{ $victorias["Oeste"][1]->victorias }}',
                    '{{ $victorias["Oeste"][2]->victorias }}',
                    '{{ $victorias["Oeste"][3]->victorias }}',
                    '{{ $victorias["Oeste"][4]->victorias }}',
                    '{{ $victorias["Oeste"][5]->victorias }}',
                    '{{ $victorias["Oeste"][6]->victorias }}',
                    '{{ $victorias["Oeste"][7]->victorias }}',
                ],
                backgroundColor: [
                    '#21915F',
                ],
                borderColor: [
                    '#219150',
                ],
                borderWidth: 1
            },
            {
                label: [
                    'Derrotas',
                ],
                data: [ 
                    '{{ $victorias["Oeste"][0]->derrotas }}',
                    '{{ $victorias["Oeste"][1]->derrotas }}',
                    '{{ $victorias["Oeste"][2]->derrotas }}',
                    '{{ $victorias["Oeste"][3]->derrotas }}',
                    '{{ $victorias["Oeste"][4]->derrotas }}',
                    '{{ $victorias["Oeste"][5]->derrotas }}',
                    '{{ $victorias["Oeste"][6]->derrotas }}',
                    '{{ $victorias["Oeste"][7]->derrotas }}',
                ],

                backgroundColor: [
                    '#C82333',
                ],
                borderColor: [
                    '#C82333',
                ],
                borderWidth: 1
            }
        ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctx2 = document.getElementById('myChart2');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: [
                    '{{ $victorias["Este"][0]->nombre }}',
                    '{{ $victorias["Este"][1]->nombre }}',
                    '{{ $victorias["Este"][2]->nombre }}',
                    '{{ $victorias["Este"][3]->nombre }}',
                    '{{ $victorias["Este"][4]->nombre }}',
                    '{{ $victorias["Este"][5]->nombre }}',
                    '{{ $victorias["Este"][6]->nombre }}',
                    '{{ $victorias["Este"][7]->nombre }}',
            ],
            datasets: [{
                label: 'Victorias',
                data: [ 
                    '{{ $victorias["Este"][0]->victorias }}',
                    '{{ $victorias["Este"][1]->victorias }}',
                    '{{ $victorias["Este"][2]->victorias }}',
                    '{{ $victorias["Este"][3]->victorias }}',
                    '{{ $victorias["Este"][4]->victorias }}',
                    '{{ $victorias["Este"][5]->victorias }}',
                    '{{ $victorias["Este"][6]->victorias }}',
                    '{{ $victorias["Este"][7]->victorias }}',
                ],
                backgroundColor: [
                    '#21915F',
                ],
                borderColor: [
                    '#219150',
                ],
                borderWidth: 1
            },
            {
                label: [
                    'Derrotas',
                ],
                data: [ 
                    '{{ $victorias["Este"][0]->derrotas }}',
                    '{{ $victorias["Este"][1]->derrotas }}',
                    '{{ $victorias["Este"][2]->derrotas }}',
                    '{{ $victorias["Este"][3]->derrotas }}',
                    '{{ $victorias["Este"][4]->derrotas }}',
                    '{{ $victorias["Este"][5]->derrotas }}',
                    '{{ $victorias["Este"][6]->derrotas }}',
                    '{{ $victorias["Este"][7]->derrotas }}',
                ],

                backgroundColor: [
                    '#C82333',
                ],
                borderColor: [
                    '#C82333',
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