<?php
include_once './bases.php';
define('STYLE', BASE_DIRECTORY . 'style/output.css');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Notes</title>
    <!-- Font And Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo STYLE ?>" />
</head>

<body>
    <?php include_once './public/views/header.php'; ?>
    <main class="px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 md:text-7xl">Capture
                    ideas,
                    Organize thoughts, Elevate creativity.</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Alpha Notes - Save
                    Your Notes And
                    Access From Anywhere, Anytime.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="./public/pages/register.php"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                </div>
            </div>
        </div>
    </main>
    <?php include_once './public/views/footer.php'; ?>
</body>

</html>