<!doctype html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>Nico CodeIgniter 4</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?=base_url('/');?>">CodeIgniter Nico 4 Test Rapid</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php  if(! session()->get('logged_in')) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/login');?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/register');?>"">Register</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/dashboard');?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/profile');?>">Profile</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?=base_url('/logout');?>" >Logout</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
<?= $this->renderSection('content') ?>
<script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
