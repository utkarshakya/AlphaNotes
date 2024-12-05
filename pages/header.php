<header class="sticky top-0 bg-white z-50">
  <nav class="flex items-center justify-between p-4 lg:px-12">
    <!-- Logo -->
    <div>
      <a href="../index.php">
        <img class="h-8 w-auto" src="../vitals/alpha.svg" alt="Alpha Notes">
      </a>
    </div>

    <!-- Links for larger screens -->
    <div class="hidden lg:flex gap-x-6">
      <a href="../index.php" class="text-sm font-semibold text-gray-900">Home</a>
      <a href="#" class="text-sm font-semibold text-gray-900">Contribute</a>
      <a href="#" class="text-sm font-semibold text-gray-900">About</a>
      <a href="./login.php" class="text-sm font-semibold text-gray-900">Log in</a>
    </div>

    <!-- Hamburger menu for smaller screens -->
    <button type="button" class="lg:hidden" id="menuToggle">
      <span class="sr-only">Toggle menu</span>
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </nav>

  <!-- Mobile menu -->
  <div class="hidden lg:hidden" id="mobileMenu">
    <a href="../index.php" class="block px-4 py-2 text-gray-900">Home</a>
    <a href="#" class="block px-4 py-2 text-gray-900">Contribute</a>
    <a href="#" class="block px-4 py-2 text-gray-900">About</a>
    <a href="./login.php" class="block px-4 py-2 text-gray-900">Log in</a>
  </div>
</header>

<script>
  // Toggle mobile menu visibility
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>