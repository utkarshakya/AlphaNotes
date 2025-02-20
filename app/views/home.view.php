<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php
if ($_SESSION['loggedIn'] ?? false) {
    require "partials/banner.php";
}
?>

<main class="w-full max-w-7xl flex flex-col items-center gap-10 px-6 py-20 lg:py-40 bg-gray-50">
    <div class="flex flex-col items-center gap-4 text-center max-w-md md:max-w-2xl">
        <h1 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 md:text-7xl">Capture ideas, Organize thoughts, Elevate creativity.</h1>
        <p class="text-pretty text-md font-medium text-gray-500 md:text-xl/8">Alpha Notes - Save Your Notes And Access From Anywhere, Anytime.</p>
    </div>
    <div class="flex items-center justify-center gap-x-6">
        <?php if ($_SESSION['loggedIn'] ?? false): ?>
            <a href="/notes/create" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Create Note</a>
        <?php else: ?>
            <a href="/register" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Get started</a>
        <?php endif ?>
    </div>
</main>

<?php require "partials/foot.php"; ?>