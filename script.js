// 1. Scroll to Top Button
const scrollToTopButton = document.createElement("button");
scrollToTopButton.textContent = "↑";
scrollToTopButton.classList.add("scroll-to-top");
document.body.appendChild(scrollToTopButton);

scrollToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

// Show button when user scrolls down
window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
});

// 2. Smooth Scrolling for Navigation
const navLinks = document.querySelectorAll(".nav-menu a");
navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        const targetId = e.target.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);

        targetElement.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
});

// 3. Form Validation
document.querySelector(".contact-form").addEventListener("submit", (e) => {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    if (!name.value || !email.value || !message.value) {
        e.preventDefault(); // Prevent form submission
        alert("გთხოვთ შეავსოთ ყველა ველი.");
    } else if (!validateEmail(email.value)) {
        e.preventDefault();
        alert("გთხოვთ მიუთითოთ სწორად ელექტრონული ფოსტა.");
    }
});

// Email validation function
function validateEmail(email) {
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
}

