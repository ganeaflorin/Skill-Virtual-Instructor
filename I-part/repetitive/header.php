<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <?php include "../repetitive/header.css"; ?>
    </style>
</head>
<header>
    <a href="../landing/landing.php">
        <div class="logo">
            <div class="head">
                <div class="face">
                    <div class="eye"> </div>
                    <div class="eye"> </div>
                </div>
            </div>
        </div>
    </a>
    <div class="nav-menu">
    <div class="three-bar">
            <button type="button" id="nav-btn" onClick="showNav()" class="bar-btn" aria-label="Menu button">
            <div class="bar"> </div>
            <div class="bar"> </div>
            <div class="bar"> </div>
        </button>
        </div>

    <nav class="nav-bar">
        <div class="nav-button">
            <a href="../login/login.php" class="nav-button__anchor">Login</a>
        </div>
        <div class="nav-button">
            <a href="../register/register.php" class="nav-button__anchor">SignUp</a>
        </div>
        <div class="nav-button">
            <a href="../paths/paths.php" class="nav-button__anchor">Paths</a>
        </div>
        <div class="nav-button">
            <a href="../about/about.php" class="nav-button__anchor">About</a>
        </div>
    </nav>
    </div>
    <script src="../repetitive/showNav.js"> </script>
</header>