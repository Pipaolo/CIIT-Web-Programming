<!DOCTYPE html>
<html lang="en">
  <?php $title="PetMart - Checkout"; include("templates/header.php") ?>
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
        <div class="flex w-full">
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
        <div class="container flex flex-col space-y-4">
          <!-- Build Cart Items -->
          <h3 class="text-3xl font-bold">Checkout</h3>
          <!-- Build Form -->
          <form
            id="checkout-form"
            enctype="multipart/form-data"
            class="grid grid-cols-2 gap-4 p-4 bg-white rounded-lg shadow-md"
          >
            <h5 class="col-span-2 text-xl font-bold">Customer Information</h5>
            <div class="flex flex-col col-span-2 space-y-2 md:col-span-1">
              <label for="first-name">First Name</label>
              <input
                name="firstName"
                id="first-name"
                type="text"
                required
                class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
              />
            </div>
            <div class="flex flex-col col-span-2 space-y-2 md:col-span-1">
              <label for="last-name">Last Name</label>
              <input
                name="lastName"
                id="last-name"
                type="text"
                required
                class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
              />
            </div>
            <div class="flex flex-col col-span-2 space-y-2 md:col-span-1">
              <label for="mobile-number">Mobile Number</label>
              <input
                name="mobileNumber"
                id="mobile-number"
                type="text"
                required
                class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
              />
            </div>
            <div class="flex flex-col col-span-2 space-y-2 md:col-span-1">
              <label for="email">Email</label>
              <input
                name="email"
                id="email"
                type="email"
                required
                class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
              />
            </div>
            <div class="flex flex-col col-span-2 space-y-2">
              <label for="address">Address</label>
              <input
                name="address"
                id="address"
                type="text"
                required
                class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
              />
            </div>
            <!-- Address Form Group -->
            <div class="grid grid-cols-3 col-span-2 gap-4">
              <div class="flex flex-col col-span-3 space-y-2 md:col-span-1">
                <label for="province">Province</label>
                <input
                  name="province"
                  id="province"
                  type="text"
                  required
                  class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
                />
              </div>
              <div class="flex flex-col col-span-3 space-y-2 md:col-span-1">
                <label for="city">City</label>
                <input
                  name="city"
                  id="city"
                  type="text"
                  required
                  class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
                />
              </div>
              <div class="flex flex-col col-span-3 space-y-2 md:col-span-1">
                <label for="barangay">Barangay</label>
                <input
                  name="barangay"
                  id="barangay"
                  type="text"
                  required
                  class="p-2 transition duration-300 border rounded-lg outline-none border-old-lavender focus:ring ring-pastel-pink focus:border-pastel-pink"
                />
              </div>
            </div>
          </form>
          <!-- Checkout Information -->
          <div class="grid grid-cols-2 gap-4 p-4 bg-white rounded-lg shadow-md">
            <h5 class="text-xl font-bold">Checkout Information</h5>
            <div class="flex justify-between col-span-2">
              <span>Subtotal:</span>
              <span>P1000</span>
            </div>
            <div class="flex justify-between col-span-2">
              <span>Discount:</span>
              <span>P0.00</span>
            </div>
            <hr class="col-span-2 border-2 rounded-full border-old-lavender" />
            <div class="flex justify-between col-span-2">
              <span>Total:</span>
              <span>P1000</span>
            </div>
          </div>
          <button
            form="checkout-form"
            class="px-4 py-2 rounded-full bg-english-lavender"
          >
            <span class="font-bold text-white"> Submit </span>
          </button>
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
    <script src="scripts/checkout.js"></script>
    <?php include("templates/footer.php")?>
  </body>
</html>
