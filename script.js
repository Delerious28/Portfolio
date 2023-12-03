document.addEventListener("DOMContentLoaded", function () {
    var textBoxes = document.querySelectorAll('.program-text-box');

    // Hide all text boxes on page load
    textBoxes.forEach(function (textBox) {
        textBox.style.display = 'none';
    });
});

function showTextBox(program) {
    var textBoxes = document.querySelectorAll('.program-text-box');

    // Hide all text boxes
    textBoxes.forEach(function (textBox) {
        textBox.style.display = 'none';
    });

    // Show the selected text box
    var selectedTextBox = document.getElementById(program + '-box');
    if (selectedTextBox) {
        selectedTextBox.style.display = 'block';
    }
}
