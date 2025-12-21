










<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

    <form method="post" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
        <input type="text" name="nom" placeholder="Votre nom"
               value="<?= htmlspecialchars($nom ?? '') ?>"
               class="w-full border px-4 py-2 rounded-lg">

        <input type="email" name="email" placeholder="Votre email"
               value="<?= htmlspecialchars($email ?? '') ?>"
               class="w-full border px-4 py-2 rounded-lg">

        <textarea name="message" placeholder="Votre message"
                  class="w-full border px-4 py-2 rounded-lg"><?= htmlspecialchars($message ?? '') ?></textarea>

        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Envoyer
        </button>
    </form>
</section>
