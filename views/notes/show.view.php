<?php require("views/partials/head.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

<main class="w-screen h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl flex flex-col gap-5 px-5 py-10">
        <textarea id="note" rows="10" class="w-full resize-none border-2 border-gray-500 rounded-md p-5 bg-gray-50"><?= htmlspecialchars($result['note']) ?></textarea>
        <button type="button" class="w-fit px-5 py-3 bg-indigo-500 hover:bg-indigo-600 cursor-pointer rounded-xl text-white font-semibold">Save Changes</button>
    </div>
</main>

<?php require("views/partials/foot.php") ?>