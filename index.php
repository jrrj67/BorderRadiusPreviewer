<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <title>Visualizador de border-radius</title>
</head>
<body>
<div class="container">
    <div class="row"></div>
    <div class="row">
        <div class="col s12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="col s12 center">
                            <div class="col s4 push-s4" id="top"></div>
                            <div class="row"></div>
                            <div class="col s1 push-l3 left" style="padding-left: 35px">
                                <div id="left" class="hide-on-med-and-down" style="height: 200px"></div>
                                <div id="left-mobile" class="hide-on-med-and-up" style="height: 110px"></div>
                            </div>
                            <img class="br hoverable z-depth-2 responsive-img hide-on-med-and-down" src="images/square.png"
                                 width="200px"
                                 alt="">
                            <img class="br hoverable z-depth-2 responsive-img hide-on-med-and-up" src="images/square.png"
                                 width="100px"
                                 alt="">
                            <div class="col s1 pull-s3 right">
                                <div id="right" class="hide-on-med-and-down" style="height: 200px"></div>
                                <div style="padding-left: 40px">
                                    <div id="right-mobile" class="hide-on-med-and-up" style="height: 110px"></div>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div class="col s4 push-s4" id="bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="js/materialize.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/wNumb.js"></script>
<script src="js/nouislider.js"></script>
</body>
</html>