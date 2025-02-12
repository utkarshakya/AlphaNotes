<?php require basePath("views/partials/head.php") ?>
<?php require basePath("views/partials/nav.php") ?>
<?php require basePath("views/partials/banner.php") ?>

<main class="w-screen min-h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl flex flex-col gap-5 px-5 py-10">
        <form action="/notes" method="post" class="flex flex-col gap-10">
            <div>
                <label for="note"></label>
                <textarea required id="note" name="note" rows="10" placeholder="What's on your mind, write it up..." class="w-full border-2 border-gray-500 md:text-xl rounded-md p-5 bg-white"><?= $_POST['note'] ?? "" ?></textarea>
                <p class="text-sm text-red-600 px-3 font-semibold"><?= !empty($error) ? $error["message"] : '' ?></p>
            </div>

            <button type="submit" class="w-fit px-5 py-3 bg-indigo-500 hover:bg-indigo-600 rounded-md text-white">Create Note</button>

        </form>
    </div>
</main>

<?php require basePath("views/partials/foot.php") ?>
