<?php


require __DIR__ ."/../config/database.php"; 

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

   
    if (empty($name) || empty($email) || empty($password)) {
        $error = "Tous les champs sont obligatoires.";
    }

    elseif ($password !== $confirm) {
        $error = "Les mots de passe ne correspondent pas.";
    }
  
 
    else {
        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $error = "Cet email est déjà utilisé.";
        } else {

            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         
            $stmt = $conn->prepare(
                "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
            );
            $stmt->bind_param("sss", $name, $email, $hashedPassword);

            if ($stmt->execute()) {

            header("Location: /login");
            exit;
        
        } else {
            $error = "Erreur lors de l'inscription.";
        }

        }
    }
}

$title = "Register - DigitalWave";
$view  = "registrer.php";

require __DIR__ . "/../templates/layout.php";
?>


