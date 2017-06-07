<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LRI | @yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">LRI App</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Mon CV<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/resp/cv"><i class="fa fa-anchor fa-fw"></i> Consulter mon CV</a>
                            </li>
                            <li>
                                <a href="/resp/info"><i class="fa fa-user-plus fa-fw"></i> Informations Personelles</a>
                            </li>
                            <li>
                                <a href="/resp/formation"><i class="fa fa-university fa-fw"></i> Formations</a>
                            </li>
                            <li>
                                <a href="/resp/experience"><i class="fa fa-sitemap fa-fw"></i> Experiences</a>
                            </li>
                            <li>
                                <a href="/resp/pub"><i class="fa fa-edit fa-fw"></i> Publications</a>
                            </li>
                            <li>
                                <a href="/resp/projet"><i class="fa fa-product-hunt fa-fw"></i> Projets</a>
                            </li>
                            <li>
                                <a href="/resp/password"><i class="fa fa-lock fa-fw"></i> Mot de passe</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar fa-fw"></i> Evenements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/resp/evenement/new"><i class="fa fa-calendar-plus-o fa-fw"></i> Nouveau Evenement</a>
                            </li>
                            <li>
                                <a href="/resp/evenement/list"><i class="fa fa-calendar-o fa-fw"></i> Mes Evenemnts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Actualités<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/resp/post/new"><i class="fa fa-edit fa-fw"></i> Nouvelle Actualité</a>
                            </li>
                            <li>
                                <a href="/resp/post/list"><i class="fa fa-book fa-fw"></i> Mes Actualités</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="/resp/equipe"><i class="fa fa-users fa-fw"></i> Mes Equipes</a>
                    </li>
                    <li>
                        <a href="/resp/membres/valider"><i class="fa fa-users fa-fw"></i> Validation des membres</a>
                    </li>
                    <li>
                        <a href="/resp/membres"><i class="fa fa-users fa-fw"></i> Liste des membres</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/vendor/raphael/raphael.min.js"></script>
<script src="/vendor/morrisjs/morris.min.js"></script>
<script src="/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/dist/js/sb-admin-2.js"></script>

</body>

</html>
