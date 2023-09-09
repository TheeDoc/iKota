<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<!-- 
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script> -->
</head>
<body>

    <?php
           $name = "Siphamandla";
           $surname = "Ngcepe";
           $email = "221724818@gmail.com";
           $phoneNumber = "0718171153";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="profileconn.php" method="POST" autocomplete="">
                    <h2 class="text-center">Edit Profile</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="<?php echo $name ?>"  required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="surname" placeholder="<?php echo $surname ?>"  required value="<?php echo $surname ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="<?php echo $email ?>" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phoneNumber" placeholder="<?php echo $phoneNumber ?>" required value="<?php echo $phoneNumber ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Update">
                    </div>
                    <div class="link login-link text-center">Have an account? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
html,body{
    background-color: #0b2a3b;
    font-family: 'Poppins', sans-serif;
}
::selection{
    color: #fff;
    background: #6665ee;
}
.container{
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.container .form{
    background: #185275;
    padding: 30px 35px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .form form .form-control{
    height: 40px;
    font-size: 15px;
}
.container .form form .forget-pass{
    margin: -15px 0 15px 0;
}
.container .form form .forget-pass a{
   font-size: 15px;
}
.container .form form .button{
    background: #0b2a3b;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.container .form form .button:hover{
    background: #5757d1;
}
.container .form form .link{
    padding: 5px 0;
}
.container .form form .link a{
    color: #6665ee;
}
.container .login-form form p{
    font-size: 14px;
}
.container .row .alert{
    font-size: 14px;
}

    </style>
</body>
</html>