


const calculatorForm = $('#calculator-form');
const firstNumberInput = $('#first-number-input');
const secondNumberInput = $('#second-number-input');

const floatRegex = /^[0-9.]*$/;

secondNumberInput.on('input', function (e) {

    const value = e.target.value;

    if (!floatRegex.test(value)) {
        $(this).val(value.substring(0, value.length - 1));
    }
});

firstNumberInput.on('input', function (e) {
    const value = e.target.value;

    if (!floatRegex.test(value)) {
        $(this).val(value.substring(0, value.length - 1));
    }
});
calculatorForm.on('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const firstNumber = parseFloat(formData.get('firstNumber'));
    const secondNumber = parseFloat(formData.get('secondNumber'));
    const operation = formData.get('operation');
    store.dispatch(actions.calculate(operation, firstNumber, secondNumber));
});

store.subscribe(() => {
    const { success, error, result, firstNumber, secondNumber, operation } = store.getState();
    const resultElement = $('#result');
    if (error) {
        resultElement.empty().append(
            `
            <span class="font-bold text-red-500">
            An error occurred while calculating: ${error}
            </span>`
        );
        return;
    }

    if (success) {
        resultElement.empty().append(`
        <span>
        ${firstNumber} ${operation} ${secondNumber} = ${result}
        </span>`);
        return;
    }
});





