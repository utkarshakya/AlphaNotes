<?php require baseAppPath("views/partials/head.php") ?>
<?php require baseAppPath("views/partials/nav.php") ?>
<?php require baseAppPath("views/partials/banner.php") ?>

<main class="w-full max-w-7xl flex flex-col items-center gap-10 px-6 py-10 lg:py-20 bg-gray-50">
    <form action="/notes" method="post" class="w-full max-w-5xl flex flex-col gap-5">
        <div class="relative">
            <label for="note"></label>
            <textarea required autofocus id="note" name="note" rows="10" maxlength="2500" placeholder="What's on your mind, write it up..." class="w-full border-2 border-gray-500 md:text-xl focus:outline-none p-10 bg-white"><?= $_SESSION['temp']['note'] ?? "" ?></textarea>
            <span id="show-remaining-characters" class="absolute border-2 rounded-br-lg top-0 left-0 px-2 py-1 bg-white text-xs text-gray-500 font-semibold">0/2500</span>
            <p class="text-sm text-red-600 px-3 font-semibold"><?= $_SESSION['errors']['message'] ?? '' ?></p>
        </div>
        <button type="submit" class="w-fit px-5 py-3 bg-indigo-500 hover:bg-indigo-600 rounded-md text-white">Save</button>
    </form>
</main>

<script>
    loadOnNotesPage()
</script>

<?php require baseAppPath("views/partials/foot.php") ?>