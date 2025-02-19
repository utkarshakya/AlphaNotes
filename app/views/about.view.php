<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php
if ($_SESSION['loggedIn'] ?? false) {
    require "partials/banner.php";
}
?>

<main class="w-full max-w-7xl mx-auto bg-gray-50 flex flex-col items-center px-6 py-10 lg:py-20 lg:px-12">
    <div class="w-full mb-12">
        <h1 class="text-2xl lg:text-5xl font-bold text-gray-900">Welcome to Alpha Notes!</h1>
        <p class="mx-auto mt-4 text-base lg:text-lg text-gray-600">We believe that every great idea deserves to be captured. Our mission is to empower you to organize your thoughts and inspirations.</p>
    </div>

    <!-- Our Story Section -->
    <div class="w-full mb-12">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">What We Offer</h2>
        <ul class="mt-4 space-y-3 text-gray-700 text-base lg:text-lg">
            <li><span class="font-medium">Simplicity:</span> A minimalist interface that keeps your focus on what truly matters—your ideas.</li>
            <li><span class="font-medium">Organization:</span> Powerful features that help you categorize, tag, and search your notes effortlessly.</li>
            <li><span class="font-medium">Accessibility:</span> Seamlessly access your notes anytime, anywhere—on your desktop, tablet, or smartphone.</li>
            <li><span class="font-medium">Security:</span> We prioritize your privacy, ensuring that your personal notes are safe and secure.</li>
        </ul>
    </div>

    <!-- Our Commitment Section -->
    <div class="w-full mb-12">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">Our Commitment</h2>
        <p class="mx-auto mt-4 text-gray-600 text-base lg:text-lg">At Alpha Notes, your experience is our top priority. We’re constantly listening to feedback and rolling out updates to ensure our platform evolves with your needs. Whether you’re a student, a professional, or a creative mind, our goal is to make note-taking simple, enjoyable, and productive.</p>
    </div>

    <!-- Join Our Community Section -->
    <div class="w-full">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">Join Our Community</h2>
        <p class="mx-auto mt-4 text-base lg:text-lg text-gray-600">Thank you for choosing Alpha Notes. We’re excited to be a part of your journey toward better organization and creativity. Connect with us on social media or drop us a line—let's make great ideas happen together!</p>
    </div>
</main>


<?php require("partials/foot.php") ?>