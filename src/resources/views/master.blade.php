<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets-admin') }}/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li><a class="app-nav__item" href="{{route('admin.logout')}}"><i class='bx bx-log-out bx-rotate-180'></i></a></li>
        </ul>
    </header>
    <!---------------- Sidebar menu --------------->
    @include('admin.layout.siderBar')
    <!---------------- end sidebar -------------------->


    <main class="app-content">

        {{-- ------------ CONTENT ------------ --}}
        @yield('content')
        {{-- ------------ CONTENT ------------ --}}


    </main>
    <script src="{{ url('assets-admin') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ url('assets-admin') }}/js/popper.min.js"></script>
    <script src="{{ url('assets-admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('assets-admin') }}/js/main.js"></script>
    <script src="{{ url('assets-admin') }}/js/plugins/pace.min.js"></script>
    @yield('src')
</body>

</html>
