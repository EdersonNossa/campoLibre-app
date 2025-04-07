@extends('welcome')
@section('estadisticas')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo Libre</title>

    <!-- Enlace a la fuente de Material Symbols -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap">

    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- Enlace a los iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Enlace al CSS personalizado -->
    <link rel="stylesheet" href="estilos/estilos_dash.css">

    <!-- Enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="contenido">
        <div class="container">
            <!-- Sección del Gráfico -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Distribución de cantidad de productos por categoria</h5>
                    <canvas id="ventasChart"></canvas>
                </div>
            </div>

            <script>
                // Configuración del gráfico barras
                const ctx = document.getElementById('ventasChart').getContext('2d');
                const ventasChart = new Chart(ctx, {
                    type: 'bar', // Cambiado a gráfico circular
                    data: {
                        labels: ['vegetales', 'Frutas', 'Lacteos', 'Semillas', 'Proteccion',
                            'Herramientas'
                        ], // Etiquetas del gráfico
                        datasets: [{
                            label: 'Cantidad',
                            data: [50, 23, 37, 61, 9, 15], // Datos de ventas
                            borderRadius: 5,
                            backgroundColor: [
                                '#98B80A',
                                '#467302',
                                '#98B80A',
                                '#467302',
                                '#98B80A',
                                '#467302'
                            ],
                            borderColor: [
                                '#467302',
                                '#98B80A',
                                '#467302',
                                '#98B80A',
                                '#467302',
                                '#98B80A'
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top' // Posición de la leyenda
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
</body>

</html>    
@endsection
