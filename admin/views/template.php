<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar {
            background-image: url('../assets/bg.png');
            margin: 0;
            border-radius: 0;
        }
        .navbar-brand {
            color: #ffffff; /* warna teks navbar */
        }
        .content {
            margin-top: 20px;
        }
        .list-group-item {
            border-radius: 0;
        }
        .modal-dialog {
            margin-top: 100px; /* jarak modal dari atas */
        }
    </style>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Sistem Rental Motor</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../admin/controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row content">
            <div class="col-md-3 col-xs-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="index.php?mod=motor"><i class="fa fa-motorcycle"></i> <span class="hidden-xs">Daftar Motor</span></a></li>
                    <li class="list-group-item"><a href="index.php?mod=pengguna"><i class="fa fa-address-card"></i> <span class="hidden-xs">Daftar Pengguna</span></a></li>
                </ul>
            </div>
            <div class="col-md-9 col-xs-12">
                <?php include_once $content; ?>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Berhasil</h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
