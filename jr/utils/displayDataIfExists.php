<?php 

  function checkIfExists($updateBy) {
    if (isset($updateBy)) {
      return $updateBy;
    }
    return 'Na';
  }

?>