@extends('layouts.app')

@section('title', 'Panel')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-cafe-oscuro">Panel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active text-cafe-oscuro">Panel</li>
        </ol>
        <div class="row">

            {{-- 4 Cards principales --}}

            {{-- Card Cliente --}}
            <div class="col-xl-3 col-md-6">
                <div class="card bg-cafe-card text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fa-solid fa-people-group"></i><span class="m-1">Clientes</span>
                            </div>
                            <div class="col-4">
                                <?php
                                use App\Models\Cliente;
                                $clientes = count(Cliente::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $clientes }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('clientes.index') }}">Ver más</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Card Compra --}}
            <div class="col-xl-3 col-md-6">
                <div class="card bg-cafe-card text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fa-solid fa-store"></i><span class="m-1">Compras</span>
                            </div>
                            <div class="col-4">
                                <?php
                                use App\Models\Compra;
                                $compras = count(Compra::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $compras }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('compras.index') }}">Ver más</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Card Producto --}}
            <div class="col-xl-3 col-md-6">
                <div class="card bg-cafe-card text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fa-brands fa-shopify"></i><span class="m-1">Productos</span>
                            </div>
                            <div class="col-4">
                                <?php
                                use App\Models\Producto;
                                $productos = count(Producto::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $productos }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('productos.index') }}">Ver más</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Card Usuario --}}
            <div class="col-xl-3 col-md-6">
                <div class="card bg-cafe-card text-white mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <i class="fa-solid fa-user"></i><span class="m-1">Usuarios</span>
                            </div>
                            <div class="col-4">
                                <?php
                                
                                use App\Models\User;
                                
                                $users = count(User::all());
                                ?>
                                <p class="text-center fw-bold fs-4">{{ $users }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('users.index') }}">Ver más</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Gráficos --}}

        {{-- Grafico de los 5 productos con el stock más bajo --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        5 Productos con el stock más bajo
                    </div>
                    <div class="card-body"><canvas id="productosChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>

        {{-- Grafico de las ventas en los últimos 7 días --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Ventas en los últimos 7 días
                    </div>
                    <div class="card-body"><canvas id="ventasChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

    <script>
        let datosVenta = @json($totalVentasPorDia);

        const fechas = datosVenta.map(venta => {
            const [year, month, day] = venta.fecha.split('-');
            return `${day}/${month}/${year}`;
        });

        const montos = datosVenta.map(venta => parseFloat(venta.total));

        const ventasChart = document.getElementById('ventasChart');

        new Chart(ventasChart, {
            type: 'line',
            data: {
                labels: fechas,
                datasets: [{
                    label: "Ventas",
                    lineTension: 0.3,
                    backgroundColor: "rgba(90, 63, 43, 0.2)",
                    borderColor: "#1D0B07",
                    pointRadius: 5,
                    pointBackgroundColor: "#5a3f2b",
                    pointBorderColor: "rgba(255, 250, 242, 0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#1D0B07",
                    pointHitRadius: 50,
                    pointBorderWidth: 2,
                    data: montos,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: "#1D0B07"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            fontColor: "#1D0B07"
                        },
                        gridLines: {
                            color: "rgba(29, 11, 7, .125)",
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });

        let datosProductos = @json($productosStockBajo);

        const nombres = datosProductos.map(obj => obj.nombre);
        const stock = datosProductos.map(i => i.cantidad);
        const productosChart = document.getElementById('productosChart');

        new Chart(productosChart, {
            type: 'horizontalBar',
            data: {
                labels: nombres,
                datasets: [{
                    label: 'stock',
                    backgroundColor: "#6F4E37",
                    borderColor: "#5a3f2b",
                    hoverBackgroundColor: "#493121",
                    data: stock,
                    borderWidth: 2,
                    base: 0
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: "#1D0B07"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontColor: "#1D0B07"
                        }
                    }]
                },
                legend: {
                    display: false
                },
            }
        });
    </script>
@endpush
