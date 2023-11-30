document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("myModal");
    var closeBtn = document.querySelector(".close");

    function showModal(message) {
        document.getElementById("modal-message").textContent = message;
        modal.style.display = "block";
        modal.classList.add("bounce");

        setTimeout(function () {
            closeModal();
        }, 3000);
    }

    function closeModal() {
        modal.style.display = "none";
        modal.classList.remove("bounce");
    }

    closeBtn.onclick = closeModal;

    window.onclick = function (event) {
        if (event.target == modal) {
            closeModal();
        }
    };

    modal.addEventListener("animationend", function () {
        modal.classList.remove("bounce");
    });

    var contactForm = document.getElementById("contact-form");

    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();

        var formData = new FormData(contactForm);

        fetch(contactForm.action, {
            method: contactForm.method,
            body: formData,
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                showModal(data.response);
            })
            .catch(function (error) {
                console.error("Error submitting the form:", error);
            });
    });
});
