<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php
if ($_SESSION['loggedIn'] ?? false) {
    require "partials/banner.php";
}
?>

<main class="min-h-screen px-6 pt-14 lg:px-8">
    <h1>Welcome to Alpha Notes!</h1>


    At [Your Website Name], we believe that every great idea deserves to be captured. Our mission is to empower you to organize your thoughts, jot down your inspirations, and streamline your daily tasks—all in one easy-to-use platform.

    Our Story

    Founded in [Year], [Your Website Name] was born out of the need for a simple yet effective note-making tool. Frustrated with overly complex apps and cluttered interfaces, our team set out to create a space where ideas could flourish without distraction. Today, we are proud to offer a clean, intuitive experience designed to boost your productivity.

    What We Offer

    Simplicity: A minimalist interface that keeps your focus on what truly matters—your ideas.
    Organization: Powerful features that help you categorize, tag, and search your notes effortlessly.
    Accessibility: Seamlessly access your notes anytime, anywhere—on your desktop, tablet, or smartphone.
    Security: We prioritize your privacy, ensuring that your personal notes are safe and secure.
    Our Commitment

    At [Your Website Name], your experience is our top priority. We’re constantly listening to feedback and rolling out updates to ensure our platform evolves with your needs. Whether you’re a student, a professional, or a creative mind, our goal is to make note-taking simple, enjoyable, and productive.

    Join Our Community

    Thank you for choosing [Your Website Name]. We’re excited to be a part of your journey toward better organization and creativity. Connect with us on social media or drop us a line—let's make great ideas happen together!
</main>

<?php require("partials/foot.php") ?>