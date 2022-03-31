@extends('grafico.create')



@section('grafico')
   
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <canvas id="myChart"></canvas>

                <script>
                    const ctx = document.getElementById('myChart').getContext('2d');
                    const myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: <?php echo json_encode($array_titulos); ?> ,
                            datasets : [{
                                label: <?php echo json_encode($titulo);?> ,
                                data : <?php echo json_encode($array_alquileres); ?> ,
                                backgroundColor : [
                                    'rgba(55, 99, 12, 0.2)',
                                    'rgb(255, 205, 86)',
                                    'rgb(255, 99, 132)',
                                    'rgb(54, 162, 235)',
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

            </div>
        </div>
    </div>


</div>



@endsection









