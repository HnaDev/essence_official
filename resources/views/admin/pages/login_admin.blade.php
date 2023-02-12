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

<body class=" sidebar-mini rtl">
    <section class="vh-100" style=" background: linear-gradient(to top, #0000ff 0%, #00ccff 100%);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    {{-- allert notification --}}
                    @if (session('notification'))
                        <div class="alert dg alert-danger">
                            {{ session('notification') }}
                        </div>
                    @endif
                    {{-- allert notification end --}}
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form action="" method="POST">
                            @csrf
                            <div class="card-body p-5">
                                <h3 class="mb-5 text-center">Sign in Admin</h3>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg"
                                        placeholder="Please enter your email" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg"
                                        placeholder="Please enter your Password" />
                                </div>
                                <div class="form-outline mb-4 d-flex justify-between">
                                    <i class="pr-5" href="">Do not have an account ?</i>
                                    <a href="{{route('register')}}" class="pl-5" style="color: rgb(252, 9, 9)">Sign up here !</a>
                                </div>
                                <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('assets-admin') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ url('assets-admin') }}/js/popper.min.js"></script>
    <script src="{{ url('assets-admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('assets-admin') }}/js/main.js"></script>
    <script src="{{ url('assets-admin') }}/js/plugins/pace.min.js"></script>
    @yield('src')
</body>

</html>
