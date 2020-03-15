<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/icons/material-icons.css">
    <title>Visualizador de border-radius</title>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper teal lighten-2">
            <a href="#" class="brand-logo center">Radius</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="https://github.com/jrrj67">My Github</a></li>
                <li><a href="https://www.linkedin.com/in/jos%C3%A9-ricardo-rocha-587157135/">My Linkedin</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="card horizontal z-depth-1">
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="row"></div>
                        <div class="col s12 center" id="topValue"></div>
                        <div class="row"></div>
                        <div class="col s4 offset-s4" id="top"></div>
                        <div class="row"></div>

                        <div id="leftValue" class="left col s1 push-s1"></div>
                        <div class="col s3 push-s2">
                            <div class="left slider-height slider-height-mobile" id="left"
                            ">
                        </div>
                    </div>
                    <div class="col s4 center">
                        <img id="img"
                             class="top-radius right-radius bottom-radius left-radius br hoverable z-depth-2
                                     responsive-img"
                             src="images/square.png"
                             width="200px"
                             alt="">
                    </div>
                    <div class="col s3 pull-s2">
                        <div class="right slider-height slider-height-mobile" id="right"></div>
                    </div>
                    <div class="col s1 pull-s1">
                        <div class="right" id="rightValue"></div>
                    </div>
                    <div class="row"></div>

                    <div class="col s4 offset-s4" id="bottom"></div>
                    <div class="row"></div>
                    <div class="col s12 center" id="bottomValue"></div>
                    <div class="row"></div>

                    <div class="card horizontal center">
                        <div class="card-stacked">
                            <div class="card-content teal lighten-4">
                                <p><h5>CSS gerado:</h5></p>
                            </div>
                            <div class="card-action teal lighten-5">
                                <div class="col s3 push-s1">border-radius:</div>
                                <div class="col s1 push-s1" id="topResult"></div>
                                <div class="col s1 push-s1" id="rightResult"></div>
                                <div class="col s1 push-s1" id="bottomResult"></div>
                                <div class="col s1 push-s1" id="leftResult"></div>
                                <div id="result"></div>
                                <a onclick="myFunc()" id="copyBtn" class="waves-effect waves-light btn cp">
                                    Copiar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<footer class="page-footer teal lighten-2">
    <div class="footer-copyright">
        <div class="container">
            <div class="row right">
                Ricardo Rocha ©
            </div>
        </div>
    </div>
</footer>


<script src="js/materialize.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/wNumb.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/clipboard.js"></script>
<script>
    function myFunc() {
        var topResult = document.getElementById("topResult").innerHTML;
        var rightResult = document.getElementById("rightResult").innerHTML;
        var bottomResult = document.getElementById("bottomResult").innerHTML;
        var leftResult = document.getElementById("leftResult").innerHTML;
        document.getElementById("copyBtn").setAttribute("data-clipboard-text", "border-radius: "
            + topResult + " " + rightResult + " " + bottomResult + " " + leftResult);
    }
</script>
<style id="top-radius"></style>
<style id="right-radius"></style>
<style id="bottom-radius"></style>
<style id="left-radius"></style>
</body>
</html>