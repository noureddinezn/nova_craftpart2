<section class="container mx-auto py-16">
  <div class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg">

    <h2 class="text-3xl font-bold mb-6 text-center">Mon Profil</h2>

    <div class="space-y-4">
      <p><strong>Nom :</strong> <?= htmlspecialchars($user["name"]) ?></p>
      <p><strong>Email :</strong> <?= htmlspecialchars($user["email"]) ?></p>
    </div>

    <a href="/edit-profile"
       class="block mt-6 w-full text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
      Modifier le profil
    </a>

  </div>
</section>