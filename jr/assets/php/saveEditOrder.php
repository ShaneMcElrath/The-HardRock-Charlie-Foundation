<?php 


function saveEditOrder() {
  if(isset($_POST['submit'])){

    //echo ($_POST['first-name']);
    // save to a new code entry form for jump registration
    // then redirect to thank you page
    //$entry_ids = array( 46, 45, 44, 43, 42, 41, 30, 29, 28, 27, 26, 25, 24, 23, 22 );
/*     echo ($_POST['entry-id']);
    echo ($_POST['first-name']);
    echo ($_POST['last-name']); */
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

    if (isset($_POST['paper-work']) && $_POST['paper-work'] == 'on') {
        $paperWorkStatus = 'Yes';
    } else {
        $paperWorkStatus = 'No';
    }

    if (isset($_POST['payment']) && $_POST['payment'] == 'on') {
        $payment = 'Yes';
    } else {
        $payment = 'No';
    }

    date_default_timezone_set('America/New_York');
    //echo($_POST['was-deleted']);

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


    

  
  
    $form_id = 99;
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
            'name' => 'text-1',
            'value' => $_POST['emergency-name'],
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
            'name' => 'text-2',
            'value' => $_POST['emergency-relationship'],
        ),
        array(
            'name' => 'textarea-1',
            'value' => $_POST['comment'],
        ),        
        array(
            'name' => 'select-2',
            'value' => $_POST['activity'],
        ),
        array(
            'name' => 'select-1',
            'value' => $_POST['shirt-size'],
        ),
        array(
            'name' => 'radio-4',
            'value' => $_POST['status'],
        ),
        array(
            'name' => 'radio-2',
            'value' => $paperWorkStatus,
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
  
    //echo "Entry Data:<pre>" . print_r($entry_meta, true) . "</pre><br>";
  
    //Forminator_API::add_form_entry( $form_id, $entry_meta );
  
    Forminator_API::update_form_entry( $form_id, $_POST['entry-id'], $entry_meta );
    //echo('show something else');
    //header("refresh: 3");
    //Forminator_API::delete_entries( $form_id, $entry_ids );
    //phpinfo();
  } else {
    // show something on screen
    //echo('show something');
  }
  
  //phpinfo();
}


?>