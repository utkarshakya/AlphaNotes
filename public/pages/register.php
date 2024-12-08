<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In To Alpha Notes</title>
    <!-- Font And Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../../style/output.css"/>
</head>

<body>
    <?php include_once "../views/header.php"; ?>
    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <!-- IMAGE SECTION -->
            <section class="relative flex h items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="side-image" src="" class="absolute inset-0 h-full w-full object-cover opacity-60"
                    id="side-image" />

                <!-- WELCOME SECTION ON LARGE SCREENS -->
                <div class="hidden lg:relative lg:block lg:p-12">
                    <a class="inline-block text-white" href="../index.php">
                        <span class="sr-only">Home</span>
                        <img src="../../assets/logos/alpha.svg" alt="alpha" width="50px" style="filter: invert(1)" />
                    </a>

                    <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
                        Welcome to Alpha Notes
                    </h2>

                    <p class="mt-4 leading-relaxed text-white/90">
                        A Note Making Place For All Generations Including Alpha
                        Generation.
                    </p>
                </div>
            </section>
            <!-- MAIN SECTION -->
            <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">
                    <!-- WELCOME SECTION ON SMALL SCREENS -->
                    <div class="relative -mt-16 block lg:hidden">
                        <a class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20"
                            href="../../index.php">
                            <span class="sr-only">Home</span>
                            <img src="../vitals/alpha.svg" alt="alpha" width="50px" />
                        </a>
                        <h1 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                            Welcome to Alpha Notes
                        </h1>
                        <p class="mt-4 leading-relaxed text-gray-500">
                            A Note Making Place For All Generations Including Alpha
                            Generation.
                        </p>
                    </div>
                    <!-- FORM SECTION -->
                    <form action="#" class="mt-8 grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="FirstName" class="inline-block text-sm font-medium text-gray-700 cursor-pointer">
                                First Name
                            </label>
                            <input type="text" id="FirstName" name="first_name"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="LastName" class="inline-block text-sm font-medium text-gray-700 cursor-pointer">
                                Last Name
                            </label>
                            <input type="text" id="LastName" name="last_name"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>
                        <div class="col-span-6">
                            <label for="Email" class="inline-block text-sm font-medium text-gray-700 cursor-pointer">
                                Email
                            </label>
                            <input type="email" id="Email" name="email"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>
                        <!-- PASSWORD FIELD -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="password" class="inline-block text-sm font-medium text-gray-700 cursor-pointer">
                                Password
                            </label>
                            <!-- INPUT -->
                            <div class="relative mt-1">
                                <input type="password" id="password" name="password"
                                    class="w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                <!-- EYE SVG FOR PASSWORD VISIBILITY -->
                                <!-- <span class="absolute inset-y-0 end-0 grid place-content-center px-4" id="eye-span">
                                    CLOSE EYE (VIEW OFF)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                                    color="#000000" fill="none" id="close-eye" class="cursor-pointer">
                                    <path d="M22 8C22 8 18 14 12 14C6 14 2 8 2 8" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M15 13.5L16.5 16" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M20 11L22 13" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M2 13L4 11" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M9 13.5L7.5 16" stroke="currentColor" stroke-width="1.5"
                                           stroke-linecap="round" stroke-linejoin="round" />
                                   </svg>
                                   OPEN EYE (VIEW ON)
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                                       color="#000000" fill="none" id="open-eye" class="hidden">
                                       <path
                                           d="M21.544 11.045C21.848 11.4713 22 11.6845 22 12C22 12.3155 21.848 12.5287 21.544 12.955C20.1779 14.8706 16.6892 19 12 19C7.31078 19 3.8221 14.8706 2.45604 12.955C2.15201 12.5287 2 12.3155 2 12C2 11.6845 2.15201 11.4713 2.45604 11.045C3.8221 9.12944 7.31078 5 12 5C16.6892 5 20.1779 9.12944 21.544 11.045Z"
                                           stroke="currentColor" stroke-width="1.5" />
                                       <path
                                           d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z"
                                           stroke="currentColor" stroke-width="1.5" />
                                   </svg>
                               </span> -->
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation" class="inline-block text-sm font-medium text-gray-700 cursor-pointer">
                                Password Confirmation
                            </label>
                            <input type="password" id="PasswordConfirmation" name="password_confirmation"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm relative" />
                        </div>
                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">
                                Create an account
                            </button>
                            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                                Already have an account?
                                <a href="./login.php" class="text-gray-700 underline">Log in</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
    <?php include '../views/footer.php'; ?>
</body>


<script>
    // GET RANDOM IMAGE
    let image = document.getElementById("side-image");
    let num = Math.floor(Math.random() * 3 + 1);
    image.setAttribute("src", `../../assets/images/write${num}.jpg`);

    // CONTROL EYE SVG AND PASSWORD VISIBILITY
    // let closeEye = document.getElementById("close-eye");
    // let openEye = document.getElementById("open-eye");
    // let passwordField = document.getElementById("password");
    // let show = false;
    // closeEye.addEventListener("click", (e) => {
    //     closeEye.setAttribute("class", "hidden");
    //     openEye.setAttribute("class", "block cursor-pointer");
    //     openEye.addEventListener("click", (e) => {
    //         openEye.setAttribute("class", "hidden");
    //         closeEye.setAttribute("class", "block cursor-pointer");
    //     })
    // })
</script>

</html>