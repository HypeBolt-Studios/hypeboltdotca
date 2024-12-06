document.addEventListener("DOMContentLoaded", function () {
    var footerContainer = document.getElementById("footerContainer");

    if (footerContainer) {
        fetch("https://hypebolt.ca/footer.html")
            .then(response => response.text())
            .then(html => {
                footerContainer.innerHTML = html;

                // Update the current year
                var currentYearElement = document.getElementById("currentYear");
                if (currentYearElement) {
                    currentYearElement.textContent = new Date().getFullYear();
                }
            })
            .catch(error => console.error("Error fetching footer:", error));
    }
});
