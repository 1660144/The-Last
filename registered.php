<?php
     session_start();
     if (!isset($_SESSION["dang_nhap_chua"])) 
     {
         $_SESSION["dang_nhap_chua"] = 0;
     }

     require_once './vendor/autoload.php';
    use Gregwar\Captcha\CaptchaBuilder;

    if (isset($_POST["btnRegister"])) 
    {
	    $input = $_POST["txtUserInput"];
        if ($input == $_SESSION["captcha"]) 
        {

	    }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="page ">
        <div class="head">
            
        <?php
                    require_once "head.php";
                   ?>   
        </div>

        <div class="search">
             <?php
                require_once "search.php";
            ?>  
        </div>
        <div class="menu">
            <?php
                require_once "menu.php";
            ?> 
        </div>
    </div>
    <div class="menu1 ">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
                <li>/</li>
                <li>Đăng Ký</li>
            </ul>
    </div>


    <div class="register container  ">
        <div class="row text-left">
            <div class="col-sm-6 col-sm-offset-3 form">
                <form id="f" action="" method="POST" role="form" onsubmit="return Check()">             
                    <legend class="text-center">Đăng ký tài khoản</legend>
				
					<div class="form-group">
						<label for="txtUsername">Tên đăng nhập</label>
						<input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Nhập Username">
					</div>
					<div class="form-group">
						<label for="txtPassword">Mật khẩu</label>
						<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu">
					</div>
					<div class="form-group">
						<label for="txtCheck">Xác nhận</label>
						<input type="password" class="form-control" id="txtCheck" name="txtCheck" placeholder="Nhập lại mật khẩu">
					</div>
                    <div class="form-group">
						<label for="txtEmail">Email</label>
						<input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="abc@gmail.com">
					</div>
                    <div class="form-group">
						<label for="txtUser">Tên Hiển Thị</label>
						<input type="text" class="form-control" id="txtUser" name="txtUser" placeholder="Nhập tên hiển thị">
					</div>
                    <div class="form-group">
						<label for="txtPhone">Số Điện Thoại </label>
						<input type="text" class="form-control" id="txtPhone" name="txtPhone"  placeholder="090.....(10 số)">
					</div>
                    <div class="form-group">
						<label for="txtAdd">Địa Chỉ</label>
						<input type="text" class="form-control" id="txtAdd" name="txtAdd"  placeholder="Nhập địa chỉ">
					</div>
					<div class="form-group">
						<?php
							$builder = new CaptchaBuilder;
							$builder->build();
							$_SESSION["captcha"] = $builder->getPhrase();
						?>
						<img src="<?= $builder->inline() ?>" alt="captcha" />
					</div>
					<div class="form-group">
						<label for="txtUserInput">Captcha</label>
						<input type="text" class="form-control" id="txtUserInput" name="txtUserInput">
					</div>
					<button name="btnRegister" type="submit" class="btn btn-block btn-lg">
						<span class="glyphicon glyphicon-ok"></span>
						Đăng ký
					</button>
                </form>
            </div>
        </div>
    </div><br>

    <div class="info">
       <?php
            require_once "infor.php";
        ?>
    </div>
    <!-- kết thúc thẻ thông tin liên hệ -->


    <?php
        require_once "footer.php";
    ?>
    </div>  
    <script type="text/javascript">
function Check()
{
    var tendangnhap = document.getElementById("txtUsername");
    if(tendangnhap.value == "")
    {
        alert("Tên đăng ký trống!");
        userName.focus();
        return false;
    }
    var password = document.getElementById("txtPassword");
    if(password.value == "")
    {
        alert("Yêu cầu nhập mật khẩu!");
        password.focus();
        return false;
    }
    var repass =document.getElementById("txtCheck");
    if(repass.value =="" || repass.value != password.value)
    {
        alert("Xác nhận mật khẩu trống hoặc không khớp");
        repass.focus();
        return false;
    }

    var repass =document.getElementById("txtCheck");
    if(repass.value =="" || repass.value != password.value)
    {
        alert("Xác nhận mật khẩu trống hoặc không khớp");
        repass.focus();
        return false;
    }
    var email =document.getElementById("txtEmail");
    if(email.value =="" )
    {
        alert("Email đang trống");
        email.focus();
        return false;
    }

    var rex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(rex.test(email.value) == false)
    {
        alert("Email không đúng định dạng");
        email.focus();
        return false;
    }
    var ten = document.getElementById("txtUser");
    if(ten.value == "")
    {
        alert("Tên hiển thị trống!");
        ten.focus();
        return false;
    }

   
    var phone = document.getElementById("txtPhone");
    if(phone.value == "")
    {
        alert("Số điện thoại trống!");
        phone.focus();
        return false;
    }
    var regExp = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if(regExp.test(phone.value) == false)
    {
        alert("Số điện thoại không đúng định dạng");
        email.focus();
        return false;
    }
}
   
$('#f').on('submit', function (e) {
			e.preventDefault();

			var form = this;

			var username = $('#txtUsername').val();
			// if (username.length === 0) {
			// 	alert('null');
			// 	return;
			// }

			var url = 'api/user_check.php?user=' + username;
			$.getJSON(url, function (data) {
				if (data === 1) {
					alert('Tên người dùng đã tồn tại! Vui lòng nhập tên khác');
				} else {
					form.submit();
				}
			});
		});
	</script>
</body>

</html>