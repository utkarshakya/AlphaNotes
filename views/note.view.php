<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main class="w-screen h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl px-5 py-10">
        <div class="relative">
            <label for="note"></label>
            <textarea id="note" rows="10" class="w-full resize-none border-2 border-gray-500 rounded-md p-5"><?= $result['note'] ?></textarea>
            <!-- <span id="showCharactersUsed" class="absolute bottom-3 right-3 text-gray-500">/200</span> -->
        </div>
        <button type="button" class="w-fit px-5 py-3 bg-indigo-500 hover:bg-indigo-600 cursor-pointer rounded-xl text-white font-semibold">Save Changes</button>
    </div>
</main>

<?php require("partials/foot.php") ?>