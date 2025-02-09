<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main class="w-screen h-screen flex flex-col items-center">
    <div class="w-full max-w-7xl flex flex-wrap gap-2 justify-center px-5 py-10">
        <?php foreach ($result as $record): ?>
            <div class="w-full sm:w-[300px] h-[150px] sm:h-[200px] border-2 rounded-xs shadow-xl hover:shadow-none p-5 hover:bg-gray-300 cursor-pointer duration-300 text-ellipsis text-sm md:text-base">
                <span class="text-gray-600 text-ellipsis">
                    <?= $record['note'] ?>
                </span>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require("partials/foot.php") ?>
<!-- <form action="" method="post">
        <textarea placeholder="Write a note...." class="w-full h-[320px] border-2 rounded-xl border-gray-800 focus:outline-none p-5 resize-none"></textarea>
        <button type="submit"  class="w-full max-w-fit bg-indigo-600 text-white px-5 py-3 rounded-xl cursor-pointer hover:bg-indigo-500">Add Note</button>
    </form> -->