document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const popup = document.getElementById("successPopup");
    const closeBtn = document.getElementById("closePopup");

    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Prevent actual submission
        popup.classList.add("active");

        // Optional: reset form
        form.reset();
    });

    closeBtn.addEventListener("click", () => {
        popup.classList.remove("active");
    });

    // Close popup when clicking outside content
    popup.addEventListener("click", (e) => {
        if (e.target === popup) popup.classList.remove("active");
    });
});