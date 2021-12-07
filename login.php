<?php
    $logged = false;
    if (isset($_POST["user"]) && isset($_POST["password"])){
        $user = $_POST["user"];
        $user1 = $_POST["user"];
        $password = $_POST["password"];

        $mysqli = new mysqli("localhost", "alex0", "", "my_alex0");
        
        if ($mysqli->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $mysqli->prepare("SELECT * FROM `form` WHERE username=? OR email=? ;");
        if ( false===$stmt ) {
            die('prepare() failed: '.$mysqli->error);
        }

        $result = $stmt->bind_param("ss", $user, $user1);
        if ( false===$result ) {
            die('bind() failed: '.$stmt->error);
        }

        $result = $stmt->execute();
        if ( false===$result ) {
            die('execute() failed: '.$stmt->error);
        }

        $result = $stmt->get_result();
        $row = $result->fetch_object();
        if($row){
            $logged = true;
            print_r($row);
        }

        $stmt->close();
        $mysqli->close();
    }
    if($logged){
        printf("logged as %s<br>", $row->username);
    }
    else {
?>
    <form action="login.php" method="post">
    <div id="user">
        <a> Username/Email: </a>
        <input type="text" name="user" required><br>
    </div>
    <div id="password">
        <a> Password: </a>
        <input type="password" name="password" required><br>
    </div>
    <input type="submit" value="Submit">
</form>
<?php
    }
?>