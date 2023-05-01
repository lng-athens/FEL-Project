<?php
$currentUrl = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //Gets the URL
$path = parse_url($currentUrl, PHP_URL_PATH); // Gets the Path or all the text after the first "/" of the URL
$paths = explode('/', $path); // Splits the $path "/"
$currentPath = $paths[1]; // Gets the first path after the first "/"
?>
<nav class="navbar navbar-expand-md navbar-accent bg-accent">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/logo.png" alt="logo.png" height="30" width="auto"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"> <!-- the PHP if statement checks if it match the current path and sets the active state if it match -->
                    <a class="nav-link <?php if($currentPath === "") echo 'active'?>" <?php if($currentPath === "") echo 'aria-current="page"'?> href="/">Home</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"> <!-- the PHP if statement checks if it match the current path and sets the active state if it match -->
                    <a class="nav-link <?php if($currentPath === "login.php") echo 'active'?>" <?php if($currentPath === "login.php") echo 'aria-current="page"'?> href="/login.php">Login</a>
                </li>
                <li class="nav-item"> <!-- the PHP if statement checks if it match the current path and sets the active state if it match -->
                    <a class="nav-link <?php if($currentPath === "signup.php") echo 'active'?>" <?php if($currentPath === "signup.php") echo 'aria-current="page"'?> href="/signup.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>