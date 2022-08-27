<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{asset('/')}}admin-assets/css/bootstrap.min.css">
    <link href="{{asset('/')}}admin-assets/css/datatables.min.css">
    <link href="{{asset('/')}}admin-assets/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin-assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{route('/')}}">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
{{--    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">--}}
{{--        <div class="input-group">--}}
{{--            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />--}}
{{--            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>--}}
{{--        </div>--}}
{{--    </form>--}}
    <!-- Navbar-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

                <li><a class="nav-link text-white" href="#!">Settings</a></li>
                <li><a class="nav-link text-white" href="#!">Activity Log</a></li>
                <li><a class="nav-link text-white" href="#!" ></a></li>
                <li><a class="nav-link text-white" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a></li>
        <form action="{{route('logout')}}" method="post" id="logoutForm">
            @csrf
        </form>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.includes.menu')
    </div>
    <div id="layoutSidenav_content">
        @yield('body')
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{asset('/')}}admin-assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}admin-assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin-assets/js/datatables.min.js"></script>
<script src="{{asset('/')}}admin-assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin-assets/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('/')}}admin-assets/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin-assets/js/datatables-simple-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


@if(Session::has('message'))
    <script>
        toastr.success('{{Session::get('message')}}');
    </script>
@endif

@if(Session::has('error'))
    <script>
        toastr.error('{{Session::get('error')}}');
    </script>
@endif


<script>
    $(document).ready( function () {
        $('#myTable1').DataTable();
    } );
</script>

<script>
    $(document).ready( function () {
        $('#events').DataTable();
    } );
</script>

<script>
    $(document).ready( function () {
        $('#booking').DataTable();
    } );
</script>

<script>
    $(document).ready( function () {
        $('#menus').DataTable();
    } );
</script>

<script>
    $(document).ready( function () {
        $('#menuCategories').DataTable();
    } );
</script>

<script>
    $(document).ready( function () {
        $('#slides').DataTable();
    } );
</script>


<script>
    $(document).ready( function () {
        $('#specials').DataTable();
    } );
</script>

<script>
    $(document).ready( function () {
        $('#special2').DataTable();
    } );
</script>


<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#event1' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#menu1' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#slide1' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#special1' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>
</html>
