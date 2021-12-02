<!DOCTYPE html>
<html lang="en">
  <?php $title="PetMart - Home"; include("templates/header.php") ?>
  <body class="flex flex-col w-full h-screen bg-apricot font-tisa-sans">
    <div class="flex-1 overflow-auto">
      <!-- Overlay -->
      <div id="overlay" class="invisible overlay"></div>
      <!-- Navigation Drawer -->
      <nav
        id="drawer"
        class="z-20 flex flex-col w-64 h-screen -translate-x-full drawer"
      ></nav>
      <!-- AppBar -->
      <nav
        id="appbar"
        class="sticky top-0 z-10 flex flex-col items-center justify-center w-full p-4 space-y-4 shadow-sm bg-melon"
      >
        <div class="container flex w-full">
          <!-- Hamburger Icon -->
          <button id="menu-btn" class="icon-btn">
            <img src="assets/icons/menu-icon.svg" class="w-10" />
          </button>
          <!-- Logo -->
          <h4 aria-label="logo" class="flex-1 text-3xl font-medium text-center">
            Pet<span class="font-bold"> Mart </span>
          </h4>
          <button id="cart-btn" class="icon-btn">
            <img src="assets/icons/shopping-bag-icon.svg" class="w-10" />
          </button>
        </div>
        <!-- Search Input -->
        <div
          class="container flex flex-col w-full space-y-4 md:space-y-0 md:space-x-4 md:flex-row"
        >
          <div
            class="flex items-center flex-1 p-2 transition duration-300 bg-white rounded-lg focus-within:ring-2 ring-old-lavender"
          >
            <img
              src="assets/icons/search-icon.svg"
              class="w-8 h-8 opacity-50"
            />
            <input
              class="w-full rounded-lg focus:outline-none"
              id="search-input"
              type="text"
              placeholder="Search"
            />
          </div>
          <button class="px-8 py-1 rounded-full bg-english-lavender">
            <span class="font-bold text-white"> Search </span>
          </button>
        </div>
      </nav>
      <!-- Content -->
      <div class="flex justify-center flex-1 p-4">
        <div class="container flex flex-col space-y-4">
          <!-- Hero -->
          <section
            id="hero "
            class="flex flex-col items-center justify-center p-4 px-16 space-y-4 rounded-lg shadow-md md:flex-row backdrop-blur bg-old-lavender md:space-y-0"
          >
            <h4 class="text-4xl font-bold text-center md:text-6xl md:text-left">
              An all in one shop for your little
              <span class="text-pastel-pink"> furries </span>
            </h4>
            <img src="assets/images/pets.png" class="object-contain sm:h-64" />
          </section>
          <!-- Products -->
          <section id="products" class="flex flex-col w-full space-y-4">
            <!-- Dog Food -->
            <div id="product-container" class="flex flex-col w-full space-y-2">
              <h4 class="text-2xl font-bold">Dog Food</h4>
              <hr class="border-2 rounded-full border-old-lavender" />
              <div
                id="dog-products"
                class="flex p-4 space-x-4 overflow-x-auto h-80"
              ></div>
            </div>
            <div id="product-container" class="flex flex-col w-full space-y-2">
              <h4 class="text-2xl font-bold">Cat Food</h4>
              <hr class="border-2 rounded-full border-old-lavender" />
              <div
                id="cat-products"
                class="flex p-4 space-x-4 overflow-x-auto h-80"
              ></div>
            </div>
          </section>
        </div>
      </div>

      <!-- Footer -->
      <footer class="flex items-center justify-center h-32 p-4 text-black">
        <p class="text-center">
          <span class="font-bold">PetMart</span> &copy; 2021
        </p>
      </footer>
    </div>
    <!-- Insert Scripts -->
    <?php include("templates/footer.php"); ?>
  </body> 
</html>
