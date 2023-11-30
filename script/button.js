document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('contact-form');
    var button = form.querySelector('button');
    var emojiText = document.getElementById('emoji-text');

    form.addEventListener('input', function () {
        updateEmoji();
    });

    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            // Prevent form submission if it's not valid
            event.preventDefault();
        }
    });

    function updateEmoji() {
        var isValid = form.checkValidity();
        var emoji = isValid ? '' : '';
        var emojiTextContent = isValid ? 'You good now 😎' : 'Enter all your info bitch 🐱‍👤';

        button.dataset.emoji = emoji;
        emojiText.textContent = emojiTextContent;

        // Set font size based on validity
        var fontSize = isValid ? '1.5em' : '1.5em';
        button.style.fontSize = fontSize;
    }
});