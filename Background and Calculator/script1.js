const colorButtons = document.querySelectorAll('.color-button');
const reloadButton = document.getElementById('reloadButton');

function changeBackgroundColor(color) {
    document.body.style.backgroundColor = color;
}

colorButtons.forEach(button => {
    button.addEventListener('click', () => {
        const color = button.getAttribute('data-color');
        changeBackgroundColor(color);
    });
});

reloadButton.addEventListener('click', () => {
    document.body.style.backgroundColor = '#f0f0f0';
});
