<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Đăng ký</h2>
                    <p class="text-center">Tạo tài khoản nếu bạn chưa có</p>
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
                        <input class="form-control" type="text" name="name" placeholder="Họ và tên" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" id="cpassword" name="cpassword" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Đăng ký">
                    </div>
                    <div class="link login-link text-center" onclick="matchPassword()">Bạn đã có tài khoản? <a href="login-user.php">Đăng nhập</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<script language="javascript">
//     var pw1 = document.getElementById("password");  
//   var pw2 = document.getElementById("cpassword");  
//   if(pw1 != pw2)  
//   {   
//     alert("Passwords did not match");  
//   } else {  
//     alert("Password created successfully");  
//   }  
 function matchPassword() {  
  var pw1 = document.getElementById("password");  
  var pw2 = document.getElementById("cpassword");  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    alert("Password created successfully");  
  }  
}  
</script>