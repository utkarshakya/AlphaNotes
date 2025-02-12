<?php require basePath("views/partials/head.php") ?>
<?php require basePath("views/partials/nav.php") ?>
<?php require basePath("views/partials/banner.php") ?>

<main class="w-screen min-h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl flex flex-col gap-5 px-5 py-10">
        <form action="/notes" method="post" class="flex flex-col gap-10">
            <div>
                <label for="note"></label>
                <textarea required id="note" name="note" rows="5" placeholder="What's on your mind, write it up..." class="w-full border-2 border-gray-500 rounded-md p-5 bg-white"><?= (key_exists('error', $message) && $_SERVER["REQUEST_METHOD"] === "POST") ? $_POST['note'] : '' ?></textarea>
                <p class="text-sm <?= key_exists('error', $message) ? 'text-red-600' : 'text-green-600' ?> px-3 font-semibold"><?= $_SERVER["REQUEST_METHOD"] === "POST" ? (key_exists('error', $message) ? $message['error'] : $message['success']) : '' ?></p>
            </div>
            <div class="flex justify-end gap-5">
                <button type="submit" class="w-fit px-3 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-md text-white">Save Note</button>
                <button type="reset" class="w-fit px-3 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-md text-white">Reset</button>
                <!-- <button type="reset" class="font-semibold">Cancel</button> -->
            </div>
        </form>
    </div>
</main>

<?php require basePath("views/partials/foot.php") ?>