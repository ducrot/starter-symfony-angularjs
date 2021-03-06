<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>starter-symfony-angularjs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('build/app.css') ?>">
</head>
<body ng-app="app" ng-controller="AppController as app" ng-strict-di>

<header class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
    <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="ACME co">
        <img class="d-block" height="40" src="<?php echo $view['assets']->getUrl('build/images/logo-negative.svg') ?>" alt="ACME co"/>
    </a>
    <button type="button" class="navbar-toggler" ng-click="app.isCollapsed = !app.isCollapsed" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" uib-collapse="app.isCollapsed">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" ui-sref="home" ui-sref-active="active">Home</a>
            <a class="nav-item nav-link" ui-sref="blog" ui-sref-active="active">Blog</a>
            <a class="nav-item nav-link" ui-sref="grids" ui-sref-active="active">Grids</a>
            <a class="nav-item nav-link" ui-sref="album" ui-sref-active="active">Album</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
</header>

<main class="main" role="main">
    <ui-view></ui-view>
</main>

<footer class="footer">
    <div class="container">
        <p class="float-right to-top">
            <a href="#">Back to top</a>
        </p>
        <p><img class="mr-2" height="30" src="<?php echo $view['assets']->getUrl('build/images/logo.svg') ?>" alt="ACME co"/> | &copy; {{app.date| date:'yyyy'}} </p>
    </div>
</footer>
<script src="<?php echo $view['assets']->getUrl('build/manifest.js') ?>"></script>
<script src="<?php echo $view['assets']->getUrl('build/vendor.js') ?>"></script>
<script src="<?php echo $view['assets']->getUrl('build/app.js') ?>"></script>
</body>
</html>