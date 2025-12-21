
<?php
require __DIR__ . "/../config/database.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: /login");
    exit;
}

$userId = $_SESSION["user_id"];

$stmt = $conn->prepare("SELECT name, email FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$title = "Mon Profil - DigitalWave";
$view  = "profile.php";

require __DIR__ . "/../templates/layout.php";





