<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <canvas id="myChart" ></canvas>
                 
                    <script>
                        const ctx = document.getElementById('myChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Enero', 'Febrero', 'Marzo','Abril', 'Mayo', 'Junio', 'Julio','Agosto'],
                                datasets: [{
                                    label: 'grafico de lineas ',
                                    data:<?php echo json_encode($array_meses); ?>,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(250, 132, 215, 0.2)',
                                        'rgba(13, 112, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
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

</x-app-layout>
