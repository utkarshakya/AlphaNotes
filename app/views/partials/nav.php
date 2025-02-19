<nav class="w-full max-w-7xl">
    <div class="px-4 sm:px-6 lg:px-8 py-3">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8 dark:invert" src="/assets/icons/alpha.svg" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="<?= isURL("/") ? 'bg-gray-300 dark:bg-gray-900' : 'text-gray-700 hover:text-black hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <a href="/about" class="<?= isURL("/about") ? 'bg-gray-300 dark:bg-gray-900' : 'text-gray-700 hover:text-black hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="/contribute" class="<?= isURL("/contribute") ? 'bg-gray-300 dark:bg-gray-900' : 'text-gray-700 hover:text-black hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contribute</a>
                        <?php

                        if ($_SESSION['loggedIn'] ?? false): ?>
                            <a href="/notes" class="<?= isURL("/notes") ? 'bg-gray-300 dark:bg-gray-900' : 'text-gray-700 hover:text-black hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">

                    <!-- Profile -->
                    <div class="relative ml-3">
                        <div>
                            <?php if ($_SESSION['loggedIn'] ?? false): ?>
                                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </button>
                            <?php else: ?>
                                <a href="/session" class="dark:text-gray-200 text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md py-2 px-3">Log In</a>
                            <?php endif; ?>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden transition ease-out duration-100 transform opacity-0 scale-95 hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:outline-hidden" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:outline-hidden" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:outline-hidden" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>

                    <?php if ($_SESSION['loggedIn'] ?? false): ?>
                        <div class="mx-3">
                            <form action="/session" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="text-gray-200 text-sm font-semibold hover:bg-gray-700 rounded-md py-2 px-3">Logout</button>
                            </form>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div id="hamburger" class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>

                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="h-[0px] overflow-hidden" id="mobile-menu">
        <div class="flex justify-between px-2 py-3">
            <div class="flex gap-3">
                <a href="/" class="<?= isURL("/") ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md  px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                <a href="/about" class="<?= isURL("/about") ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                <a href="/contribute" class="<?= isURL("/contribute") ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contribute</a>
                <?php if ($_SESSION['loggedIn'] ?? false): ?>
                    <a href="/notes" class="<?= isURL("/notes") ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                <?php endif ?>
            </div>
            <?php if ($_SESSION['loggedIn'] ?? false): ?>
                <form action="/session" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Logout</button>
                </form>
            <?php else: ?>
                <a href="/session">
                    <button type="submit" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Login</button>
                </a>
            <?php endif ?>
        </div>
        <?php if ($_SESSION["loggedIn"] ?? false): ?>
            <div class="border-t border-gray-700 pt-4 pb-3">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base/5 font-medium text-white">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1 px-2">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>

                </div>
            </div>
        <?php endif ?>
    </div>
</nav>

<script>
    navMenu()
</script>