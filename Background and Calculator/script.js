const addButton = document.getElementById('addButton');
const subButton = document.getElementById('subButton');
const mulButton = document.getElementById('mulButton');
const divButton = document.getElementById('divButton');
const resultField = document.getElementById('result');

function performOperation(operation) {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);

    let result;
    switch (operation) {
        case 'add':
            result = num1 + num2;
            break;
        case 'subtract':
            result = num1 - num2;
            break;
        case 'multiply':
            result = num1 * num2;
            break;
        case 'divide':
            if (num2 !== 0) {
                result = num1 / num2;
            } else {
                result = 'Cannot divide by zero';
            }
            break;
        default:
            result = 'Invalid operation';
    }

    resultField.value = result;
}

addButton.addEventListener('click', () => performOperation('add'));
subButton.addEventListener('click', () => performOperation('subtract'));
mulButton.addEventListener('click', () => performOperation('multiply'));
divButton.addEventListener('click', () => performOperation('divide'));
