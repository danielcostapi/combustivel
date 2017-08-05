<?php
    require_once 'system/config.php';
    require_once 'system/database.php';
    

    session_start();

        if((isset($_SESSION['usuarioEmail']) == false)
        and (isset($_SESSION['senha']) == false)) { 
            
            header("location: index.php");
    }
    
        if ($_SESSION['usuarioNiveisAcessoId'] == 1){
            
            header("location: dashboard-posto.php");


    
    }
    

    

$con = DBConnect();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Alternar de Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                
                   

                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="sair.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-info">
                                <div><?php echo "". $_SESSION['usuarioNome']?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris Charts</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- third-level-items -->
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome 
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Seja Bem Vindo ! </b>Welcome Back <b>Jonny Deen </b>
 <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                    </div>
                </div>-->
                <!--end  Welcome -->
            </div>


             <?php

                $sql_valormes = "SELECT SUM(litrostotal) FROM bd_combustivel where MONTH(databast) = MONTH(NOW())";
                $query_valormes = mysqli_query($con, $sql_valormes);

                $sql_valortotal = "SELECT SUM(litrostotal) FROM bd_combustivel";
                $query_valortotal = mysqli_query($con, $sql_valortotal);

               

                while ($exibir_valormes = mysqli_fetch_array($query_valormes)){;

                    while ($exibir_valortotal = mysqli_fetch_array($query_valortotal)){;

    

                ?>


            <div class="row">
                <!--quick info section Valores abastecidos -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-usd fa-3x"></i>&nbsp;<b><?php echo '  '. number_format(($exibir_valormes['SUM(litrostotal)']), 2, ',', '.') .' ' ?> <p>Débito no mês atual

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa  fa-usd fa-3x"></i>&nbsp;<b><?php echo '  '. number_format(($exibir_valortotal['SUM(litrostotal)']), 2, ',', '.') .' ' ?> <p>Débito total  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa fa-usd fa-3x"></i>&nbsp;<b>0,00<p>Valor pago no mês atual

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-usd fa-3x"></i>&nbsp;<b>0,00 <p>Valor total pago
                    </div>
                </div>
                <?php
                    }

                        }  ?>
              <!--end quick info section -->
            </div>

           
            <div class="row">
                <div class="col-lg-8">



                    <!--Area chart example 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>

                    </div>-->
                    <!--End area chart example -->
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Últimos Abastecimentos
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nº Nota</th>
                                                    <th>Data</th>
                                                    <th>Frentista</th>
                                                    <th>Motorista</th>
                                                    <th>Veículo</th>
                                                    <th>Litros</th>
                                                    <th>Valor</th>
                                                </tr>
                                            </thead>


                                            <?php  
                                            $quantidade = 6;
                                            $pagina     = (isset ( $_GET['pagina'] ) ) ? (int) $_GET['pagina'] : 1;
                                            $inicio     = ( $quantidade * $pagina ) - $quantidade;

                                            $sql        = "SELECT * FROM bd_combustivel ORDER BY databast DESC  LIMIT $inicio, $quantidade";
                                            $qr         = mysqli_query($con, $sql) or die (mysqli_connect_error());
                                            $posts      = DBRead( 'combustivel', "ORDER BY databast DESC  LIMIT $inicio, $quantidade") ;
                                             if( !$posts )
                                                echo '<h2>Nenhum Abastecimento Cadastrado!</h2>';
                                            else
                                                foreach ( $posts as $post ):

                                                    $veiculo = DBRead( 'veiculo', "WHERE idveiculo = '". $post['veiculo'] ."'");
                                                    $veiculo = ( $veiculo ) ? $veiculo[0]['nomeveiculo'] : 'NENHUM VEÍCULO CADASTRADO';
        

                                                    ?>

                                           
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $post['nnota']; ?></td>
                                                    <td><?php echo date('d/m/Y', strtotime( $post['databast'] )) ?></td>
                                                    <td><?php echo $post['frentista']; ?></td>
                                                    <td><?php echo $post['motorista']; ?></td>
                                                    <td><?php echo $veiculo; ?></td>
                                                    <td><?php echo $post['litros']; ?></td>
                                                    <td><?php echo $post['litrostotal']; ?></td>
                                                   </tr>

                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>

                            </div>

                              <?php
                                                $sqlTotal = "SELECT idcombustivel FROM bd_combustivel";
                                                $qrTotal = mysqli_query($con, $sqlTotal) or die(mysqli_connect_error());
                                                $nunTotal = mysqli_num_rows($qrTotal);
                                                $totalPagina = ceil ($nunTotal/$quantidade);

                                                echo '<a href="?pagina=1" class="fa fa-chevron-left fa-1x">&nbsp;</a>';

                                                for ($i = 1; $i <= $totalPagina; $i++) {
                                                    if($i == $pagina)
                                                        echo $i;
                                                    else
                                                        echo " <a href=\"?pagina=$i\">$i</a> ";

                                                }

                                                echo "<a href=\"?pagina=$totalPagina\" class=\"fa fa-chevron-right fa-1x\"></a>";
                                                ?>

                               
                             
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

                <!--Inicio Calculos SQL-->



            <?php

                $sql_mes = "SELECT SUM(litros) FROM bd_combustivel where MONTH(databast) = MONTH(NOW())";
                $query_mes = mysqli_query($con, $sql_mes);

                $sql_media = "SELECT AVG(litros) FROM bd_combustivel where MONTH(databast) = MONTH(NOW())";
                $query_media = mysqli_query($con, $sql_media);

                $sql_dia = "SELECT SUM(litros) FROM bd_combustivel";
                $query_dia = mysqli_query($con, $sql_dia);

                while ($exibir_mes = mysqli_fetch_array($query_mes)){;

                    while ($exibir_media = mysqli_fetch_array($query_media)){;

                        while ($exibir_dia = mysqli_fetch_array($query_dia)){;

                ?>



                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3><?php echo '  '. number_format(($exibir_mes['SUM(litros)']), 2, ',', '.') .' ' ?>/L</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Consulmo de combustível mês atual
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3><?php echo '  '. number_format(($exibir_media['AVG(litros)']), 2, ',', '.') .' ' ?> /L</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Média de bastecimento mês atual
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-bar-chart-o fa-3x"></i>
                            <h3><?php echo '  '. number_format(($exibir_dia['SUM(litros)']), 2, ',', '.') .' ' ?> /L</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Consulmo de combustível total
                            </span>
                        </div>
                    </div>
                    
                    <?php 
                }
            }
        }
        ?>
                
            <!--Fim Calculos SQL-->




                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <!-- Notifications-->


                    <!--End Notifications-->
                </div>
                <div class="col-lg-4">
                    <!-- Donut Example-->
                    
                    <!--End Donut Example-->
                </div>
                <div class="col-lg-4">
                    <!-- Chat Panel Example-->
                   
                    <!--End Chat Panel Example-->
                </div>
            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
