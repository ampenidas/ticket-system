<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Ticket System
    </title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('css/ekko-lightbox.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href=" {{route('tickets.index')}} " class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tickets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('inventory.index') }} " class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('customers.index') }} " class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Customers</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="col-sm p-3 min-vh-100">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/adminlte.js') }}"></script>
<script src="{{ asset('js/ekko-lightbox.js')}}"></script>
<script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    })
</script>
</body>
</html>

