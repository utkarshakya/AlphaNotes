<?php require baseAppPath("views/partials/head.php") ?>
<?php require baseAppPath("views/partials/nav.php") ?>

<main class="w-full max-w-7xl mx-auto bg-gray-50 flex flex-col items-center px-6 py-10 lg:py-20 lg:px-12">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create A New Account</h2>
    </div>

    <div class="mt-10 w-full mx-auto max-w-sm">
        <form class="space-y-6" action="/register" method="POST">
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-900">Full Name</label>
                <div class="mt-2">
                    <input type="text" name="name" id="name" autocomplete="name" required value="<?= $_SESSION['temp']['name'] ?? '' ?>" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <p class="text-red-500 text-xs p-1 font-semibold"><?= $_SESSION['errors']['name'] ?? '' ?></p>
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required value="<?= $_SESSION['temp']['email'] ?? '' ?>" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <p class="text-red-500 text-xs p-1 font-semibold"><?= $_SESSION['errors']['email'] ?? '' ?></p>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    <!-- <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div> -->
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required value="<?= $_SESSION['temp']['password'] ?? '' ?>" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <p class="text-red-500 text-xs p-1 font-semibold"><?= $_SESSION['errors']['password'] ?? '' ?></p>
                </div>
                <p class="text-red-500 text-xs p-1 font-semibold text-center"><?= $_SESSION['errors']['message'] ?? '' ?></p>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
            Already A Member?
            <a href="/session" class="font-semibold text-indigo-600 hover:text-indigo-500">Log In</a>
        </p>
    </div>
</main>

<script>

</script>

<?php require baseAppPath("views/partials/foot.php") ?>