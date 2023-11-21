<?php 
  include "jr/assets/styles/JRFStyles.php"; 
 // include "jr/routes/JRFSubmit.php";
 //if($_SERVER['REQUEST_URI'] == 	"/jr/mac.php")
 //{ 


if(isset($_POST['submit'])){
    //echo ($_POST['first-name']);
    // save to a new code entry form for jump registration
    // then redirect to thank you page
    //$entry_ids = array( 46, 45, 44, 43, 42, 41, 30, 29, 28, 27, 26, 25, 24, 23, 22 );
    $form_id = 89;
    $entry_meta = array(
        array(
            'name' => 'name-1',
            'value' => array(
                'first-name' => $_POST['first-name'],
                'last-name' => $_POST['last-name'],
            )

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
            'name' => 'select-2',
            'value' => $_POST['unit'],
        ),
        array(
            'name' => 'name-2',
            'value' => $_POST['spouse-partner-name'],
        ),
        array(
            'name' => 'email-2',
            'value' => $_POST['spouse-partner-email'],
        ),        
        array(
            'name' => 'phone-2',
            'value' => $_POST['spouse-partner-phone'],
        ),
        array(
            'name' => 'text-1',
            'value' => $_POST['sponsor-name'],
        ),
        array(
            'name' => 'email-3',
            'value' => $_POST['sponsor-email'],
        ),
        array(
            'name' => 'select-3',
            'value' => $_POST['shirt-size'],
        ),
        array(
            'name' => 'text-2',
            'value' => $_POST['hobbies-skills'],
        ),
    );

    Forminator_API::add_form_entry( $form_id, $entry_meta );

    ?>
        <script type="text/javascript"> 
        window.location.href="http://shpmy.rangermac.com/elementor-145/" 
        </script> 
    <?
    exit();

    //Forminator_API::update_form_entry( $form_id, $entry_id, $entry_meta );
    //Forminator_API::delete_entries( $form_id, $entry_ids );

  } else {
    // show something on screen
    // echo('show something');
  }
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <script type="javascript">
      function clientValidate()
      {
        // jquery validation;
      }
</script>
</head>
<body>
  <span name="datahere"></span>
    <div class="form-container">
        <form action="" method="post">

<!--             <div class="input-group">
                <label for="membership-type">Select <span class="red-asterisk">*</span></label>
                <select id="membership-type" name="membership-type">
                    <option>Select Membership Type</option>
                    <option>Renewal</option>
                    <option>New</option>
                </select>
            </div> -->

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
                <input type="text" placeholder="E.g. +1 912 555 5001" name="phone" pattern="^(\+\d{1,4} )?\d{3}[- ]?\d{3}[- ]?\d{4}$" title="Please enter a valid phone number Ex. 000-000-000 or +1 000-000-000" required>
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
                <label for="unit">Unit you were with<span class="red-asterisk">*</span></label>
                <select id="unit" name="unit" required>
                    <option value="" >Select Unit</option>
                    <option>1/75</option>
                    <option>2/75</option>
                    <option>3/75</option>
                    <option>STB</option>
                    <option>75th Regt</option>
                    <option>MIB</option>
                </select>
            </div>


            <div class="input-group">
                <label for="spouse-partner-name">Spouse/Partner Name</label>
                <input type="text" id="spouse-partner-name" placeholder="E.g. Jane Doe" name="spouse-partner-name">
            </div>

            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="spouse-partner-email">Spouse/Partner Email Address</label>
                    <input type="email" id="spouse-partner-email" placeholder="E.g. mary@doe.com" name="spouse-partner-email">
                </div>

                <div class="half-width">
                    <label for="spouse-partner-phone">Spouse/Partner Phone</label>
                    <input type="text" id="spouse-partner-phone" placeholder="E.g. 912 555 5001" name="spouse-partner-phone">
                </div>
            </div>
            <div class="input-group clearfix">
                <div class="half-width">
                    <label for="sponsor-name">Provide name of Ranger sponsor who can vouch for your service <span class="red-asterisk">*</span></label>
                    <input type="text" id="sponsor-name" placeholder="E.g. Jody" name="sponsor-name" required>
                </div>

                <div class="half-width">
                    <label for="sponsor-email">Sponsor Email Address <span class="red-asterisk">*</span></label>
                    <input type="email" id="sponsor-email" placeholder="E.g. anyone@doe.com" name="sponsor-email" required>
                </div>
            </div>




            <div class="input-group">
                <label for="shirt-size">T-Shirt Size <span class="red-asterisk">*</span></label>
                <select id="shirt-size" name="shirt-size" required>
                    <option value="">Select T-Shirt Size</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>XXXL</option>
                </select>
            </div>

            

            <div class="input-group">
                <label for="hobbies-skills">Hobbies or Skills</label>
                <input type="text" id="hobbies-skills" placeholder="Marksmanship" name="hobbies-skills">
            </div>

            <p>Dues 25$</p>


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
