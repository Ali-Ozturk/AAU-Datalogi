// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++){
    btn[i].addEventListener("click", function () {
        modal.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
function displayNone() {
    this.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}