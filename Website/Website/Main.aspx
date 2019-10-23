<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Main.aspx.cs" Inherits="Website.Main" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Главная</title>
    <link href="css/MainStyle.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <form id="form1" runat="server">
    <div class="up">
        <nav>
            <img class="logo" src="images/logo_bl.png" />
            <ul>
                <li><a href="Main.aspx">Главная</a></li>
                <li><a href="Main.aspx">Работы</a></li>
                <li><a href="LoginReg.aspx">Выйти</a></li>
            </ul>
        </nav>
    </div>
        <div class="base">
            <h3>Тут главная и все, что к нему относится</h3>
        </div>
        <div class="contactspan">
    <a class="contacts" href="http://vk.com/bunnre">
        <img src="images/vk.png" />
    </a>
    <a class="contacts" href="https://instagram.com/refssyn/">
        <img src="images/instagram.png" />
    </a>
    <a class="contacts" href="https://github.com/Refeser">
        <img src="images/github.png" />
    </a>
</div>
    </form>
</body>
</html>
