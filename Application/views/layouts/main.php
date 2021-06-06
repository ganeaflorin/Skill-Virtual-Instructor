<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <?php

use app\core\Application;
include "./css/header.css"; ?>
    </style>
</head>
<header>
    <a href="/">
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
        <?php if(Application::$app->isGuest()): ?>
        <div class="nav-button">
            <a href="/login" class="nav-button__anchor">Login</a>
        </div>
        <div class="nav-button">
            <a href="/register" class="nav-button__anchor">SignUp</a>
        </div>
        <?php else: ?>
            <div class="nav-button">
            <a href="/profile" class="nav-button__anchor"> Profile </a>
        </div>
            <div class="nav-button">
            <a href="/logout" class="nav-button__anchor"> Logout </a>
        </div>
        <?php endif; ?>
        <div class="nav-button">
            <a href="/paths" class="nav-button__anchor">Paths</a>
        </div>
        <div class="nav-button">
            <a href="/about" class="nav-button__anchor">About</a>
        </div>
    </nav>
    </div>
    <script src="/js/showNav.js"> </script>
</header>
<div>
    <?php if(Application::$app->session->getFlash('success')): ?>
    <div>
        <?php echo Application::$app->session->getFlash('success') ?>
    </div>
    <?php endif;?>
{{content}}
</div>

<style> 
<?php  include "./css/footer.css" ?>
</style>
<footer>
        <div class="footer__icon">
            <a href="https://www.facebook.com/flomaaan/"> <img class="footer__icon-redirection" src="/images/facebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/ovidiu.marian1/"> <img class="footer__icon-redirection-instagram" src="/images/instagram.png" alt="Instagram"></a>
            <a href="https://github.com/ganeaflorin/TW_SkiVI_Ganea-Florin_Iosub-Ovidiu-Marian"> <img class="footer__icon-redirection" src="/images/github.png" alt="GitHub"></a>
        </div>
        <div class="contact">
            <p> For feedback and reports, you can contact us at:
            </p>
            <ul>
                <li><a class="mail" href="mailto:ganeafloman@gmail.com">ganeafloman@gmail.com</a></li>
                <li><a class="mail" href="mailto:iosubmarian2000@gmail.com">iosubmarian2000@gmail.com</a></li>
            </ul>
        </div>
    </footer>