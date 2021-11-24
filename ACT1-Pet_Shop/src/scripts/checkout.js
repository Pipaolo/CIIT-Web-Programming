const checkoutForm = $('#checkout-form');
const checkoutButton = $('#checkout-btn');
/**
   * Start handling the checkout form submission
   */
checkoutForm.on('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(this);
    /**
     * Start constructing the object to send
     */
    const data = {};

    formData.forEach((v, key) => {
        data[key] = v;
    });

    const jsonData = JSON.stringify(data, null, '\t');

    alert(`
    You have enterred the following details:
    ${jsonData}
    Thank you for trying out our pet shop!
    `);
}
);

