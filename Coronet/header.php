<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content>
    <title></title>
    <style>
        ul {
            display: flex;
            padding-left: 0;
        }

        li {
            margin-right: 35px;
            list-style-type: none;
        }

        .loginform {
            float: left;
        }

        .signup {
            float: left;
            margin: 0 50px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="#" alt="">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div>
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                } else {
                    echo '<form action="includes/login.inc.php" method="post" class="loginform">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php" class="signup">Signup</a>';
                }
            ?>
            
                      
    </div>
        </nav>
    </header>
</body>
</html>