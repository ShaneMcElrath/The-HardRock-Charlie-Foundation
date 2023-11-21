<?php 
  function displayStatusOrDeletedColor($status, $isDeleted) {
    //echo "Entry Data:<pre>" . print_r($option, true) . "</pre><br>";S
    if ($isDeleted == 'Yes') {
      return "bg-danger";
    } 
    elseif ($status == "Approved") {
      return "bg-success";
    }
    elseif ($status == "Stand By") {
      return "bg-warning";
    }
    return;
  }

  function displayStatusColor($status) {
    //echo "Entry Data:<pre>" . print_r($option, true) . "</pre><br>";S
    if ($status == "Approved") {
      return "bg-success";
    }
    else {
      return "bg-warning";
    }
  }

  function displayStatusOrDeleted($status, $isDeleted) {
    if($isDeleted == 'Yes') {
      return "Deleted";
    }
    else {
      return $status;
    }
  }

  function displayDeletedColor($isDeleted) {
    if ($isDeleted == 'Yes') {
      return "bg-danger";
    } 
    return;
  }

?>