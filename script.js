document.addEventListener("DOMContentLoaded", function () {

    const toggleButtons = document.querySelectorAll(".toggle-btn");

    toggleButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            const id = this.getAttribute("data-id");
            const statusCell = this.closest("tr").querySelector("td:nth-child(4)");

            fetch("toggle.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "id=" + encodeURIComponent(id)
            })
            .then(response => response.text())
            .then(() => {

                const currentStatus = statusCell.textContent.trim();

                if (currentStatus === "0") {
                    statusCell.textContent = "1";
                } else {
                    statusCell.textContent = "0";
                }

            })
            .catch(error => {
                console.error("Error:", error);
            });

        });

    });

});