<?php
//echo phpinfo();
//exit();


require './includes/process_mail.php';
if (isset($_POST['send'])) {
    $to = 'nebaitsigereda@gmail.com';
    $subject = 'Message from my website';
    $headers = [];
    $headers[] = "From: " . $_POST['email'];
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null;
    if ($mailsent) {
        header('Location; thanks.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact | Tsigereda</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <h1 class="h11">Tsigereda Nebai</h1>
</header>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about/index.html">About Me</a></li>
                <li class="active"><a href="index.php">Contact</a></li>
                <li><a href="../project/index.html">Gallery</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<br>
<br>
<div class="container cont form-top">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-12">
            <?php
            if ($_POST && $suspect) { ?>
                <p class="warning">Sorry, your email couldn't be sent.</p>
            <?php }
            ?>
            <p>Feel free to contact me!</p>
            <p>You can leave any message in this message box.</p>
            <div id="form-messages"></div>
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" id="reused_form">
                <div id="name-group" class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" id="message" class="form-control" placeholder="Type your message"
                              name="message" maxlength="1000" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block btn-raised" id="send">Send<span
                                class="fa fa-arrow-right"></span></button>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-md-1">
                <span style="line-height: 1.4em; margin-left: : 40px;" id="tsigu">
                    <p><strong>Be Social</strong></p>
                    <a href="https://plus.google.com/u/0/103725301072350335537" class="facetwitt"><img
                                src="https://image.flaticon.com/icons/svg/145/145804.svg" width="50px"></a>
                     <a href="https://www.instagram.com/agida93lve/" class="facetwitt"><img
                                 src="https://image.flaticon.com/icons/svg/174/174855.svg" width="50px"></a>
                       <a href="https://www.linkedin.com/in/tsigereda-nebai-027591131/" class="facetwitt"><img
                                   src="https://image.flaticon.com/icons/svg/124/124011.svg" width="50px"></a>
                       <a href="https://twitter.com/agida14" class="facetwitt"><img
                                   src="https://image.flaticon.com/icons/svg/145/145812.svg" width="50px"></a>     <a
                            href="https://www.facebook.com/nebai.ts" class="facetwitt"><img
                                src="https://image.flaticon.com/icons/svg/124/124010.svg" width="50px"></a>
                </span>
        </div>
    </div>
</div>

<div>
    <footer>
        <p>©copy right 2017 tsigereda </p>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>

</html>
