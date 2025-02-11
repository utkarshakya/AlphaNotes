<?php require basePath("views/partials/head.php") ?>
<?php require basePath("views/partials/nav.php") ?>
<?php require basePath("views/partials/banner.php") ?>

<main class="w-screen h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl flex gap-5 px-5 py-10">
        <form action="/notes/update" method="post">
            <label for="note"></label>
            <textarea id="note" rows="10" class="w-full resize-none border-2 border-gray-500 rounded-md p-5 bg-gray-50"><?= htmlspecialchars($result['note']) ?></textarea>
            <input type="hidden" name="_method" value="patch">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <button type="button" class="w-fit px-5 py-3 bg-indigo-500 hover:bg-indigo-600 cursor-pointer rounded-xl text-white font-semibold">Save Changes</button>
        </form>
        <form action="/notes/destroy" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <button type="submit" class="w-fit px-5 py-3 bg-red-500 hover:bg-red-600 cursor-pointer rounded-xl text-white font-semibold">Delete Note</button>
        </form>
    </div>
    </div>

</main>

<?php require basePath("views/partials/foot.php") ?>