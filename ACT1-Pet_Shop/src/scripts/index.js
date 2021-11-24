const state = {
    isDrawerOpen: false
};


const drawerItems = [
    {
        name: 'Home',
        route: 'index.html',
    },
    {
        name: 'About Us',
        route: 'index.html',
    },
];


const menuButton = $('#menu-btn');
const cartButton = $('#cart-btn');

const navigationDrawer = $('#drawer');
const overlay = $("#overlay");

const dogProductsContainer = $('#dog-products');
const catProductsContainer = $('#cat-products');


function toggleNavigationDrawer() {
    const isDrawerOpen = state.isDrawerOpen;
    state.isDrawerOpen = !isDrawerOpen;
    navigationDrawer.toggleClass('-translate-x-full');
    overlay.toggleClass('invisible');
}

/**
 * Register the call back for the menu button
 */
menuButton.on('click', function () {
    toggleNavigationDrawer();
});

/**
 * Register the call back for the cart button
 */
cartButton.on('click', function () {
    window.location.href = "cart.html";
});



/**
 * Handle click on outside
 */
overlay.on('click', function () {
    toggleNavigationDrawer();
});



/**
 * This handles the rendering of new product cards
 */
function renderProductCard(index, product) {
    return `
    <div id="product-${index}" class="product-card flex-none">
        <div
        class="absolute inset-0 transition duration-300 bg-black opacity-0  hover:opacity-10"
    ></div>
        <img
        class="rounded-lg h-20"
        src="${product.imageUrl}"
    />
    <p class="product-card__title line-clamp-2 flex-1">
    ${product.name}
  </p>
  <span class="text-old-lavender flex-none"> ${product.price}</span>
    </div>
    `;
}

function renderNavigationDrawerItem(item) {
    return `
    <a
    href="${item.route}"
    class="py-4 font-bold text-center text-white transition duration-300  hover:bg-old-lavender bg-none"
  >
    ${item.name}
  </a>`;
}


/**
 * Start handling the on init method
 */
$(function () {


    for (let [index, route] of drawerItems.entries()) {
        navigationDrawer.append(renderNavigationDrawerItem(route));
    }


    for (let [index, product] of dogFoodProducts.entries()) {
        dogProductsContainer.append(renderProductCard(index, product));
    }
    for (let [index, product] of catFoodProducts.entries()) {
        catProductsContainer.append(renderProductCard(index, product));
    }
});