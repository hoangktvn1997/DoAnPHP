<?php
/**
 * Created by PhpStorm.
 * User: HOA
 * Date: 3/21/2019
 * Time: 11:09 PM
 */
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form-v4 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v4">
<div class="page-content">
    <div class="form-v4-content">
        <div class="form-left">
            <h2>Vì sao bạn nên đăng ký tài khoản thành viên ?</h2>
            <p class="text-1">Sau khi đăng nhập, bạn sẽ được phép thanh toán giỏ hàng trực tuyến và nhận các thông tin ưu đãi từ phía cửa hàng chúng tôi.</p>
            <p class="text-2"><span>Đặc biệt:</span> Bạn sẽ nhận được các ưu đãi đặc biệt khi bạn đã trở thành khách hàng thân thiết với cửa hàng chúng tôi.</p>
            <div class="form-left-last">
                <input type="submit" name="account" class="account" value="Tôi đã có tài khoản">
                <br><a href="index.php" style="font-size: 18px"><i class="fas fa-undo-alt"></i>Quay về trang chủ</a>
            </div>
        </div>
        <form class="form-detail" action="#" method="post" id="myform">
            <h2>Đăng ký tài khoản</h2>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <label for="first_name">Họ và tên</label>
                    <input type="text" name="first_name" id="first_name" class="input-text" placeholder="Nhập họ và tên">
                </div>
            </div>
            <div class="form-row">
                <label for="your_email">Email</label>
                <input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Nhập Email">
            </div>
            <div class="form-group">
                <div class="form-row form-row-1 ">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" class="input-text" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="form-row form-row-1">
                    <label for="comfirm-password">Xác nhận mật khẩu</label>
                    <input type="password" name="comfirm_password" id="comfirm_password" class="input-text" placeholder="Nhập lại mật khẩu" required>
                </div>
            </div>
<!--            <div class="form-checkbox">-->
<!--                <label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>-->
<!--                    <input type="checkbox" name="checkbox">-->
<!--                    <span class="checkmark"></span>-->
<!--                </label>-->
<!--            </div>-->
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Đăng ký">
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success:  function(label){
            label.attr('id', 'valid');
        },
    });
    $( "#myform" ).validate({
        rules: {
            password: "required",
            comfirm_password: {
                equalTo: "#password"
            }
        },
        messages: {
            first_name: {
                required: "Please enter a firstname"
            },
            last_name: {
                required: "Please enter a lastname"
            },
            your_email: {
                required: "Please provide an email"
            },
            password: {
                required: "Please enter a password"
            },
            comfirm_password: {
                required: "Please enter a password",
                equalTo: "Wrong Password"
            }
        }
    });
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
