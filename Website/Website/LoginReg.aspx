﻿<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="LoginReg.aspx.cs" Inherits="Website.LoginReg" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <title>Portfol.io Welcome!</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->

</head>
<body>
    <form id="form1" runat="server">
        <div>

            <h1>Добро пожаловать!</h1>

            <div class="w3layoutscontaineragileits">
                <h2>Авторизация</h2>
                <form action="#" method="post">
                    <input type="email" Name="Username" placeholder="E-MAIL" required="" />
                    <input type="password" Name="Password" placeholder="ПАРОЛЬ" required="" />
                    <ul class="agileinfotickwthree">
                        <li>
                            <input type="checkbox" id="brand1" value="" />
                            <label for="brand1"><span></span>Запомнить</label>
                            <a href="#">Забыли пароль?</a>
                        </li>
                    </ul>
                    <div class="aitssendbuttonw3ls">
                        <input type="submit" value="Войти" />
                        <p> Зарегестрировать новый аккаунт <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Нажмите</a></p>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>

            <!-- for register popup -->
            <div id="small-dialog1" class="mfp-hide">
                <div class="contact-form1">
                    <div class="contact-w3-agileits">
                        <h3>Регестрация</h3>
                        <form action="#" method="post">
                            <div class="form-sub-w3ls">
                                <input placeholder="Имя пользователя" type="text" required="" />
                                <div class="icon-agile">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3ls">
                                <input placeholder="Email" class="mail" type="email" required="" />
                                <div class="icon-agile">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3ls">
                                <input placeholder="Введите пароль" type="password" required="" />
                                <div class="icon-agile">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3ls">
                                <input placeholder="Подтвердите пароль" type="password" required="" />
                                <div class="icon-agile">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="login-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked="" />Я согласен с <a href="Second.aspx"> правилами и условиями </a></label>
                            </div>
                            <div class="submit-w3l">
                                <input type="submit" value="Зарегестрироваться" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //for register popup -->

            <div class="w3footeragile">
                <p> &copy; 2019 Git <a href="https://github.com/refeser" target="_blank">Refeser</a></p>
            </div>


            <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

            <!-- pop-up-box-js-file -->
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!--//pop-up-box-js-file -->
            <script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		});
            </script>

        </div>
    </form>
</body>
</html>
