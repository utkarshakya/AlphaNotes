<?php require basePath("views/partials/head.php") ?>
<?php require basePath("views/partials/nav.php") ?>
<?php require basePath("views/partials/banner.php") ?>

<main class="w-screen min-h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl flex flex-col gap-5 px-5 py-10">
        <a href="/notes/create" class="w-fit">
            <button type="button" class="w-fit px-5 py-3 rounded-md cursor-pointer bg-indigo-500 text-white font-semibold hover:bg-indigo-600 ">Create Note</button>
        </a>
        <hr class="text-gray-500">
        <div class="flex flex-wrap gap-5">
            <?php foreach ($result as $record): ?>
                <a href="/note?id=<?= $record['id'] ?>">
                    <p class="border-2 rounded-md p-5 cursor-pointer font-semibold text-gray-700 hover:text-black hover:bg-gray-200 hover:shadow-2xl duration-300 ">
                        <?= htmlspecialchars($record['note']) ?>
                    </p>
                </a>
                <?php endforeach; ?>
            </div>
    </div>
</main>

<?php require basePath("views/partials/foot.php") ?>