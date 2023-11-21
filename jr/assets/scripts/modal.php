<script>


// Get the modal
var deleteModal = document.getElementById("deleteModal");

// Get the <span> element that closes the modal
var cancelDelete = document.getElementsByClassName("cancel-delete")[0];

// When the user clicks on the button, open the modal
const deleteOrder = () => {
  deleteModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
cancelDelete.addEventListener('click', () => {
  deleteModal.style.display = "none";
});








// Get the modal
var saveModal = document.getElementById("saveModal");

// Get the <span> element that closes the modal
var cancelSave = document.getElementsByClassName("cancel-save")[0];

// When the user clicks on the button, open the modal
const saveOrder = () => {
  saveModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
cancelSave.addEventListener('click', () => {
  saveModal.style.display = "none";
});


</script>