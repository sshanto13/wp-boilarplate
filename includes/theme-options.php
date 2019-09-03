<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {

  $saved_settings = get_option( 'option_tree_settings', array() );
  

  $custom_settings = array(
    'sections'        => array(
      array(
          'id'        =>'logo',
         'title'      => 'Logo'
      ),
       array(
          'id'        =>'location',
         'title'      => 'Location'
      ),
      array(
          'id'        =>'footer-contact',
         'title'      => 'mobile'
      ),
          array(
          'id'        =>'email',
         'title'      => 'email'
      )
      
    ),
    'settings'        => array(
      array(
        'id'          => 'logo_uploader',
        'label'       => 'Upload Your Logo',
        'desc'        => 'Best size for logo is 296px width, 295px height',
        'type'        => 'upload',
        'section'     => 'logo'
      ), 
       array(
        'id'          => 'home_cover',
        'label'       => 'Home Cover Image',
        'desc'        => 'Home Cover Image best Size is 1900px and 700px',
        'type'        => 'upload',
        'section'     => 'logo'
      ), 
       array(
        'id'          => 'welcome_message',
        'label'       => 'Welcome message',
        'type'        => 'text',
        'section'     => 'logo'
      ), 
       array(
        'id'          => 'roof_text',
        'label'       => 'Roof Text',
        'desc'        => 'Roof Text will go here',
        'type'        => 'text',
        'section'     => 'logo'
      ), 
      array(
        'id'          => 'copy_right',
        'label'       => 'Copyright text',
         'desc'        => 'Copyright Text will go here',
        'type'        => 'text',
        'section'     => 'logo'
      ),
      array(
        'id'          => 'feder_drive',
        'label'       => 'feder-drive',
        'desc'        => 'Best size for logo is 296px width, 295px height',
        'type'        => 'upload',
        'section'     => 'logo'
      ),
      array(
        'id'          => 'copy_right_logo',
        'label'       => 'Copyright logo',
        'desc'        => 'Best size for logo is 50px width, 150px height',
        'type'        => 'upload',
        'section'     => 'logo'
      ),
    array(
        'id'          => 'tele_phone_img',
        'label'       => 'telephone image',
        'desc'        => 'Uppload here telephone image or to delete click the minus button',
        'type'        => 'upload',
        'section'     => 'telephone'
      ),
      
    array(
        'id'          => 'tele_phone_name',
        'label'       => 'telephone name',
        'desc'        => 'Enter Telephone Name here',
        'type'        => 'text',
        'section'     => 'telephone'
      ),
      
    array(
        'id'          => 'tele_phone_number',
        'label'       => 'telephone numer',
        'desc'        => 'enter telephone number here',
        'type'        => 'text',
        'section'     => 'telephone'
      ),
    array(
        'id'          => 'mobile_img',
        'label'       => 'mobile image',
        'desc'        => 'Uppload here mobile image or to delete click the minus button size is 50px',
        'type'        => 'upload',
        'section'     => 'mobile'
      ),
      
    array(
        'id'          => 'mobile_name',
        'label'       => 'mobile name',
        'desc'        => 'enter mobile name here',
        'type'        => 'text',
        'section'     => 'mobile'
      ),
    array(
        'id'          => 'mobile_number',
        'label'       => 'mobile numer',
        'desc'        => 'enter mobile number here',
        'type'        => 'text',
        'section'     => 'mobile'
      ),
       array(
        'id'          => 'email_img',
        'label'       => 'email image',
        'desc'        => 'Best size for logo is 50px width, 50px height',
        'type'        => 'upload',
        'section'     => 'email'
      ),
      
    array(
        'id'          => 'email_name',
        'label'       => 'email name',
        'desc'        => 'email name will go here',
        'type'        => 'text',
        'section'     => 'email'
      ),
    array(
        'id'          => 'email_number',
        'label'       => 'email number',
        'desc'        => 'email address will go here',
        'type'        => 'text',
        'section'     => 'email'
      )
      
    )
  );

  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
} 
 ?>