<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de stock</title>
    <link rel="stylesheet" href="..//node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="css/fixed.css">
</head>
<body>
    <!--authentification-->
    <div class="modal-dialog text-center">
        <div class="col-sm-9 main-section">
            <div class="modal-content">

                <div class="col-12 user-img">
                    <img src="..//Images/user.png" alt="">
                </div>
                <div class="col-12 form-input">
                    <form action= "verification.php" method="POST">
                        <div class="form-group" >
                            <input type="text" class="form-control" id="name" name="name" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="name" name="pwd" placeholder="password" required>
                        </div>
                        <button type="submit" id="but_submit" name="but_submit" class="btn btn-success">Login</button>
                        <?php
                        if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2){
                            echo "<p style='color:red'>Username or password incorrect</p>";
                        }
                }
                ?>
                    </form>
                </div>
                <div class="col-12 forgot">
                    <a href="#">forgot password?</a>
                </div>
            </div>
        </div>
    </div>
     <!--authentification-->
</body>
</html>