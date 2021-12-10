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

<body>
    <div class="back"></div>
    <div class="registration-form">
        <header>
            <h1>Sign Up</h1>
            <p>Fill in all informations</p>
        </header>
        <form>
            <div class="input-section name-section">
                <input class="name" type="text" placeholder="ENTER YOUR NAME HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-name"><i class="far fa-address-card"></i></span>
                    <span class="next-button name"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section surname-section folded">
                <input class="surname" type="text" placeholder="ENTER YOUR SURNAME HERE" autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-surname"><i class="far fa-address-card"></i></span>
                    <span class="next-button surname"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section email-section folded">
                <input class="email" type="email" placeholder="ENTER YOUR E-MAIL HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-email"><i class="far fa-envelope"></i></span>
                    <span class="next-button email"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section password-section folded">
                <input class="password" type="password" placeholder="ENTER YOUR PASSWORD HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-lock"><i class="fa fa-lock"></i></span>
                    <span class="next-button password"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section repeat-password-section folded">
                <input class="repeat-password" type="password" placeholder="REPEAT YOUR PASSWORD HERE"  autocomplete="off"/>
                <div class="animated-button"><span class="icon-repeat-lock"><i class="fa fa-lock"></i></span><span class="next-button repeat-password"><i class="fa fa-paper-plane"></i></span></div>
            </div>
            <div class="input-section preference-section folded">
                <select class="preference">
                    <option value="1">Tablet</option>
                    <option value="2">Computer</option>
                    <option value="3">Smartphone</option>
                </select>
                <div class="animated-button">
                    <span class="icon-preference"><i class="fa fa-lock"></i></span>
                    <span class="next-button preference"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="input-section tel-section folded">
                <input class="tel" type="tel" placeholder="REPEAT YOUR PHONE NUMBER HERE"  autocomplete="off"/>
                <div class="animated-button">
                    <span class="icon-tel"><i class="fas fa-phone"></i></span>
                    <span class="next-button tel"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <div class="success">
                <p>ACCOUNT CREATED</p>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>