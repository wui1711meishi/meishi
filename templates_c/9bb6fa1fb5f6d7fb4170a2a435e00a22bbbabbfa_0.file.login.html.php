<?php
/* Smarty version 3.1.30, created on 2018-04-18 02:29:23
  from "C:\wamp64\www\meishi\templates\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6ad83ab3dc6_06153163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb6fa1fb5f6d7fb4170a2a435e00a22bbbabbfa' => 
    array (
      0 => 'C:\\wamp64\\www\\meishi\\templates\\admin\\login.html',
      1 => 1524018103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad6ad83ab3dc6_06153163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>title</title>
    <link href="<?php echo CSS_PATH;?>
bootstrap.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo CSS_PATH;?>
font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css">
</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/admin/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                            <div class="panel-body">
                                <form role="form" action="index.php?m=admin&f=index&a=checkpass" method="post" id="signupForm">
                                    <hr />
                                    <h5>Enter Details to Login</h5><br />
                                    <label class="input-group-addon"><i class="fa fa-tag"  ></i></label>
                                    <input type="text" name="user" class="form-control" placeholder="Your Username " /><br />
                                    <label class="input-group-addon"><i class="fa fa-lock"  ></i></label>
                                    <input type="password" name="pass" class="form-control"  placeholder="Your Password" /><br />
                                    <label class="input-group-addon">验证码</label>
                                    <input type="password" name="code" class="form-control"  placeholder="code" />
                                    <img src="index.php?m=admin&f=index&a=code" alt="" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()*10"> <br /><br />
                                    <button type="submit" class="btn btn-primary ">login Now</button>
                                    <hr />
                                    <!--Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a>-->
                                </form>
                            </div>
                        </div>
        </div>
    </div>

</body>
</html>

<?php echo '<script'; ?>
>
    $().ready(function() {
        // 在键盘按下并释放及提交后验证提交表单
        $("#signupForm").validate({
            rules: {
                user: {
                    required: true,
                    rangelength:[6,18]
                },
                pass: {
                    required: true,
                    rangelength:[6,18]
                },
                code:{
                    required: true,
                    rangelength:[4,4]
                }
            },
            messages: {
                user: {
                    required: "请输入用户名",
                    rangelength: "输入长度必须介于 {0} 和 {1} 之间的字符串。"
                },
                pass: {
                    required: "请输入密码",
                    rangelength: "输入长度必须介于 {0} 和 {1} 之间的字符串。"
                },
                code:{
                    required: "请输入验证码",
                    rangelength: "输入长度必须为{0}个字符"
                }
            }
        })
    });
<?php echo '</script'; ?>
>


<?php }
}
