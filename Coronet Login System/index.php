<?php require "header.php"; ?>

    <main>
        <div id="content">
            <div id="adminLogin">
                <img src="images/LOGO.PNG">
                <p class="loginTitle">Sign In</p>
                <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<p class="loginTitle">You are logged in!</p>';
                } else {
                    echo '<p class="loginTitle">You are logged out!</p>';
                }

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
                    <p class="resetPwd"><a href="#">Forgot your password?</a></p>';
                }
                ?>
                
                
            </div>
        </div>    
    <div>       
    </div>
    </main>