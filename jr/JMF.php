<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
  include "jr/assets/styles/searchbar.php"; 
  include "jr/assets/styles/JRMStyles.php"; 
  include "jr/assets/styles/modal.php";
  include "jr/utils/checkmarkHelper.php";
  include "jr/utils/statusHelper.php";
  include "jr/utils/displayDataIfExists.php";
  include "jr/assets/php/saveEditOrder.php";
  include "jr/assets/php/displayAllOrders.php";
  

?>

<div class="filter-bar">
        <div class="checkbox-group">
            <input type="checkbox" id="paperwork_submitted" name="status" value="paperwork_submitted">
            <label for="paperwork_submitted">Paperwork</label>
        </div>
        <div class="checkbox-group">
            <input type="checkbox" id="payment_submitted" name="status" value="payment_submitted">
            <label for="payment_submitted">Payment</label>
        </div>
        <div class="checkbox-group">
            <input type="checkbox" id="is_member" name="status" value="is_member">
            <label for="is_member">Is Member</label>
        </div>

        <select class="dropdown" id="additionalFilters">
            <option value="none">More Filters</option>
            <option value="stand_by">Stand By</option>
            <option value="deleted">Deleted</option>
            <option value="approved">Approved</option>
        </select>

        <input type="text" id="search-bar" placeholder="Search...">
        <button type="button" id="search-button">Search</button>
    </div>


<form action="" method="post">
  <div class='row jump-management'>
    <div id='selected-data' class='col-sm-3 mr-2 py-1 overflow-auto border border-dark' style='height: 700px;'></div>
    <div id='all-orders' class='col pb-1 overflow-auto border border-dark' style='height: 700px;'>
      <div id='orderContainer'>

        <?php
          saveEditOrder();
          displayAllOrders();
        ?>

      </>
    </div>
    <div id='searchOrderContainer'>
    </div>
  
  </div>
</form>


<!-- The Modal -->
<div id='deleteModal' class='modal-stuff'>

  <!-- Modal content -->
  <div class='modal-content'>
    <p>Write a comment that explains why you are deleting.</p>
    <textarea row='5' class='non-resizable'></textarea>
    <button>Delete</button>
    <button class='cancel-delete'>Cancel</button>
  </div>

</div>

<div id='saveModal' class='modal-stuff'>

  <!-- Modal content -->
  <div class='modal-content'>
    <p>Are you sure you want to save these changes?</p>
    <button>Save</button>
    <button class='cancel-save'>Cancel</button>
  </div>

</div>

<?php
  
  include "jr/assets/scripts/searchbar.php";
  include "jr/assets/scripts/modal.php";
  include "jr/assets/scripts/selectedDataManipulation.php";
?>

