<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $BDD = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    if ($email != "" && $pwd != "") {
        
        $stmt = $BDD->prepare("SELECT * FROM users WHERE email=:email AND pwd=:pwd");
        $stmt->execute(array(":email" => $email, ":pwd" => $pwd));
        
        $res = $stmt->fetch();
        
        if ($res !== false) {
        	setcookie("username", $email, time()+60);
        	setcookie("password", $pwd  , time()+60);
            echo "Vous êtes connecté";
        } else {
            echo "L'email ou le mot de passe est incorrect";
        }
    }
}
?>

<form method="POST" action="">
	<label>
		Email
	</label for="email">
	<br/>
	<input type="email" name="email" placeholder="Entrer votre e-mail" id="email" required>
	<br/>

	<label>
		Password
	</label for="pwd">
	<br/>
	<input type="password" name="pwd" placeholder="Entrer votre Password" id="pwd" required >
	<br/>
    
     <input type="submit" name="valide" value="Se connecter">
</form>

</body>
</html>