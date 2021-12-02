

const numberInput = $('#number-input');
const resultsContent = $('#results-content');

/**
 * Checks if a number is divisble by 2
 * @param {number} num 
 * @returns {boolean}
 */
const isDivisibleBy2 = (num) => {
    const lastDigit = num.toString().slice(-1);
    return lastDigit % 2 === 0;
};
/**
 * Checks if a number is divisble by 3
 * @param {number} num 
 * @returns {boolean}
 */
const isDivisibleBy3 = (num) => {
    const sum = num.toString().split('').reduce((prev, curr) => parseInt(prev) + parseInt(curr));
    return sum % 3 === 0;
};

/**
 * Checks if a number is divisble by 5
 * @param {number} num 
 * @returns {boolean}
 */
const isDivisibleBy5 = (num) => {
    const lastDigit = num.toString().slice(-1);
    return lastDigit === '0' || lastDigit === '5';
};

numberInput.on('input', function () {
    const rawValue = String($(this).val());

    /**
     * Start checking if the length of the input is greater
     * than 4. If it is, then we will remove the last digit
     */
    let updatedValue = rawValue;
    if (rawValue.length > 4) {
        updatedValue = rawValue.slice(0, rawValue.length - 1);
        $(this).val(updatedValue);
        return;
    }
    const parsedValue = updatedValue ? parseInt(updatedValue) : 0;
    if (!parsedValue) {
        resultsContent.empty();
        return;
    }

    const divisibleBy2 = isDivisibleBy2(parsedValue);
    const divisibleBy3 = isDivisibleBy3(parsedValue);
    const divisibleBy5 = isDivisibleBy5(parsedValue);

    /**
     * Start rendering the results
     */
    resultsContent.empty();
    resultsContent.append(`
    <span>The number: <b>${parsedValue}</b> is</span>
    <span>Divisible by 2: <b>${divisibleBy2}</b></span>
    <span>Divisible by 3: <b>${divisibleBy3}</b></span>
    <span>Divisible by 5: <b>${divisibleBy5}</b></span>
    `);

});