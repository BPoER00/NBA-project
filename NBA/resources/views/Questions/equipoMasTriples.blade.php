@extends('layouts.app')

@section('titulo', 'Equipo Mas Triples')

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
                        <h2>EQUIPOS CON MAS TRIPLES</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                    <div class="col">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre</th>
                                        <th>Triples</th>
                                        <th>Intentos Triples</th>
                                        <th>Porcentaje</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 8; $i++)

                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td>{{ $puntos[$i]['nombre'] }}</td>
                                            <td>{{ $puntos[$i]['ft'] }}</td>
                                            <td>{{ $puntos[$i]['fta'] }}</td>
                                            <td>{{ number_format($puntos[$i]['ft']*100/$puntos[$i]['fta'], 2) }}%</td>

                                        </tr>

                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="jumbotron">
                    <p style="font-size: 25px">
                        El equipo con mayor cantidad de tiros triples en la temporada regular de la NBA 2017/2018 es: <span class="badge badge-success">{{ $puntos[0]['nombre'] }}</span>, con el total de intentos de: <span class="badge badge-danger">{{ $puntos[0]['fta'] }}</span>, en donde se anoto la total de: <span class="badge badge-success">{{ $puntos[0]['ft'] }}</span>.
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
                    '{{ $puntos[0]["nombre"] }}',
                    '{{ $puntos[1]["nombre"] }}',
                    '{{ $puntos[2]["nombre"] }}',
                    '{{ $puntos[3]["nombre"] }}',
                    '{{ $puntos[4]["nombre"] }}',
                    '{{ $puntos[5]["nombre"] }}',
                    '{{ $puntos[6]["nombre"] }}',
                    '{{ $puntos[7]["nombre"] }}',
            ],
            datasets: [{
                label: [
                    'Triples Anotados',
                ],
                data: [ 
                    '{{ $puntos[0]["ft"] }}',
                    '{{ $puntos[1]["ft"] }}',
                    '{{ $puntos[2]["ft"] }}',
                    '{{ $puntos[3]["ft"] }}',
                    '{{ $puntos[4]["ft"] }}',
                    '{{ $puntos[5]["ft"] }}',
                    '{{ $puntos[6]["ft"] }}',
                    '{{ $puntos[7]["ft"] }}',
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
                    'Triples Intentados',
                ],
                data: [ 
                    '{{ $puntos[0]["fta"] }}',
                    '{{ $puntos[1]["fta"] }}',
                    '{{ $puntos[2]["fta"] }}',
                    '{{ $puntos[3]["fta"] }}',
                    '{{ $puntos[4]["fta"] }}',
                    '{{ $puntos[5]["fta"] }}',
                    '{{ $puntos[6]["fta"] }}',
                    '{{ $puntos[7]["fta"] }}',
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
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            }
        }
    });

</script>
@endpush