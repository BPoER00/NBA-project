@extends('layouts.app')

@section('titulo', 'Equipo Mas Asistencias')

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
                        <h2>EQUIPOS CON MAS ASISTENCIAS</h2>
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
                                        <th>Asistencias</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < $equipos; $i++)

                                        <tr>
                                            <td>{{ $i+1 }}</td>
                                            <td>{{ $puntos[$i]['nombre'] }}</td>
                                            <td>{{ $puntos[$i]['asistencias'] }}</td>
                                        </tr>

                                    @endfor
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
        type: 'polarArea',
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
                    'Puntos',
                ],
                data: [ 
                    '{{ $puntos[0]["asistencias"] }}',
                    '{{ $puntos[1]["asistencias"] }}',
                    '{{ $puntos[2]["asistencias"] }}',
                    '{{ $puntos[3]["asistencias"] }}',
                    '{{ $puntos[4]["asistencias"] }}',
                    '{{ $puntos[5]["asistencias"] }}',
                    '{{ $puntos[6]["asistencias"] }}',
                    '{{ $puntos[7]["asistencias"] }}',
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