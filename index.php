<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SITO</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<?php
    $success = false;
    print_r($_POST);
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['preference']) && isset($_POST['billing_method']) && isset($_POST['telephone'])){
        $email = $_POST["email"];
        $password = $_POST["password"];-
        $username = $_POST["username"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $preference = $_POST['preference'];
        $billing_method = $_POST['billing_method'];
        $telephone = $_POST['telephone'];
        $newsletter = (isset($_POST['newsletter']) && ($_POST['newsletter'] == "on")) | 0;

        $mysqli = new mysqli("localhost", "alex0", "", "my_alex0");
        
        if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
        }

        $stmt = $mysqli->prepare("INSERT INTO `form` ( `name`, `surname`, `username`, `email`, `password_hash`, `preference`, `billing_method`, `telephone`, `newsletter` ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?) ;");
        if ( false===$stmt ) {
            die('prepare() failed: '.$mysqli->error);
        }

        $result = $stmt->bind_param("ssssssssi", $name, $surname, $username, $email, $password, $preference, $billing_method, $telephone, $newsletter);
        if ( false===$result ) {
            die('bind() failed: '.$stmt->error);
        }

        $result = $stmt->execute();
        if ( false===$result ) {
            die('execute() failed: '.$stmt->error);
        }
        
        $stmt->close();
        $mysqli->close();
        $success = true;

        if($success){
            printf("logged as %s<br>", $username);
        }
    }
    else {
?>
<body>
    <div class="back"></div>
    <div class="registration-form">
        <header>
            <h1>Sign Up</h1>
            <p>Fill in all informations</p>
        </header>
        <form action="./index.php" method="POST">
            <div class="input-section name-section">
                <input class="name" type="text" name="name" placeholder="ENTER YOUR NAME HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-name"><i class="far fa-address-card"></i></span>
                    <span class="next-button name"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section surname-section folded">
                <input class="surname" type="text" name='surname' placeholder="ENTER YOUR SURNAME HERE" autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-surname"><i class="far fa-address-card"></i></span>
                    <span class="next-button surname"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section username-section folded">
                <input class="username" type="text" name='username' placeholder="ENTER YOUR USERNAME HERE" autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-username"><i class="far fa-address-card"></i></span>
                    <span class="next-button username"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section email-section folded">
                <input class="email" type="text" name='email' placeholder="ENTER YOUR E-MAIL HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-email"><i class="far fa-envelope"></i></span>
                    <span class="next-button email"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section password-section folded">
                <input class="password" type="password" name='password' placeholder="ENTER YOUR PASSWORD HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-lock"><i class="fa fa-lock"></i></span>
                    <span class="next-button password"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section billing-section folded">
                <select class="billing" name='billing_method'>
                    <option value="null" disabled selected style="display: none;"> -- Select an option -- </option>
                    <option value="Paypal">Paypal</option>
                    <option value="Carta di credito">Carta di credito</option>
                    <option value="Bonifico">Bonifico</option>
                    <option value="Bancomat">Bancomat</option>
                </select>
                <div class="animated-button">
                    <span class="icon-billing"><i class="fa fa-lock"></i></span>
                    <span class="next-button billing"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="input-section preference-section folded">
                <select class="preference" name='preference'>
                    <option value="null" disabled selected style="display: none;"> -- Select an option -- </option>
                    <option value="Tablet">Tablet</option>
                    <option value="Computer">Computer</option>
                    <option value="Smartphone">Smartphone</option>
                </select>
                <div class="animated-button">
                    <span class="icon-preference"><i class="fa fa-lock"></i></span>
                    <span class="next-button preference"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="input-section tel-section folded">
                <input class="tel" type="tel" name="telephone" placeholder="ENTER YOUR NUMBER HERE" autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-tel"><i class="fas fa-phone"></i></span>
                    <span class="next-button tel"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="input-section newsletter-section folded">
                <div style="display: inline;" class="newsletter-div">
                    <input id='newsletter' class="newsletter" name="newsletter" type="checkbox" name="newsletter" checked/><br>
                    <label for="newsletter">I want to subscribe to the Newsletter</label>
                </div>
                <div class="animated-button">
                    <span class="icon-newsletter"><i class="fas fa-phone"></i></span>
                    <span class="next-button newsletter"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="success">
                <p>ACCOUNT CREATED</p>
            </div>
            <input type="submit" id="submit" style="display: none;" value="">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./script.js"></script>
</body>
<?php
    }
?>
</html>