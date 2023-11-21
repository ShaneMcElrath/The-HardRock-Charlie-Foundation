<?php 
 
 // include "jr/routes/JRFSubmit.php";
 //if($_SERVER['REQUEST_URI'] == 	"/jr/mac.php")
 //{ 


  if(isset($_POST['submit'])){

    $isMember = 'No';


    $user_form_id = 89;
    $users = Forminator_API::get_entries($user_form_id);

    
    // Check if entries exist
    if (!empty($users)) {
      
      // Loop through each entry
      foreach ($users as $user) {
        $user_first_name = isset($user->meta_data['name-1']['value']['first-name']) ? $user->meta_data['name-1']['value']['first-name'] : '';
        $user_last_name = isset($user->meta_data['name-1']['value']['last-name']) ? $user->meta_data['name-1']['value']['last-name'] : '';
        $user_email = isset($user->meta_data['email-1']['value']) ? $user->meta_data['email-1']['value'] : '';

        if (stripos($user_first_name, $_POST['first-name']) !== false && stripos($user_last_name, $_POST['last-name']) !== false && stripos($user_email, $_POST['email']) !== false) {
            //echo 'yo';
            $isMember = 'Yes';
            break;
        }

      }
    }








    //echo ($isMember);
    // save to a new code entry form for jump registration
    // then redirect to thank you page
    //$entry_ids = array( 46, 45, 44, 43, 42, 41, 30, 29, 28, 27, 26, 25, 24, 23, 22 );
    
    $form_id = 99;
    $entry_meta = array(
        array(
            'name' => 'name-1',
            'value' => array(
                    'first-name' => $_POST['first-name'],
                    'last-name' => $_POST['last-name'],
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
            'value' => array(
                    'street_address' => $_POST['street-address'],
                    'address_line' => $_POST['suite'],
                    'city' => $_POST['city'],
                    'state' => $_POST['state'],
                    'zip' => $_POST['zip'],
                    'country' => $_POST['country'],
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
            'value' => $_POST['special-request'],
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
            'value' => 'Stand By',
        ),
        array(
            'name' => 'radio-2',
            'value' => 'No',
        ),
        array(
            'name' => 'radio-3',
            'value' => 'No',
        ),
        array(
            'name' => 'radio-5',
            'value' => $isMember,
        ),
        array(
            'name' => 'radio-1',
            'value' => 'No',
        ),
        array(
            'name' => '_forminator_user_ip',
            'value' => '97.103.98.209',
        ),
    );

    Forminator_API::add_form_entry( $form_id, $entry_meta );



    ?>
        <script type="text/javascript"> 
        window.location.href="http://shpmy.rangermac.com/elementor-135/" 
        </script> 
    <?
    exit();

  } else {
    // show something on screen
    //echo('show something');
  }
  include "jr/assets/styles/JRFStyles.php"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" type="text/css" href="../jr/css/validation.css">

</head>
<body>
  <span name="datahere"></span>
    <div class="form-container">
        <form class="jump-registration" action="" method="post">
            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="first-name">First Name <span class="red-asterisk">*</span></label>
                    <input type="text" id="first-name" placeholder="E.g. John" name="first-name" required>
                </div>

                <div class="half-width">
                    <label for="last-name">Last Name <span class="red-asterisk">*</span></label>
                    <input type="text" id="last-name" placeholder="E.g. Doe" name="last-name" required>
                </div>
            </div>

            <div class="input-group">
                <label for="email">Email Address <span class="red-asterisk">*</span></label>
                <input type="email" id="email" placeholder="E.g. john@doe.com" name="email" required>
            </div>

            <div class="input-group">
                <label for="phone">Phone <span class="red-asterisk">*</span></label>
                <input type="text" placeholder="E.g. +1 912-555-5001" name="phone" pattern="^(\+\d{1,4} )?\d{3}[- ]?\d{3}[- ]?\d{4}$" title="Please enter a valid phone number Ex. 000-000-000 or +1 000-000-000" required>
            </div>

            <div class="input-group">
                <label for="street-address">Street Address <span class="red-asterisk">*</span></label>
                <input type="text" id="street-address" placeholder="E.g. 42 Wallaby Way" name="street-address" required>
            </div>

            <div class="input-group">
                <label for="suite">Apartment, Suite, etc</label>
                <input type="text" id="suite" placeholder="" name="suite">
            </div>

            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="E.g. Sydney" name="city">
                </div>

                <div class="half-width">
                    <label for="state">State/Province</label>
                    <input type="text" id="state" placeholder="E.g. New South Wales" name="state">
                </div>
            </div>

            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="zip">Zip / Postal Code</label>
                    <input type="text" id="zip" placeholder="E.g. 2000" name="zip"> 
                </div>

                <div class="half-width">
                    <label for="country">Country <span class="red-asterisk">*</span></label>
                    <select id="country-dropdown" name="country">
                        <option value="">Select a country</option>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <label for="emergency-name">Emergency Contact Name <span class="red-asterisk">*</span></label>
                <input type="text" id="emergency-name" placeholder="E.g. Jane Doe" name="emergency-name" required>
            </div>

            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="emergency-email">Emergency Contact Email Address <span class="red-asterisk">*</span></label>
                    <input type="email" id="emergency-email" placeholder="E.g. jane@doe.com" name="emergency-email" required>
                </div>

                <div class="half-width">
                    <label for="emergency-phone">Emergency Contact Phone <span class="red-asterisk">*</span></label>
                    <input type="text" id="emergency-phone" placeholder="E.g. +1 912-555-5001" name="emergency-phone" pattern="^(\+\d{1,4} )?\d{3}[- ]?\d{3}[- ]?\d{4}$" title="Please enter a valid phone number Ex. 000-000-000 or +1 000-000-000" required>
                </div>
            </div>

            <div class="input-group">
                <label for="emergency-relationship">Emergency Contact Relationship <span class="red-asterisk">*</span></label>
                <input type="text" id="emergency-relationship" placeholder="E.g. Sister" name="emergency-relationship" required>
            </div>

            <div class="input-group">
                <label for="special-request">Special-Request</label>
                <textarea id="special-request" placeholder="E.g. Jump with a specific group or other jumper" name="special-request"></textarea>
            </div>

            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="activity">What activities do you wish to attend <span class="red-asterisk">*</span></label>
                    <select id="activity" name="activity" required>
                        <option value="">Select Activities</option>
                        <option value="Jump and Summit - $500">Jump and Summit - $500</option>
                        <option value="Jump Only - $350">Jump Only - $350</option>
                        <option value="Summit Only - $150">Summit Only - $150</option>
                    </select>
                </div>

                <div class="half-width">
                    <label for="shirt-size">T-Shirt Size <span class="red-asterisk">*</span></label>
                    <select id="shirt-size" name="shirt-size" required>
                        <option value="">Select T-Shirt Size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <input type="submit" value="Submit" class="send-btn" name="submit">
            </div>
        </form>
    </div>
</body>
</html>







<?php 
  include "jr/assets/scripts/displayCountries.php"; 
  //phpinfo();
 // include "jr/assets/scripts/JRFSubmit.php";
?>
