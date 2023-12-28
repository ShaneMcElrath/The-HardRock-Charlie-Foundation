<script>

var searchButton = document.getElementById("search-button");


// Add a click event listener to the button
searchButton.addEventListener("click", function() {

  var searchBarValue = document.getElementById("search-bar").value.toLowerCase();
  var additionalFiltersValue = document.getElementById("additionalFilters").value;
  var paperworkSubmittedCheckbox = document.getElementById("paperwork_submitted");
  var paymentSubmittedCheckbox = document.getElementById("payment_submitted");
  var isMemberCheckbox = document.getElementById("is_member");
  var searchOrderContainer = document.getElementById("searchOrderContainer");
  searchOrderContainer.innerHTML = '';

  var orderElements = document.querySelectorAll(".order");
  var customerNameElements = document.querySelectorAll(".customer-name");
  var customerEmailElements = document.querySelectorAll(".customer-email");
  var orderStatusElements = document.querySelectorAll(".order-status");

  var orderContainer = document.getElementById("orderContainer");
  orderContainer.style.display = "none";

  for (var i = 0; i < customerNameElements.length; i++) {
    var customerName = customerNameElements[i].textContent.toLowerCase();
    var customerEmail = customerEmailElements[i].textContent.toLowerCase();
    var order = orderElements[i];
    var customerStatus = orderStatusElements[i].textContent;
    

    if (
      (customerName.includes(searchBarValue) || customerEmail.includes(searchBarValue)) &&
      (additionalFiltersValue === "none" || additionalFiltersValue.replace(/_/g, " ") == customerStatus.toLowerCase().trim())
    ) {
      searchOrderContainer.appendChild(order.cloneNode(true));
    }
  }

});

</script>