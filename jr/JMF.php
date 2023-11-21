<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php 
  include "jr/assets/styles/JRMStyles.php"; 
  include "jr/assets/styles/modal.php";
  include "jr/utils/checkmarkHelper.php";
  include "jr/utils/statusHelper.php";
  include "jr/utils/displayDataIfExists.php";
  include "jr/assets/php/saveEditOrder.php";
  include "jr/assets/php/displayAllOrders.php";

?>


<form action="" method="post">
  <div class='row jump-management'>
    <div id='selected-data' class='col-sm-3 mr-2 py-1 overflow-auto border border-dark' style='height: 700px;'></div>
    <div id='all-orders' class='col pb-1 overflow-auto border border-dark' style='height: 700px;'>

      <?php
        saveEditOrder();
        displayAllOrders();
      ?>
      

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
  include "jr/assets/scripts/modal.php";
  include "jr/assets/scripts/selectedDataManipulation.php";
?>

