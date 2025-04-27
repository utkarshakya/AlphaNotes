<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php
if ($_SESSION['loggedIn'] ?? false) {
    require "partials/banner.php";
}
?>

<main class="min-h-screen w-full max-w-7xl mx-auto bg-gray-50 flex flex-col items-center px-6 py-10 lg:py-20 lg:px-12">
    <div class="w-full  mb-12">
        <h1 class="text-2xl lg:text-5xl font-bold text-gray-900">Contribute to Alpha Notes</h1>
        <p class="mt-4 text-base lg:text-lg text-gray-600">Thank you for your interest in contributing to Alpha Notes! Our project is open source, and we welcome contributions from developers, designers, writers, and enthusiasts who believe in making note-taking simpler and more accessible for everyone.</p>
        <a href="https://github.com/utkarshakya/AlphaNotes" target="_blank" class="inline-block text-xl lg:text-2xl hover:bg-gray-200 my-5 px-5 py-3 bg-gray-300 rounded-xl">Source Code</a>
    </div>

    <div class="w-full mb-12 ">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">Why Contribute?</h2>
        <ul class="mt-4 space-y-3 text-gray-700 text-base lg:text-lg">
            <li><span class="font-medium">Community-Driven:</span> Your contributions help shape the future of our application.</li>
            <li><span class="font-medium">Learn & Grow:</span> Collaborating on an open-source project is a great opportunity to gain real-world experience.</li>
            <li><span class="font-medium">Make an Impact:</span> Help us enhance features, fix bugs, improve documentation, or suggest new ideas that can benefit thousands of users worldwide.</li>
        </ul>
    </div>

    <div class="w-full mb-12 ">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">How to Get Started</h2>
        <ol class="mt-4 space-y-3 text-gray-700 text-base lg:text-lg list-decimal list-inside">
            <li><span class="font-medium">Explore Our Repository:</span> Visit our GitHub to explore the project and read the source code.</li>
            <li><span class="font-medium">Read Our Contribution Guidelines:</span> Learn how to set up your development environment and follow coding standards.</li>
            <li><span class="font-medium">Find an Issue or Start a Discussion:</span> Check out the Issues page or join our community chat.</li>
            <li><span class="font-medium">Make Your Changes:</span> Fork, clone, develop, test, and submit a pull request!</li>
            <li><span class="font-medium">Follow Our Code of Conduct:</span> Ensure a respectful and productive environment for everyone.</li>
        </ol>
    </div>

    <div class="w-full mb-12 ">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">What Can You Contribute?</h2>
        <ul class="mt-4 space-y-3 text-gray-700 text-base lg:text-lg">
            <li><span class="font-medium">Code Improvements:</span> Bug fixes, new features, and performance enhancements.</li>
            <li><span class="font-medium">Documentation:</span> Enhancing user guides, developer docs, and creating tutorials.</li>
            <li><span class="font-medium">Design & UX:</span> Suggestions for improving the user interface and experience.</li>
            <li><span class="font-medium">Testing:</span> Writing tests and improving testing infrastructure.</li>
            <li><span class="font-medium">Feedback:</span> Ideas and suggestions to make note-taking more effective.</li>
        </ul>
    </div>

    <div class="w-full ">
        <h2 class="text-xl lg:text-3xl font-semibold text-gray-800">Thank You!</h2>
        <p class="mt-4 text-base lg:text-lg text-gray-600">Every contribution, big or small, is valuable. Thank you for helping us make Alpha Notes a better platform for note-taking and organization. Happy coding!</p>
    </div>
</main>


<?php require("partials/foot.php") ?>