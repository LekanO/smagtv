<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Angular-Laravel Authentication</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/videogular-themes-default/videogular.min.css">
        <link rel="stylesheet" href="style/dashboard.css">
        <link rel="stylesheet" href="style/ie10-viewport-bug-workaround.css">
    </head>
    <body ng-app="authApp">

        	<div ui-view></div>
     
    </body>

    <!-- Application Dependencies -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="node_modules/satellizer/satellizer.js"></script>    
    <script src="node_modules/angular-sanitize/angular-sanitize.min.js"></script>
    <script src="node_modules/videogular/videogular.js"></script>
    <script src="node_modules/videogular-controls/vg-controls.js"></script>
    <script src="node_modules/videogular-overlay-play/vg-overlay-play.js"></script>
    <script src="node_modules/videogular-poster/vg-poster.js"></script>
    <script src="node_modules/videogular-buffering/vg-buffering.js"></script>


        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="scripts/videos.js"></script>
    <script src="scripts/videodetail.js"></script>
    <script src="scripts/VideoProvider.js"></script>

    <!-- Application Scripts -->
    <script src="scripts/app.js"></script>
    <script src="scripts/authController.js"></script>
    <script src="scripts/userController.js"></script>
</html>