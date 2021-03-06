<!DOCTYPE html>
<html lang="en">
  <?php $title="PetMart - Cart"; include("templates/header.php") ?>
  <body class="flex flex-col w-full h-screen bg-apricot font-tisa-sans">
    <div class="flex-1 overflow-auto">  
      <!-- Overlay -->
      <div id="overlay" class="invisible overlay"></div>
      <!-- Navigation Drawer -->
      <nav id="drawer" class="w-64 -translate-x-full drawer"></nav>
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
          <div class="flex justify-center w-full">
            <a
              href="index.php"
              aria-label="logo"
              class="text-3xl font-medium text-center cursor-pointer"
            >
              Pet<span class="font-bold"> Mart </span>
            </a>
          </div>
        </div>
      </nav>
      <!-- Content -->
      <div class="flex justify-center flex-1 p-4">
        <div class="container flex flex-col space-y-2">
          <!-- Build Cart Items -->
          <div class="flex flex-col">
            <div class="cart-item-card">
              <button class="self-start rounded-full">
                <img src="assets/icons/close.svg" class="w-5 h-5" />
              </button>
              <img
                class="w-20 h-20"
                src="https://www.petwarehouse.ph/18981-home_default/discounted-royal-canin-veterinary-diet-urinary-so-dog-dry-food.jpg"
              />
              <div class="flex flex-col">
                <h6 class="text-lg font-bold">Sample Item Name</h6>
                <p class="text-sm">Sample Item Name</p>
                <caption class="font-bold">
                  P1000.00
                </caption>
              </div>
              <div class="flex-1"></div>
              <span class="self-center font-bold"> Quantity: 4 </span>
            </div>
          </div>
          <!-- Checkout Details -->
          <div class="grid grid-cols-2">
            <!-- Spacer -->
            <div></div>
            <div class="flex flex-col">
              <div class="flex">
                Total: <span class="font-bold">P1000.00</span>
              </div>
              <div class="flex">
                Total Items: <span class="font-bold">1</span>
              </div>
              <button
                id="checkout-btn"
                class="self-end w-1/2 px-4 py-2 rounded-full bg-english-lavender"
              >
                <span class="font-bold text-white">Checkout</span>
              </button>
            </div>
          </div>
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
    <script src="scripts/cart.js"></script>
  </body>
</html>
