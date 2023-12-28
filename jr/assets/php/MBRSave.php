<?php

//
function saveEditOrder() {
  if(isset($_POST['submit'])){

    if (isset($_POST['is-member']) && $_POST['is-member'] == 'on') {
        $memberStatus = 'Yes';
    } else {
        $memberStatus = 'No';
    }

    if (isset($_POST['is-deleted']) && $_POST['is-deleted'] == 'on') {
        $deletedStatus = 'Yes';
    } else {
        $deletedStatus = 'No';
    }

    if (isset($_POST['payment']) && $_POST['payment'] == 'on') {
        $payment = 'Yes';
    } else {
        $payment = 'No';
    }

    date_default_timezone_set('America/New_York');

    $current_user = wp_get_current_user();

    if (isset($_POST['is-deleted']) && $_POST['is-deleted'] == 'on') {
        $deletedStatus = 'Yes';
        $deletedBy = $current_user->user_login;

        if (isset($_POST['was-deleted']) && $_POST['was-deleted'] == 'Checked') {
            $deletedDate = $_POST['was-deleted-date'];
        } else {
            $deletedDate = date('Y-m-d H:i:s');
        }
    } else {
        $deletedStatus = 'No';
        $deletedDate = '';
        $deletedBy = '';
    }

	// TODO - Update form id

    $form_id = 89;

    // TODO - Update fields below for MBR form, from JRF
    $entry_meta = array(
        array(
            'name' => 'name-1',
            'value' => maybe_serialize( array(
                    'first-name' => $_POST['first-name'],
                    'last-name' => $_POST['last-name'],
                ),
            ),
        ),
        array(
            'name' => 'email-1',
            'value' => $_POST['email'],
        ),
        array(
            'name' => 'phone-1',
            'value' => $_POST['phone'],
        ),
        array(
            'name' => 'address-1',
              'value' => maybe_serialize( array(
                    'street_address' => $_POST['street-address'],
                    'address_line' => $_POST['suite'],
                    'city' => $_POST['city'],
                    'state' => $_POST['state'],
                    'zip' => $_POST['zip'],
                    'country' => $_POST['country'],
                ),
            ),
        ),
        array(
		            'name' => 'name-2',
		            'value' => maybe_serialize( array(
		                    'first-name' => $_POST['first-name'],
		                    'last-name' => $_POST['last-name'],
		                ),
		            ),
        ),
        array(
            'name' => 'email-2',
            'value' => $_POST['emergency-email'],
        ),
        array(
            'name' => 'phone-2',
            'value' => $_POST['emergency-phone'],
        ),
        array(
            'name' => 'text-1',
            'value' => $_POST['sponsor-name'],
        ),
        array(
            'name' => 'select-1',
            'value' => $_POST['shirt-size'],
        ),
        array(
            'name' => 'radio-3',
            'value' => $payment,
        ),
        array(
            'name' => 'radio-5',
            'value' => $memberStatus,
        ),
        array(
            'name' => 'radio-1',
            'value' => $deletedStatus,
        ),
        array(
            'name' => 'text-3',
            'value' => $current_user->user_login,
        ),
        array(
            'name' => 'date-1',
            'value' => date('Y-m-d H:i:s'),
        ),
        array(
            'name' => 'text-4',
            'value' => $deletedBy,
        ),
        array(
            'name' => 'date-2',
            'value' => $deletedDate,
        ),
    );

    Forminator_API::update_form_entry( $form_id, $_POST['entry-id'], $entry_meta );

  } else {

  }

}

?>