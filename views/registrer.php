<div class="min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-3xl font-bold text-center mb-6 text-blue-600">Inscription</h2>

        <form class="space-y-4" method="POST" action="">
        <input type="text" name="name" placeholder="Nom complet"
          class="w-full border px-4 py-2 rounded-lg" required>
      
        <input type="email" name="email" placeholder="Email"
          class="w-full border px-4 py-2 rounded-lg" required>
      
        <input type="password" name="password" placeholder="Mot de passe"
          class="w-full border px-4 py-2 rounded-lg" required>
      
        <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe"
          class="w-full border px-4 py-2 rounded-lg" required>
      
        <button
          class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
          Créer un compte
        </button>
      </form>

 <p class="text-center text-gray-600 mt-4">
      Déjà inscrit ?
      <a href="login.html" class="text-blue-600 hover:underline">Se connecter</a>
    </p>
   
  </div>
</div>