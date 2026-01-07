<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hello Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-600 to-purple-700 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-2xl max-w-3xl w-full p-8 mx-4">

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
                👋 Bonjour depuis Laravel
            </h1>
            <p class="text-gray-600 text-lg">
                Félicitations 🎉 Votre application Laravel fonctionne parfaitement sur Vercel.
            </p>
        </div>

        <!-- Content -->
        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <div class="p-6 bg-indigo-50 rounded-xl">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">
                    🚀 Déploiement réussi
                </h2>
                <p class="text-gray-700">
                    Votre projet Laravel est maintenant déployé en environnement <strong>serverless</strong>
                    avec Vercel.
                </p>
            </div>

            <div class="p-6 bg-purple-50 rounded-xl">
                <h2 class="text-xl font-semibold text-purple-700 mb-2">
                    ⚙️ Technologie utilisée
                </h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Laravel</li>
                    <li>Blade</li>
                    <li>PHP Serverless</li>
                    <li>Vercel</li>
                </ul>
            </div>
        </div>

        <!-- Call to action -->
        <div class="text-center">
            <a href="/"
               class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-xl transition">
                🏠 Retour à l’accueil
            </a>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-sm text-gray-500">
            © {{ date('Y') }} — Laravel on Vercel
        </div>
    </div>

</body>
</html>
