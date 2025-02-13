<?php require basePath("views/partials/head.php") ?>
<?php require basePath("views/partials/nav.php") ?>
<?php require basePath("views/partials/banner.php") ?>

<main class="w-screen h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl px-5 py-10 relative">
        <form action="/notes" method="post" class="flex flex-col gap-5">
            <label for="note"></label>
            <div class="relative">
                <textarea id="note" name="note" rows="10" maxlength="2500" class="w-full border-2 focus:outline-none border-gray-500 md:text-xl p-10 bg-white"><?= htmlspecialchars($result['note']) ?></textarea>
                <input type="hidden" name="_method" value="update">
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <span id="show-remaining-characters" class="absolute border rounded-br-xl top-0 left-0 px-2 py-1 bg-white text-xs text-gray-500 font-semibold"><?= strlen($result['note']) . "/2500" ?></span>
                <p class="text-sm text-red-600 px-3 font-semibold"><?= !empty($error) ? $error["message"] : '' ?></p>
            </div>
            <button type="submit" class="w-fit px-5 py-3 bg-indigo-500 hover:bg-indigo-600 rounded-md text-white font-semibold">Save Edits</button>
        </form>
        <form action="/notes" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <button type="submit" class="absolute right-5 bottom-10 w-fit px-5 py-3 bg-red-500 hover:bg-red-600 rounded-md text-white font-semibold">Delete Note</button>
        </form>
    </div>
    </div>

</main>

<?php require basePath("views/partials/foot.php") ?>