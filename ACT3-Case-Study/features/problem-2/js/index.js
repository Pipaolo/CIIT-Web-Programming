


const calculatorForm = $('#calculator-form');



calculatorForm.on('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const firstNumber = parseInt(formData.get('firstNumber'));
    const secondNumber = parseInt(formData.get('secondNumber'));
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





