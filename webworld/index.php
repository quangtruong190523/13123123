<?php
session_start();
// "http://13.251.169.132/teamservice/register_email.php?uname=unamereg&passw=passreg&email=emailreg&gameid=1"
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uname = $_POST['account'];
        $passw = $_POST['password'];
        $emai = $_POST['email'];
        $id_game = 1;
        $ttt = file_get_contents("http://13.251.169.132/teamservice/register_email.php?uname=".$uname."&passw=".$passw."&email=".$emai."&gameid=1");
        
        $sss =  explode("|", $ttt);


        if($sss[0] == 0){
            $_SESSION['alert'] = "register successfully";
        }else{
            $_SESSION['alert'] = $sss[0];
        }
     
    }
?>
<html>

<head>
    <meta name="viewport" content="width=device-width,maximum-scale=1,user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ninja School Online</title>
    <link rel="stylesheet" href="http://ninjaschool.vn/css/template.css" type="text/css">
    <!-- <link rel="shortcut icon" href="http://27.0.14.78/dl/image/iconninja32.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="http://dd.ninjaschool.vn/logo256.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="http://dd.ninjaschool.vn/logo256.png">
    <link rel="icon" type="images/png" href="http://dd.ninjaschool.vn/logo256.png" sizes="32x32">
        <meta name="description" content="Website chính thức của Ninja School Online - Game nhập vai Việt Nam được yêu thích nhất trên Mobile!">

</head>
<style>
    input[type=text],input[type=password],input[type=email],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    label{
        font-size: 18px;
    }
    input[type=submit] {
        width: 100%;
        background-color: #FF9933;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #561d00;
    }

    /* div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    } */
</style>

<body>
    <div class="body_body">
        <div style="line-height: 3px;
    font-size: 10px;
    padding-right: 5px;
       padding-bottom: 6px;">
            <img height="12" src="http://ninjaschool.vn/12.png" style="vertical-align: middle;">
            <span style="vertical-align: middle;">The game is intended for players 12 years and older. Playing more than 180 minutes a day will be harmful to health</span>
        </div>
        <div class="left_top"></div>
        <div class="bg_top">
            <div class="right_top"></div>
        </div>
        <div class="body-content">
            <div class="bg-content2">
                <div class="a" align="center"><a href="http://ninjaschool.vn/"><img src="http://ninjaschool.vn/images/logo.png"></a></div>
                <div id="top">
                    <div class="link-more">
                        <div class="h" align="center">
                            <!--<div style="color: #032E58;margin-top:-8px;margin-bottom:4px;">
							<center> <b>Mạng xã hội cho điện thoại di động</b></center> 
							</div>-->
                            <div class="bg_noel"></div>
                            <div class="menu2" style="background: #561d00;">
                                <table width="100%" border="0" cellspacing="4	">
                                    <tbody>
                                        <tr class="menu">
                                            <td style="width:25%"><a href="#">Home Page</a></td>
                                            <td style="width:25%" id="selected"><a href="">Register</a></td>
                                            <td style="width:25%"><a href="#">Forum</a></td>
                                            <td style="width:25%"><a href="https://www.facebook.com/nj.teamobi/" target="_blank">Fanpage</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-content" style="margin:0px;text-align:center;">
                   
                            <div>

    <?php
        if(!empty( $_SESSION['alert'])){
            ?>
                                                <div style="    background: peachpuff;
    height: 50px;
    line-height: 50px;">
            <h1><?= $_SESSION['alert'] ?></h1>
            </div>
            <?
            unset($_SESSION['alert']);
        }
       
    ?>
                                   
                                    <br>
                                    <form action="" method="POST">
                                        <label for="account">Account name</label>
                                        <input type="text" id="account" required name="account" placeholder="Account name..">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" required name="password" placeholder="You Password..">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" required name="email" placeholder="You Email..">
                                        <label for="id_game">Game</label>
                                        <select id="id_game" name="id_game">
                                            <option value="1">Ninjaschool</option>
                                        </select>

                                        <input type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>

                        </div>
                        <br>
                    </div><br>

                </div>
            </div>
        </div>
        <div class="bg_tree"></div>
        <div class="foot_bg">

        </div>

        <div class="left_b_bottom">
            <div class="right_b_bottom">
                <div class="footer">
                    <div class="left_bottom"></div>
                    <div class="right_bottom"></div>
                </div>
            </div>
        </div>
        <div class="copyright"><br><b>TeaMobi.com</b>
        </div>
    </div>

    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-38084035-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>


</body>

</html>