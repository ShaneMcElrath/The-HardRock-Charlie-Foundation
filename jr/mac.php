<?php

$entry_meta = array(
        array(
          'name' => 'name-1',
          'value' => array(
              'first-name' => 'first-name',
              'last-name' => 'last-name',
          ),

      ),
      array(
          'name' => 'email-1',
          'value' => 'email',
      ),
      array(
          'name' => 'phone-1',
          'value' => 'phone',
      ),
      array(
          'name' => 'address-1',
          'value' => array(
              'street_address' => 'street-address',
              'address_line' => 'suite',
              'city' => 'city',
              'state' => 'state',
              'zip' => 'zip',
              'country' => 'country',
          ),
      ),
      array(
          'name' => 'text-1',
          'value' => 'emergency-name',
      ),
      array(
          'name' => 'email-2',
          'value' => 'emergency-email',
      ),        
      array(
          'name' => 'phone-2',
          'value' => 'emergency-phone',
      ),
      array(
          'name' => 'text-2',
          'value' => 'emergency-relationship',
      ),
      array(
          'name' => 'textarea-1',
          'value' => 'comment',
      ),        
      array(
          'name' => 'select-2',
          'value' => 'activity',
      ),
      array(
          'name' => 'select-1',
          'value' => 'shirt-size',
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
          'value' => 'No',
      ),
      array(
          'name' => 'radio-1',
          'value' => 'No',
      ),
  );

  Forminator_API::update_form_entry(99, 91, $entry_meta );

  ?>



