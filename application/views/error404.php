<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/icon.ico" />
    <title>Opps!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link type="text/css" href="<?php echo base_url(); ?>assets/lib/animate.css/animate.css" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css?family=Bree+Serif");

        body {
            height: 100vh;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        p {
            font-family: 'Bree Serif', serif;
            font-weight: 400;
            text-align: center;
            font-size: 1.2em
        }

    </style>
</head>

<body>
    <div class="col-md-12 col-sm-12 col-xs-12 animated bounceIn" style="padding:0">
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:5vh;padding:0">
            <center>
                <div class="col-md-6 col-sm-6 col-xs-6" style="padding:0">
                    <img src="<?php echo base_url(); ?>css/images/404.gif" alt="" height="" width="100%">

                </div>
            </center>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <center>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <p>La página a la que estás intentando acceder no se puede encontrar.</p>
                    <a href="<?php echo site_url('login'); ?>" class="btn btn-success btn-lg">Regresar</a>
                </div>
            </center>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scriptgeneral.js"></script>
    <script>
    history.pushState(null, null, location.href);
window.onpopstate = function() {
    history.go(1);
};
document.oncontextmenu = function() {
    return false;
};

function right(e) {
    if (navigator.appName == "Netscape" && e.which == 3) {
        return false;
    } else if (
        navigator.appName == "Microsoft Internet Explorer" &&
        event.button == 2
    ) {
        return false;
    }
    return true;
}
document.onmousedown = right;
    </script>

</body>

</html>
