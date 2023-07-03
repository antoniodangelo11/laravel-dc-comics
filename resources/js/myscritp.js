let btnDelete = document.querySelectorAll(".hard_delete");

btnDelete.forEach(function (btn) {
    btn.addEventListener("click", function () {
        if (confirm("Are you sure you want to delete the card?")) {
            console.log("you clicked delete");
        } else {
            console.log("deletion cancelled");
            event.preventDefault();
        }
    });
});