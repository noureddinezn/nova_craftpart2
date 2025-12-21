<?php

$lienClick = $page ?? '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'DigitalWave') ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<header class="bg-white shadow-md">
  <nav class="container mx-auto flex justify-between items-center py-4">
    
    <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>

    <ul class="flex space-x-6 items-center">

      <li>
        <a href="/"
           class="<?= $lienClick === 'home' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
          Accueil
        </a>
      </li>

      <li>
        <a href="/services"
           class="<?= $lienClick === 'services' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
          Services
        </a>
      </li>

      <li>
        <a href="/about"
           class="<?= $lienClick === 'about' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
          À propos
        </a>
      </li>

      <li>
        <a href="/contact"
           class="<?= $lienClick === 'contact' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
          Contact
        </a>
      </li>

     
      <?php if (!isset($_SESSION['user_id'])): ?>

        <li>
          <a href="/login"
             class="<?= $lienClick === 'login' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
            Login
          </a>
        </li>

        <li>
          <a href="/registrer"
             class="<?= $lienClick === 'registrer' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
            Register
          </a>
        </li>

     
      <?php else: ?>

        <li>
          <a href="/profile"
             class="<?= $lienClick === 'profile' ? 'text-blue-600 font-medium' : 'hover:text-blue-600' ?>">
            Profil
          </a>
        </li>

        <li>
          <a href="/logout"
             class="text-red-600 hover:text-red-800 font-medium">
            Logout
          </a>
        </li>

      <?php endif; ?>

    </ul>
  </nav>
</header>