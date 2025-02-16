<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php
if ($_SESSION['loggedIn'] ?? false) {
    require "partials/banner.php";
}
?>

<main class="min-h-[90vh] px-6 pt-10">
    <div class="mx-auto max-w-2xl py-32">
        <div class="text-center">
            <h1 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 md:text-7xl">Capture ideas, Organize thoughts, Elevate creativity.</h1>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Alpha Notes - Save Your Notes And Access From Anywhere, Anytime.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/register" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Get started</a>
            </div>
        </div>
    </div>
</main>

<?php require "partials/foot.php"; ?>