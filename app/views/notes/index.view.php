<?php require baseAppPath("views/partials/head.php") ?>
<?php require baseAppPath("views/partials/nav.php") ?>
<?php require baseAppPath("views/partials/banner.php") ?>

<main class="w-full max-w-7xl flex flex-col gap-10 px-3 md:px-10 py-10 md:py-20 bg-gray-50">
    <div class="w-full flex flex-col gap-4">    
        <a href="/notes/create" class="w-fit">
            <button type="button" class="w-fit px-5 py-3 rounded-md cursor-pointer bg-indigo-500 text-white font-semibold hover:bg-indigo-600 ">Create New</button>
        </a>
        <hr class="w-full text-gray-500">
    </div>
    <div class="flex flex-wrap gap-5">
        <?php foreach ($result as $record): ?>
            <a href="/note?id=<?= $record['id'] ?>">
                <p class="border-2 rounded-md p-5 cursor-pointer font-semibold text-gray-700 hover:text-black hover:bg-gray-200 hover:shadow-2xl duration-300 ">
                    <?= htmlspecialchars($record['note']) ?>
                </p>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php require baseAppPath("views/partials/foot.php") ?>