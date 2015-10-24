<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The unofficial Minecraft server of the Rochester Institute of Technology (RIT).">
    <meta name="author" content="">

    <title>RITcraft - unofficial RIT Minecraft Server</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

<?php
    include_once 'status.class.php'; // Include the server status monitor script
    $status = new MinecraftServerStatus();
?>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">RITcraft</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://rit.j-f.co:8123/" target="_blank">DynMap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">RITcraft
                    <small>Survival Minecraft Server</small>
                </h1>

            </div>
        </div>

        <!-- Item Row -->
        <div class="row">
            <div class="col-md-4">
                <h3>Introduction</h3>
                <p>The RIT Minecraft server (also known as "RITcraft") is a semi-vanilla Minecraft server hosted by RIT students, for RIT students.
                <p>The server is hosted on a machine on the university campus (visit derezzed.student.rit.edu to see) and is intended as a place for Minecrafters across campus to come together.

                <h3>Server Status</h3>
                <?php
                    $response = $status->getStatus('rit.j-f.co', 30000, 1.8.x);
                    if (!$response) {
                        echo "<strong class=\"glyphicon glyphicon-remove\">  Server is offline.</strong>";
                    } else {
                        echo "<strong>rit.j-f.co is online</strong>";
                        echo "</br><span><em>Version</em>: " . $response['version'] . "</span>";
                        echo "</br><span><em>Players</em>: " . $response['players'] . " / " . $response['maxplayers'] ."</span>";
                        echo "</br><span><em>MOTD</em>: " . $response['motd'] . "</span>";
                    }
                 ?>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="./images/server.jpg" alt="">
            </div>
            <div class="col-md-4">
                <h3>How to connect</h3>
                <p>The server runs on the latest stable version of PaperSpigot, a fork of the popular Minecraft server software Spigot.
                <p>We try to always be on the latest version of Minecraft.
                <p>To join the server, add <strong>rit.j-f.co</strong> to your server list.
                <h3>Server Info</h3>
                <img src="./images/serverip.png"></img>
            </div>
        </div>

        <!-- Future Plans Row -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Future Plans</h3>
                <p>Want to help with either this website or RITcraft? Awesome! We are still in the early stages of launching the server, and we need help with some of the following:
                	<ul>
                		<li>Building (putting together an organized and composed spawn)</li>
                		<li>Technical Planning (plugins to make the server more enjoyabe for all)</li>
                		<li>Adventurers (those who set forth and conquer the world!)</li>
                	</ul>
                <p>Feel free to submit pull requests to <a href="https://github.com/jflory7/RITcraft-Site" target="_blank">this repo</a> if you want to help with the website, or if you want to help with the server, join our Telegram group chat.
                <p>To prevent the spam bots from finding us, we won't link the invite URL here, but the link is constantly cycled through the server in-game - look for it there!
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; RITcraft 2015. View this project on <a href="https://github.com/jflory7/RITcraft-Site" target="_blank">GitHub</a>.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
