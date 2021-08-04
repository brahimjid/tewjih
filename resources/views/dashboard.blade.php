<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="">
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary  font-weight-bold sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">ProjetS2</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                       aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-user-graduate"></i>
                        <span>Gestion Étudiants</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
{{--                            <h6 class="collapse-header">Custom Members:</h6>--}}

                            {{-- <a class="collapse-item" href="{{routes("etudiants.create")}}">Ajouter</a> --}}
                            <a class="collapse-item" href="{{route('etudiants.create')}}">Ajouter</a>
                            <a class="collapse-item" href="{{route('etudiants.index')}}">List</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                       aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-book"></i>
                        <span>Gestion Matières</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                         data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route('matieres.index')}}">List</a>
                            <a class="collapse-item" href="{{route('matieres.create')}}">Ajouter</a>
                            <a class="collapse-item" href="{{route('matieres.orientation.index')}}">Matière Orientation</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#filiereCollapse"
                       aria-expanded="true" aria-controls="filiereCollapse">
                        <i class="fas fa-book"></i>
                        <span>Gestion Filieres</span>
                    </a>
                    <div id="filiereCollapse" class="collapse" aria-labelledby="headingUtilities"
                         data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{route('filieres.index')}}">List</a>
                            <a class="collapse-item" href="{{route('filieres.create')}}">Ajouter</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#notescollapse"
                       aria-expanded="true" aria-controls="notescollapse">
                        <i class="fas fa-book"></i>
                        <span>Gestion Notes</span>
                    </a>
                    <div id="notescollapse" class="collapse" aria-labelledby="headingUtilities"
                         data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
{{--                            <h6 class="collapse-header">Custom Utilities:</h6>--}}
                            <a class="collapse-item" href="{{route('notes.index')}}">List</a>
                            <a class="collapse-item" href="{{route('notes.create')}}">Ajouter</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- Sidebar Message -->


            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                        @include('layouts.navbar')



                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">

                            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                        </div>
                            @yield('content')
                    </div>
                </div>


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; ProjetS2 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>

    </main>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>

    @yield('script_js')


<script>
    $(document).ready(function (){
        $.fn.selectpicker.Constructor.BootstrapVersion = '4';
        $('.selectpicker').selectpicker({
            size: 10,
            noneSelectedText: 'sélectionné',
            selectAllText: 'sélectionner tous',
            deselectAllText: 'désélectionner tous',
            liveSearch:true
        });
    })
</script>
</body>
</html>
