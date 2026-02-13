<aside class="w-64 bg-gray-900 text-white min-h-screen p-6">
    <h2 class="text-xl font-bold mb-6">Portfolio</h2>

    <nav class="space-y-3">
        <a href="<?= BASE_URL ?>/" class="block hover:text-gray-300">Home</a>
        <a href="<?= BASE_URL ?>/projects" class="block hover:text-gray-300">Projects</a>

        <?php if (!empty($_SESSION['user_id'])): ?>
            <hr class="border-gray-700 my-4">
            <a href="<?= BASE_URL ?>/projects"
               class="inline-block bg-gray-900 text-white px-6 py-3 rounded hover:bg-gray-800">
                View projects
            </a>
            <a href="/logout" class="block hover:text-gray-300">Logout</a>
        <?php endif; ?>
    </nav>
</aside>
