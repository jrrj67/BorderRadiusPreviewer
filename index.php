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
<div class="container">
    <div class="row"></div>
    <div class="row">
        <div class="col s12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="col s12 center">
                            <div id="topValue"></div>
                            <div class="row"></div>
                            <div class="col s3 push-s3 hide-on-med-and-down" id="top" style="left: 303px;top: 10px;"></div>
                            <div class="row"></div>
                            <div class="col s1 left" style="
                                 padding-right: 0px;
                                 padding-left: 0px;">
                                <div id="leftValue" class="col s1 hide-on-med-and-down" style="
                                padding-right: 0px;padding-left: 190px;"></div>
                                <div id="leftMobileValue" class="col s1 pull-s6 hide-on-med-and-up" style="
                                 padding-right: 50px;
                                 padding-left: 0px;"></div>
                                <div style="padding-right: 0px; padding-left: 240px;">
                                    <div id="left" class="hide-on-med-and-down" style="height: 185px;left: 35px;"></div>
                                </div>
                                <div>
                                    <div id="left-mobile" class="hide-on-med-and-up" style="height: 100px;left: 40px;"></div>
                                </div>
                            </div>
                            <img id="img"
                                 class="top-radius right-radius bottom-radius left-radius br hoverable z-depth-2 responsive-img hide-on-med-and-down"
                                 src="images/square.png"
                                 width="200px"
                                 alt="">
                            <img class="top-radius right-radius bottom-radius left-radius br hoverable z-depth-2 responsive-img hide-on-med-and-up"
                                 src="images/square.png"
                                 width="100px"
                                 alt="">
                            <div class="col s1 pull-s3 right">
                                <div class="col s2 push-s7 hide-on-med-and-down" id="rightValue"></div>
                                <div class="col s2 hide-on-med-and-up" id="rightMobileValue" style="padding-right: 0px;
                                    padding-left: 50px" ;>

                                </div>
                                <div id="right" class="hide-on-med-and-down" style="height: 185px; right: 35px"></div>
                                <div>
                                    <div id="right-mobile" class="hide-on-med-and-up" style="height: 100px;left: 12px"></div>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div>
                                <div class="col s3 push-s3 hide-on-med-and-down" id="bottom" style="bottom: 16px;left: 303px;";></div>
                            </div>
                            <div class="row"></div>
                            <div id="bottomValue"></div>
                        </div>
                        <div class="row"></div>
                        <div class="col s12">
                            <div class="card horizontal center">
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <p>CSS gerado:</p>
                                    </div>
                                    <div class="card-action">
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
        </div>
    </div>
</div>
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