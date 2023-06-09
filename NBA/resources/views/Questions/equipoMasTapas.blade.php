@extends('layouts.app')

@section('titulo', 'Equipo Mas Tapas')

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
                        <h2>EQUIPOS CON MAS TAPAS</h2>
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
                                        <th>Tapas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 6; $i++)

                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td>{{ $puntos[$i]['nombre'] }}</td>
                                            <td>{{ $puntos[$i]['bloqueos'] }}</td>
                                        </tr>

                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="jumbotron">
                    <p style="font-size: 25px">
                        El equipo con mayor cantidad de tapas en la temporada regular de la NBA 2017/2018 es: <span class="badge badge-success">{{ $puntos[0]['nombre'] }}</span>, con el total de tapas: <span class="badge badge-success">{{ $puntos[0]['bloqueos'] }}</span>.
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
        type: 'polarArea',
        data: {
            labels: [
                    '{{ $puntos[0]["nombre"] }}',
                    '{{ $puntos[1]["nombre"] }}',
                    '{{ $puntos[2]["nombre"] }}',
                    '{{ $puntos[3]["nombre"] }}',
                    '{{ $puntos[4]["nombre"] }}',
                    '{{ $puntos[5]["nombre"] }}',
            ],
            datasets: [{
                label: [
                    'Puntos',
                ],
                data: [ 
                    '{{ $puntos[0]["bloqueos"] }}',
                    '{{ $puntos[1]["bloqueos"] }}',
                    '{{ $puntos[2]["bloqueos"] }}',
                    '{{ $puntos[3]["bloqueos"] }}',
                    '{{ $puntos[4]["bloqueos"] }}',
                    '{{ $puntos[5]["bloqueos"] }}',
                ],

                backgroundColor: [
                    '#21915F',
                    '#542581',
                    '#D4001F',
                    '#000000',
                    '#04529C',
                    '#1560BD',
                    '#6D0D25',
                    '#F47896'
                ],
                borderColor: [
                    '#219150',
                    '#542580',
                    '#D40010',
                    '#000000',
                    '#045290',
                    '#1560B0',
                    '#6D0D20',
                    '#F47890'
                ],
                borderWidth: 1
            }]
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