<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>khashayar.ir</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            direction: rtl;
            font-family: IRYekan;

        }
        .main{
            background-color: crimson;
            margin: 50px auto 50px auto;
            width: 100%;
        }
        .right{
            float: right;
            margin-right: 100px;
            background-color: #8696FE;
            width: 30%;
            height: 500px;
            border-radius: 10px;
            padding: 10px;

        }
        .left{
            float: left;
            width: 55%;
            background-color:#C4B0FF;
            margin-left: 100px;
            height: 500px;
            border-radius: 10px;
            padding: 30px;
        }
        .img-profile{
            width: 100%;
            padding: 10px;
            height: 30%;
            text-align: center;
        }
        .img-profile img{
            max-width: 100%;
            max-height: 100%;
            border-radius: 100%;
            background: white;

        }
        .nav-profile{
            width: 100%;
            padding: 10px;
            height: 70%;
            text-align: center;
            margin-top: 50px;
        }
        li{
            list-style: none;

        }
        a{
            text-decoration: none;
            padding: 5px;
            display: block;
            border-radius: 15px;
            background-color: white;
            color: black;
            margin: 15px 10px 15px 10px;
            font-weight: bold;
        }
        a:hover{
            background-color: lightblue;
        }
        a:active{
            background-color: greenyellow;
        }
        table{

            width: 100%;
            margin:0px ;

        }
        table , th , td{
            border: black 2px solid;
            text-align: center;
            padding: 10px;
            font-size: 15px;
            border-collapse: collapse;
        }
        td{
            font-size: 20px;
            font-family: "B Nazanin" !important;
            font-weight: bold;
            padding: 10px;

        }
        th{
            height: 50%;
            background: green;
        }



    </style>
    </head>
<body>
<div class="main">
    <div class="right">
        <div class="img-profile">
            <img src="21104.png">
            <div style="font-size:15px;margin-top: 1px">
            <?php
            $username=$_POST['username'];
                if(isset($_POST['btn'])){
                    echo $username;
                }
                else{
                    echo($_SERVER['SERVER_ADDR']);
                }
             ?>
            </div>
        </div>
        <div class="nav-profile">
            <ul>
                <li><a  onclick="home()" > خانه</a> </li>
                <li><a  onclick="order()" >سفارش ها</a> </li>
                <li><a  onclick="downloads()">  دانلود ها</a> </li>
                <li><a href="login.php"> خروج </a> </li>
            </ul>

        </div>
    </div>
    <div class="left" id="left">
    </div>
</div>
<script>
    function home(){
        document.getElementById('left').innerHTML='سلام به پنل کاربری خوش آمدی';
    }
    function order(){
        document.getElementById('left').innerHTML='        <table>\n' +
            '            <tr>\n' +
            '                <th>\n' +
            '                    کد سفارش\n' +
            '                </th>\n' +
            '                <th>\n' +
            '                    محصول\n' +
            '                </th>\n' +
            '                <th>\n' +
            '                    وضعیت\n' +
            '                </th>\n' +
            '            </tr>\n' +
            '            <tr>\n' +
            '                <td>\n' +
            '                    12\n' +
            '                </td>\n' +
            '                <td>\n' +
            '                    دوره آموزش وردپرس\n' +
            '                </td>\n' +
            '                <td>\n' +
            '                    <span style =\' background-color: white ; padding: 0px 30px; border-radius: 5px\'>تکمیل</span>\n' +
            '                </td>\n' +
            '            </tr>\n' +
            '        </table>'
    }
    function downloads(){
        document.getElementById('left').innerHTML='        <table>\n' +
            '            <tr>\n' +
            '                <th>\n' +
            '                    کد سفارش\n' +
            '                </th>\n' +
            '                <th>\n' +
            '                    محصول\n' +
            '                </th>\n' +
            '                <th>\n' +
            '                    وضعیت\n' +
            '                </th>\n' +
            '            </tr>\n' +
            '            <tr>\n' +
            '                <td>\n' +
            '                    12\n' +
            '                </td>\n' +
            '                <td>\n' +
            '                    دوره آموزش وردپرس\n' +
            '                </td>\n' +
            '                <td>\n' +
            '                    <span style =\' background-color: white ; padding: 0px 30px; border-radius: 5px\'>دانلود</span>\n' +
            '                </td>\n' +
            '            </tr>\n' +
            '        </table>'
    }
</script>
</body>
</html>
