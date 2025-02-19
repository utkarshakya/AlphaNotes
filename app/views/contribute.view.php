<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php
if ($_SESSION['loggedIn'] ?? false) {
    require "partials/banner.php";
}
?>

<main class="min-h-screen px-6 pt-14 lg:px-8">
Contribute to [Your Website Name]
Thank you for your interest in contributing to [Your Website Name]! Our project is open source, and we welcome contributions from developers, designers, writers, and enthusiasts who believe in making note-taking simpler and more accessible for everyone.

Why Contribute?
Community-Driven: We believe the best improvements come from diverse perspectives. Your contributions help shape the future of our application.
Learn & Grow: Collaborating on an open source project is a great opportunity to learn new skills, work with modern technologies, and gain real-world experience.
Make an Impact: Help us enhance features, fix bugs, improve documentation, or suggest new ideas that can benefit thousands of users worldwide.
How to Get Started
1. Explore Our Repository
Visit our GitHub repository to explore the project, read the source code, and get a sense of our current development.

2. Read Our Contribution Guidelines
Before diving in, please check out our Contribution Guidelines. These guidelines cover:

How to set up your development environment
Coding standards and best practices
Branching and commit message conventions
How to write and run tests
3. Find an Issue or Start a Discussion
Bug Reports & Feature Requests: Browse our Issues page for bugs or feature requests. If you have a new idea, feel free to open a discussion!
Good First Issues: We tag certain issues as "good first issues" to help newcomers find a starting point.
Community Chat: Join our Discord/Slack/Forum channel to discuss ideas, ask questions, or get help from the community.
4. Make Your Changes
Fork & Clone: Fork our repository and clone it to your local machine.
Develop & Test: Make your changes in a dedicated branch. Test thoroughly to ensure your changes work as expected.
Submit a Pull Request: Once your changes are ready, open a pull request. We’ll review your submission and provide feedback.
5. Follow Our Code of Conduct
We expect all contributors to follow our Code of Conduct. This ensures a welcoming, respectful, and productive environment for everyone involved.

What Can You Contribute?
Code Improvements: Bug fixes, new features, refactoring, and performance enhancements.
Documentation: Enhancing user guides, developer docs, or creating tutorials to help others get started.
Design & UX: Suggestions for improving the user interface and overall user experience.
Testing: Writing tests and improving our testing infrastructure.
Feedback: Ideas and suggestions on how to improve the project or make note-taking even more effective.
Thank You!
Every contribution, big or small, is valuable. We appreciate your help in making [Your Website Name] a better platform for note-taking and organization. If you have any questions or need support, don't hesitate to reach out through our community channels.

Happy coding and thank you for contributing!
</main>

<?php require("partials/foot.php") ?>