<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/font.css">
    <link rel="stylesheet" href="admin/css/style.default.css">
    <link rel="stylesheet" href="admin/css/custom.css">
</head>

<body>
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between">

            <a href="#" class="navbar-brand">
                <strong>Dark</strong>Admin
            </a>

            <div class="right-menu list-inline">

                <!-- LOGOUT BUTTON -->
                <div class="list-inline-item logout">
                    <a href="#" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout <i class="icon-logout"></i>
                    </a>
                </div>

            </div>
        </div>
    </nav>
</header>

<form id="logout-form" method="POST" action="/logout" style="display:none;">
    @csrf
</form>

<div class="d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
                <img src="admin/img/avatar-6.jpg" class="img-fluid rounded-circle">
            </div>
            <div class="title">
                <h1 class="h5">@if(Auth::check()){{ Auth::user()->name }}@endif</h1>
                <p>Administrator</p>
            </div>
        </div>

        <ul class="list-unstyled">
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Category</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{ route('admin.addcategory') }}">Add Category</a></li>
                <li><a href="{{ route('admin.viewcategory') }}">View Category</a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Product</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{ route('admin.viewproduct') }}">Add Product</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5">Dashboard</h2>
            </div>
        </div>

        <section class="container-fluid">
          @yield('addCategory')
          @yield('viewCategory')
          @yield('editCategory')
          @yield('addProduct')
          @yield('viewProductListing')
        </section>

        <footer class="footer">
            <div class="container-fluid text-center">
                <p>© 2026</p>
            </div>
        </footer>
    </div>
</div>

<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Buttons dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<!-- Buttons -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script>
$(document).ready(function () {
    $('#productTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'excel',
            'pdf',
            'print'
        ]
    });
});
</script>
</body>
</html>
