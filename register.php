<?php
    $success = false;

    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['preference']) && isset($_POST['billing_method']) && isset($_POST['telephone'])){
        $email = $_POST["email"];
        $password = $_POST["password"];
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

    }
    if($success){
        printf("logged as %s<br>", $username);
    }
    else {
?>
<form action="register.php" method="post">
    <div id="name">
        <a> Name: </a>
        <input type="text" name="name" required><br>
    </div>
    <div id="surname">
        <a> Surname: </a>
        <input type="text" name="surname" required><br>
    </div>
    <div id="email">
        <a> Email: </a>
        <input type="email" name="email" required><br>
    </div>
    <div id="password">
        <a> Password: </a>
        <input type="password" name="password" required><br>
    </div>
    <div id="username">
        <a> Username: </a>
        <input type="text" name="username" required><br>
    </div>
    <div id="telephone">
        <a> Telephone: </a>
        <input type="text" name="telephone" required><br>
    </div>
    <div id="preference">
        <a> Selezionare la vostra preferenza:</a>
        <div id="computer">
            <input type="radio" name="preference" value="computer" checked>
            <label for="computer">Computer</label><br>
        </div>
        <div id="tablet">
            <input type="radio" name="preference" value="tablet">
            <label for="tablet">Tablet</label><br>
        </div>
        <div id="smartphone">
            <input type="radio" name="preference" value="smartphone">
            <label for="smartphone">Smartphone</label>
        </div>
    </div>
    <div id="billing_methods">
        <a> Selezionare metodo di pagamento:</a>
        <div id="bonifico">
            <input type="radio" name="billing_method" value="Bonifico" checked>
            <label for="bonifico">Bonifico</label><br>
        </div>
        <div id="bancomat">
            <input type="radio" name="billing_method" value="Bancomat">
            <label for="bancomat">Bancomat</label><br>
        </div>
        <div id="carta_di_credito">
            <input type="radio" name="billing_method" value="Carta di credito">
            <label for="carta_di_credito">Carta di credito</label>
        </div>
        <div id="paypal">
            <input type="radio" name="billing_method" value="Paypal">
            <label for="paypal">Paypal</label>
        </div>
    </div>
    <div id="newsletter">
        <input type="checkbox" name="newsletter" checked>
        <label for="newsletter">Voglio iscrivermi alla Newsletter</label><br>
    </div>
    <input type="submit" value="Submit">
</form>

<?php 
}
?>