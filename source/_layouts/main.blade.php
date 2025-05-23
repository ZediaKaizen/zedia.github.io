<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <title>@yield('title') Zedia Kaizen</title>
</head>

<body class="bg-gray-900 text-gray-100">
  @include('_partials.layout.navbar')
  <main class="pt-20 px-4">
    <div class="mx-auto max-w-7xl mb-3 rounded drop-shadow">
      @yield('content')
    </div>
  </main>
  <footer>
    @include('_partials.layout.footer')
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  <script>
    let prevScrollPos = window.pageYOffset;
    const navbar = document.getElementById("navbar");

    // Auto-hide Navbar on scroll
    window.onscroll = function () {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollPos > currentScrollPos) {
        navbar.style.transform = "translateY(0)";
      } else {
        navbar.style.transform = "translateY(-100%)";
      }
      prevScrollPos = currentScrollPos;
    };

    // Mobile Menu Toggle
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
</body>

</html>