<?php
$cfg['debug'] = false;

// This is the email address where you will receive the notification message
$cfg['email_address'] = 'zamzamcaterers@yahoo.com';

$cfg['email_from'] = '';

// The recipients in CC and BCC will receive a copy of the data collected in the form
// Use commas to separate mutiple e-mail addresses (no spaces allowed)
// Example: youraddress1@yourdomain.com,youraddress2@yourdomain.com
$cfg['email_address_cc'] = '';

$cfg['email_address_bcc'] = '';

$cfg['emailsendingmethod'] = 'php';

$cfg['smtp_host'] = '';

$cfg['smtp_port'] = '';

$cfg['smtp_encryption'] = '';

$cfg['smtp_username'] = '';

$cfg['smtp_password'] = '';

$cfg['database_host'] = 'localhost';

$cfg['database_name'] = 'biz15in_india1';

$cfg['database_login'] = 'biz15in_india1';

$cfg['database_password'] = 'adminbiz15';

$cfg['database_table'] = 'apbd_inquiries';

$cfg['database_table_charset'] = 'utf8';

$cfg['database_table_fields'][] = array('element_id'=>'cfgen-element-4-6', 'table_field_id'=>'name','table_field_default_value'=>'');

$cfg['database_table_fields'][] = array('element_id'=>'cfgen-element-4-3', 'table_field_id'=>'email','table_field_default_value'=>'');

$cfg['database_table_fields'][] = array('element_id'=>'cfgen-element-4-8', 'table_field_id'=>'phone','table_field_default_value'=>'');

$cfg['database_table_fields'][] = array('preset_id'=>'form_id', 'table_field_id'=>'listing_id',);

$cfg['database_table_fields'][] = array('element_id'=>'cfgen-element-4-4', 'table_field_id'=>'description','table_field_default_value'=>'');

$cfg['database_table_fields'][] = array('preset_id'=>'datetime', 'table_field_id'=>'date_created',);

$cfg['database_table_fields'][] = array('preset_id'=>'form_name', 'table_field_id'=>'inquiry_type',);

$cfg['timezone'] = 'Asia/Kolkata';

$cfg['form_id'] = '117383';

$cfg['form_name'] = '1';

$cfg['form_validationmessage'] = '';

$cfg['form_errormessage_captcha'] = 'Incorrect captcha';

$cfg['form_errormessage_emptyfield'] = 'This field cannot be left blank';

$cfg['form_errormessage_invalidemailaddress'] = 'Invalid email address';

$cfg['form_errormessage_invalidurl'] = '';

$cfg['form_errormessage_terms'] = '';

$cfg['form_redirecturl'] = 'http://zamzamcaterers.com/thank-you-for-contacting.html';

$cfg['adminnotification_subject'] = 'Biz15 Enquiry for Your Business';

$cfg['adminnotification_hideemptyvalues'] = false;

$cfg['adminnotification_hideformurl'] = false;

$cfg['usernotification_inputid'] = 'cfgen-element-4-3';

$cfg['usernotification_activate'] = false;

$cfg['usernotification_insertformdata'] = false;

$cfg['usernotification_format'] = '';

$cfg['usernotification_subject'] = '';

$cfg['usernotification_message'] = '';

$cfg['usernotification_hideemptyvalues'] = false;

$cfg['formvalidation_required'] = array('cfgen-element-4-3','cfgen-element-4-8');

$cfg['formvalidation_email'] = array('cfgen-element-4-3');

?>