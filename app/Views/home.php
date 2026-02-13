<?php
require __DIR__ . '/../Includes/header.php';
?>

<div class="flex">
    <?php require __DIR__ . '/../Includes/sidebar.php'; ?>

    <main class="flex-1 p-12">
        <h1 class="text-4xl font-bold mb-4">
            Kirano De Meester
        </h1>

        <p class="text-lg text-gray-600 max-w-2xl">
            Backend-focused full stack developer with a strong interest in
            PHP, MVC architecture, and clean, maintainable code.
        </p>

        <div class="mt-8">
            <a
                    href="/projects"
                    class="inline-block bg-gray-900 text-white px-6 py-3 rounded hover:bg-gray-800"
            >
                View projects
            </a>
        </div>
    </main>
</div>

<?php require __DIR__ . '/../Includes/footer.php'; ?>
