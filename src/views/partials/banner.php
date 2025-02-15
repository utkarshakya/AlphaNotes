<?php 
$name = $_SESSION['user']['name'] ?? "Guest";
$name = explode(' ', $name)[0];
$greeting = ["Hello", "Hola", "Namaste", "Konnichiwa", "Ni hao"];
$index = rand(0,4);
?>
<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
        <h1 class="text-xl md:text-3xl font-bold tracking-tight text-gray-900"><?= "{$greeting[$index]}, {$name}" ?></h1>
    </div>
</header>