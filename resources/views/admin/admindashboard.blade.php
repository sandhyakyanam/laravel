<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
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

<!-- LOGOUT FORM (same page) -->
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
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>

        <ul class="list-unstyled">
            <li class="active">
                <a href="#"><i class="icon-home"></i> Home</a>
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
            <h3>Welcome to Admin Dashboard</h3>
        </section>

        <footer class="footer">
            <div class="container-fluid text-center">
                <p>© 2018 Your Company</p>
            </div>
        </footer>
    </div>
</div>

<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
