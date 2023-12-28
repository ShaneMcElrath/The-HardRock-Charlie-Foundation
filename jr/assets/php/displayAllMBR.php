<?php

  function displayAllOrders() {

	// TODO - Change form ID
    $form_id = 89;
    $entries = Forminator_API::get_entries($form_id);


    // Check if entries exist
    if (!empty($entries)) {

      // Loop through each entry
      foreach ($entries as $entry) {

        $entry_id = $entry->entry_id;
        $entry_created_date = $entry->date_created;

        $entry_is_deleted = isset($entry->meta_data['radio-1']['value']) ? $entry->meta_data['radio-1']['value'] : '';

        // TODO - Udate fields that are unique to MBR
        $entry_first_name = isset($entry->meta_data['name-1']['value']['first-name']) ? $entry->meta_data['name-1']['value']['first-name'] : '';
        $entry_last_name = isset($entry->meta_data['name-1']['value']['last-name']) ? $entry->meta_data['name-1']['value']['last-name'] : '';
        $entry_email = isset($entry->meta_data['email-1']['value']) ? $entry->meta_data['email-1']['value'] : '';
        $entry_phone = isset($entry->meta_data['phone-1']['value']) ? $entry->meta_data['phone-1']['value'] : '';

        $entry_street_address = isset($entry->meta_data['address-1']['value']['street_address']) ? $entry->meta_data['address-1']['value']['street_address'] : '';
        $entry_address_line = isset($entry->meta_data['address-1']['value']['address_line']) ? $entry->meta_data['address-1']['value']['address_line'] : '';
        $entry_city = isset($entry->meta_data['address-1']['value']['city']) ? $entry->meta_data['address-1']['value']['city'] : '';
        $entry_state = isset($entry->meta_data['address-1']['value']['state']) ? $entry->meta_data['address-1']['value']['state'] : '';
        $entry_zip = isset($entry->meta_data['address-1']['value']['zip']) ? $entry->meta_data['address-1']['value']['zip'] : '';
        $entry_country = isset($entry->meta_data['address-1']['value']['country']) ? $entry->meta_data['address-1']['value']['country'] : '';

        $entry_tshirt_size = isset($entry->meta_data['select-3']['value']) ? $entry->meta_data['select-3']['value'] : '';
        $entry_payment = isset($entry->meta_data['radio-3']['value']) ? $entry->meta_data['radio-3']['value'] : '';
        $entry_status = isset($entry->meta_data['radio-4']['value']) ? $entry->meta_data['radio-4']['value'] : '';
        $entry_is_member = isset($entry->meta_data['radio-5']['value']) ? $entry->meta_data['radio-5']['value'] : '';

		$entry_ice_name = isset($entry->meta_data['name-2']['value']['first-name']) ? $entry->meta_data['name-2']['value']['first-name'] : '';
        $entry_ice_email = isset($entry->meta_data['email-2']['value']) ? $entry->meta_data['email-2']['value'] : '';
        $entry_ice_phone = isset($entry->meta_data['phone-2']['value']) ? $entry->meta_data['phone-2']['value'] : '';

		$entry_sponsor_name = isset($entry->meta_data['text-1']['value']) ? $entry->meta_data['text-1']['value'] : '';
		$entry_sponsor_email = isset($entry->meta_data['email-3']['value']) ? $entry->meta_data['email-3']['value'] : '';

		$entry_hobby_skills = isset($entry->meta_data['text-2']['value']) ? $entry->meta_data['text-2']['value'] : '';


        if (isset($entry->meta_data['text-3']['value'])) {
          $entry_updated_by = $entry->meta_data['text-3']['value'];
        }
        else {
          $entry_updated_by = '';
        }

        if (isset($entry->meta_data['date-1']['value'])) {
          $entry_updated_date = $entry->meta_data['date-1']['value'];
        }
        else {
          $entry_updated_date = '';
        }

        if (isset($entry->meta_data['text-4']['value'])) {
          $entry_deleted_by = $entry->meta_data['text-4']['value'];
        }
        else {
          $entry_deleted_by = '';
        }

        if (isset($entry->meta_data['date-2']['value'])) {
          $entry_deleted_date = $entry->meta_data['date-2']['value'];
        }
        else {
          $entry_deleted_date = '';
        }

        if (isset($entry->meta_data['textarea-1']['value'])) {
          $entry_special_request = $entry->meta_data['textarea-1']['value'];
        } 
        else {
          $entry_special_request = '';
        }

		// TODO update fields below for only MBR form
        // Display entry data as needed
        echo "
          <div class='row m-2 pt-2 order'>
            <div class='col-xl-12'>
              <div class='row my-1'>
                <div class='col-sm-3'> ID: $entry_id </div>
                <div class='col-sm'> Name: $entry_first_name $entry_last_name </div>
                <div class='col-sm'> Email: $entry_email </div>
              </div>
              <div class='row my-1'>
                <div class='col-sm-3'> Confirmed Member: <input type='checkbox' name='myCheckbox' disabled " . checkIfChecked($entry_status) . "> </div>
                <div class='col-sm'> Payment: <input type='checkbox' name='myCheckbox' disabled " . checkIfChecked($entry_payment) . "> </div>
                <div>&nbsp;</div>
              </div>
              <div class='row my-1'>
                <div class='col-sm'>
                  <button type='button' class='more-info btn btn-primary'
                  data-id='$entry_id'
                  data-date-created='$entry_created_date'
                  data-first-name='$entry_first_name'
                  data-last-name='$entry_last_name'
                  data-email='$entry_email'
                  data-phone='$entry_phone'
                  data-street-address='$entry_street_address'
                  data-address-line='$entry_address_line'
                  data-city='$entry_city'
                  data-state='$entry_state'
                  data-zipe='$entry_zip'
                  data-country='$entry_country'
                  data-payment='" . checkIfChecked($entry_payment) . "'
                  data-status='$entry_status'
                  data-status-color='". displayStatusColor($entry_status) ."'
                  data-is-member='" . checkIfChecked($entry_is_member) . "'
                  data-ice-name='" . $entry_ice_name . "'
                  data-ice-email='" . $entry_ice_email . "'
                  data-ice-phone='" . $entry_ice_phone . "'
                  data-tshirt-size='" . $entry_tshirt_size . "'
                  data-is-deleted='" . checkIfChecked($entry_is_deleted) . "'
                  data-deleted-color='" . displayDeletedColor($entry_is_deleted) . "'
                  data-updated-by='" . $entry_updated_by . "'
                  data-updated-date='" . $entry_updated_date . "'
                  data-deleted-by='" . $entry_deleted_by . "'
                  data-deleted-date='" . $entry_deleted_date . "'
                  >Select</button>
                </div>
                <div class='col-sm'>
                </div>
              </div>
            </div>`
          </div>
        ";
        //echo "Entry Data:<pre>" . print_r($entry, true) . "</pre><br>";
      }
    }

  }
?>