
const telephoneForm = $('#telephone-form');
const telephoneInput = $("#character-input");
const telephoneResult = $("#result");
const regex = /[a-zA-Z]{1}/;



const telephoneNumbers = {
    2: 'abc',
    3: 'def',
    4: 'ghi',
    5: 'jkl',
    6: 'mno',
    7: 'pqrs',
    8: 'tuv',
    9: 'wxyz',
};


const renderResult = (telephoneNumber) => {

    if (!telephoneNumber) {
        return `<span>
        I cannot find an equivalent number for this character.
        </span>`;
    }

    return `
    <span>
    The equivalent number of the character is: ${telephoneNumber}.
    </span>`;
};

telephoneForm.on('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const value = formData.get('characterInput');
    const isValid = regex.test(value);
    if (!isValid) {
        alert("Please enter a valid letter.");
        return;
    }
    let telephoneNumber = 0;
    for (const key in telephoneNumbers) {
        const letters = String(telephoneNumbers[key]);
        if (letters.includes(value.toLowerCase())) {
            telephoneNumber = key;
            break;
        }
    }
    const result = renderResult(telephoneNumber);
    telephoneResult.empty();
    telephoneResult.append(result);

});

telephoneInput.on('input', function () {
    const value = $(this).val();

    if (value && value.length > 1) {
        telephoneInput.val(value[0]);
    }
});