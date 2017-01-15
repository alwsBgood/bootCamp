<?php 

require_once(dirname(__FILE__).'/autoload.php'); 

$google_id = $_POST['google_id'] ? $_POST['google_id'] : '';
$utm_campaign = $_POST['utm_campaign'] ? $_POST['utm_campaign'] : '';
$utm_content = $_POST['utm_content'] ? $_POST['utm_content'] : '';
$utm_source = $_POST['utm_source'] ? $_POST['utm_source'] : '';
$utm_medium = $_POST['utm_medium'] ? $_POST['utm_medium'] : '';
$utm_term = $_POST['utm_term'] ? $_POST['utm_term'] : '';

$affiliate_id = $_COOKIE['aff_id'] ? $_COOKIE['aff_id'] : '';
$cookie_utmz = $_COOKIE["__utmz_gtm"];

list($utmcsr, $utmccn, $utmcmd) = split('[|]', $cookie_utmz);
$utmcsr = split('[=]', $utmcsr);
$utmcsr = $utmcsr[1];
$utmccn = split('[=]', $utmccn);
$utmccn = $utmccn[1];

if (isset($_POST['registration'])) {
    $forms_data = $_POST['registration'];
    $email = $forms_data['entry.763954787'];
    $name = $forms_data['entry.1867721116'];
    $mobile = $forms_data['entry.1757140399'];
    $product_id = $forms_data['product_id'];
    $product_name = $forms_data['product_name'];


    $contact_id = ZohoHelperMethods::searchUserByEmail($email)->result->Contacts->row->FL[0];
    
    if(!$contact_id) {
        $contact_id = ZohoHelperMethods::createContact($name, $mobile, $email)->result->recorddetail->FL[0];
       
    } else {
        ZohoHelperMethods::updateExistsContact($contact_id, $name, $mobile);
    }
  
    $potential_id = ZohoHelperMethods::createPotential($contact_id, $name, $product_name, $email, $mobile, $product_id, $google_id, $utm_campaign, $utm_content, $utmcsr, $utm_source, $utm_medium, $utm_term, $affiliate_id, $utmccn)->result->recorddetail->FL[0];
  

    if ($contact_id && $potential_id){
        echo $potential_id;
        die();
    } 
} 

if (isset($_POST['anketa_full'])) {
    $forms_data = $_POST['anketa_full'];
    $email = $forms_data['entry.471383650'];
    $name = $forms_data['entry.2068489762'];
    $mobile = $forms_data['entry.1850659065'];
    $product_id = $forms_data['product_id'];
    $product_name = $forms_data['product_name'];
    $niche = $forms_data['entry.100988079']; 
    $social = $forms_data['entry.681227839'];
    $impression = $forms_data['entry.1758132824'];
    $helpful = $forms_data['entry.1444728758'];
    
    $contact_id = ZohoHelperMethods::searchUserByEmail($email)->result->Contacts->row->FL[0];
    
    if(!$contact_id) {
        $contact_id = ZohoHelperMethods::createContact($name, $mobile, $email)->result->recorddetail->FL[0];
       
    } else {
        ZohoHelperMethods::updateExistsContact($contact_id, $name, $mobile);
    }
  
    $potential_id = ZohoHelperMethods::searchPotentialByEmail($email, $product_id)->result->Potentials->row->FL[0];
    
    if (!$potential_id) {
         $potential_id = ZohoHelperMethods::createPotential($contact_id, $name, $product_name, $email, $mobile, $product_id)->result->recorddetail->FL[0];
  
        ZohoHelperMethods::updateExistsPotential($potential_id, $niche, $social, $impression, $helpful);
        
    } else {
        ZohoHelperMethods::updateExistsPotential($potential_id, $niche, $social, $impression, $helpful);
    }
   
}
    
if (isset($_POST['anketa']) && isset($_POST['potential_id'])) {
    $forms_data = $_POST['anketa'];
 
    ZohoHelperMethods::updateExistsPotential($_POST['potential_id'], $forms_data['niche'], $forms_data['social'], $forms_data['impression'], $forms_data['helpful']);    
} 

if (isset($_POST['bootcamp'])) {
    $bootcamp = $_POST['bootcamp'];
    $email = $bootcamp['entry.1502780938'];
    $name = $bootcamp['entry.648859501'];
    $mobile = $bootcamp['entry.1805884529'];
    $product_id = $bootcamp['product_id'];
    $product_name = $bootcamp['product_name'];

    $contact_id = ZohoHelperMethods::searchUserByEmail($email)->result->Contacts->row->FL[0];
    
    if(!$contact_id) {
        $contact_id = ZohoHelperMethods::createContact($name, $mobile, $email)->result->recorddetail->FL[0];
       
    } else {
        ZohoHelperMethods::updateExistsContact($contact_id, $name, $mobile);
    }
  
    $potential_id = ZohoHelperMethods::createPotential($contact_id, $name, $product_name, $email, $mobile, $product_id, $google_id, $utm_campaign, $utm_content, $utmcsr, $utm_source, $utm_medium, $utm_term, $affiliate_id, $utmccn)->result->recorddetail->FL[0];
    
}