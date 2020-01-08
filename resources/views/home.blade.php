<!DOCTYPE html>
<html lang="es">

<head>
    <title>Facturacion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sistema de Descarga de Facturas SRI Ecuado,Birobid" />
    <meta name="author" content="Birobid SA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="assets/img/conorte.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="assets/img/conorte-small.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/user-generic.png" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                <h6 class="text-white mb-0">{{$cliente->nombre}}</h6>
                                                    <small class="text-white">{{$cliente->codigo}}</small>
                                                </div>
                                            <a href="{{route('logout')}}" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-user pr-2 text-success"></i> Perfil</a>
                                            <a id="passwordchange"class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Cambio de Contraseña
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Personal</li>
                            <li class="active">
                                <a  href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-files"></i>
                                    <span class="nav-title">Documentos</span>
                                </a>
                            </li>
                            <li><a href="app-chat.html" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Chat</span></a> </li>
                          
                            <li><a href="mail-inbox.html" aria-expanded="false"><i class="nav-icon ti ti-email"></i><span class="nav-title">Mail</span></a> </li>
                            
                            <li class="nav-static-title">Facturacion</li>
                           
                     
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        {{-- <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Documentos</h1>
                                    </div>
                                    <div class="breadcrumb-bar align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="{{route('home')}}"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Documentos
                                                </li>
                                              
                                            </ol>
                                        </nav>
                                    </div>
                                    
                                </div>
                                <!-- end page title -->
                            </div>
                        </div> --}}
                        <!-- Notification -->
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Emisor: {{$empresa->nombre}}</h5>
                                <div class="row">
                                    <div class="col-md-5" id="chart2"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6" id="chart1"></div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Cliente: {{$cliente->nombre}}</h4>
                                       
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" id="table_fac" >
                                            <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Tipo</th>
                                                    <th>Clave de Activación</th>
                                                    <th>PDF</th>
                                                    <th>XML</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($facs as $fac)
                                                    <tr>
                                                        <td>{{$fac->fecha}}</td>
                                                        <td>{{$fac->codigodoc}}</td>
                                                        <td>{{$fac->clave_acceso}}</td>
                                                        <td><a href="{{route('docdownload',$fac->facturapdf)}}">{{$fac->facturapdf}}</a></td>
                                                        <td><a href="{{route('docdownload',$fac->facturaxml)}}">{{$fac->facturaxml}}</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- end row -->
              
                        <!-- event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Event Name</label>
                                                <input type="email" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Event Color</label>
                                                <select class="form-control">
                                                    <option>Primary</option>
                                                    <option>Warning</option>
                                                    <option>Success</option>
                                                    <option>Danger</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2020. Birobid SA.</p>
                    </div>
                </div>
            </footer>
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cambio de Contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Ingrese Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="pass1" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Reescriba Nuevamente</label>
                                    <input type="password" class="form-control" id="pass2" placeholder="Repetir">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="changePass" type="button" class="btn btn-success" >Cambiar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
    <script>
        $("#table_fac").DataTable({
        "scrollX": true,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    </script>
    
    @if($errors->any())
        <script>    
            swal({
                type: 'error',
                title: 'Error',
                text: '{{$errors->first()}}',
                footer: '{{$empresa->nombre}}',
            });
            
        </script>
    @endif
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#passwordchange').click(function(event){
            event.preventDefault();
            $('#defaultModal').modal('show');
        });

        $('#changePass').click(function(){

            let pas1 = $('#pass1').val();
            let pas2 = $('#pass2').val();

            if(pas1.trim() == pas2.trim() && pas1.length > 5){
                $.ajax({
                    type: "POST",
                    url: '{{route('changePassword')}}',
                    data: {'password':pas1},
                    success: function(ress){
                        if(ress == 'successchange'){
                            swal({
                                type: 'success',
                                title: 'Contraseña Cambiada Exitosamente',
                                text: 'Puede utilizar con su nueva contraseña en el proximo ingreso',
                                footer: '{{$empresa->nombre}}',
                            });

                        }
                    },
                });
            }else{
                swal({
                    type: 'error',
                    title: 'Contraseña Ingresada Presenta Errores',
                    text: 'Verifique el ingreso y la longitud minima de 6 caracteres',
                    footer: '{{$empresa->nombre}}',
                });

            }
        });


        let countRET = 0;
        let countFAC = 0;
        let countGRM = 0;
        let countNCR = 0;
        let countNDB = 0;
        var documentos = JSON.parse("{{ json_encode($facs) }}".replace(/&quot;/g,'"'));
        console.log(documentos);
        
        for (var i in Object.keys(documentos)) {
            if (documentos[Object.keys(documentos)[i]].hasOwnProperty('codigodoc')) {
                if(documentos[i]["codigodoc"] == 'RET'){
                    countRET++;
                    console.log(documentos[i]["fecha"]);
                }else if(documentos[i]["codigodoc"] == 'FAC'){
                    countFAC++;
                }else if (documentos[i]["codigodoc"] == 'GRM'){
                    countGRM++;
                }else if (documentos[i]["codigodoc"] == 'NDB'){
                    countNDB++;
                }else if (documentos[i]["codigodoc"] == 'NCR'){
                    countNCR++;
                }
                
            }
        }


        var documentos2 = JSON.parse("{{ json_encode($char) }}".replace(/&quot;/g,'"'));
        var fechasc = [];
        var contador = [];

       $.each(documentos2,function(i,item){
            fechasc.push(documentos2[i].fecha);
            contador.push(documentos2[i].total);
       });

        var options = {
          series: [{
            name: 'Documentos',

            data: contador
          }],   
          chart: {
            height: 250,
            type: 'bar'
          },
          dataLabels: {
            enabled:true
          },
          stroke: {
            curve: 'smooth'
          },
          xaxis: {
            type: 'datetime',
            categories: fechasc 
          },
          tooltip: {
            x: {
              format: 'yy/MM/dd'
            },
          },
        };
  
        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();

        var options2 = {
        series: [countFAC, countRET ,countNDB, countNCR, countGRM],
        chart: {
          height: 200,
          type: 'donut',
        },
        plotOptions: {
          radialBar: {
            dataLabels: {
              name: {
                fontSize: '20px',
              },
              value: {
                fontSize: '15px',
              },
              total: {
                show: true,
                label: 'Total',
                formatter: function (w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return Object.keys(documentos).length
                }
              }
            }
          }
        },
        labels: ['Facturas', 'Retenciones', 'Notas Debito', 'Notas Creditos', 'Guias Remisión'],
      };
      var chart = new ApexCharts(document.querySelector("#chart2"), options2);
      chart.render();
      </script>
</body>


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/mentor-bootstrap-4-admin-dashboard-template/{{route('home')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 14:53:21 GMT -->
</html>