<?php

class ZohoHelperMethods
{
    public static function getDataFromCrm($url, $param)
    {      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        $result = curl_exec($ch);
        curl_close($ch);
        $subject = new SimpleXMLElement($result);
        
        return $subject;
    }
    
    public static function getVar($query = '')
    {
        return $_GET[$query] ? $_GET[$query] : false;
    }
    
    public static function postVar($query = '')
    {
        return $_POST[$query] ? $_POST[$query] : false;
    }
    
    public static function searchUserByEmail($email = '')
    {
        $url = 'https://crm.zoho.com/crm/private/xml/Contacts/searchRecords';
        $param = 'authtoken='.Constants::AUTHTOKEN.'&scope=crmapi&criteria=(Email:'.$email.')';
        
        return self::getDataFromCrm($url, $param);
    }
    
    public static function searchPotentialByEmail($email = '', $product_id = '')
    {
        $url = 'https://crm.zoho.com/crm/private/xml/Potentials/searchRecords';
        $param = 'authtoken='.Constants::AUTHTOKEN.'&scope=crmapi&criteria=((Email:'.$email.')AND(Stage:Новая)AND(Продукт_ID:'.$product_id.'))';
    
        return self::getDataFromCrm($url, $param);
    }
    
    public static function updateExistsContact($contact_id = '', $name = '', $mobile = '')
    {
        $xmlData = '<Contacts>
                    <row no="1">
                    <FL val="First Name">'.$name.'</FL>
                    <FL val="Last Name">-</FL>
                    <FL val="Phone">'.$mobile.'</FL>
                    </row>
                    </Contacts>';
        
        $url = 'https://crm.zoho.com/crm/private/xml/Contacts/updateRecords';
        $param = 'authtoken='.Constants::AUTHTOKEN.'&scope=crmapi&id='.$contact_id.'&newFormat=1&xmlData='.$xmlData;
        
        return self::getDataFromCrm($url, $param);
    }
    
    public static function createContact($name = '', $mobile = '', $email = '')
    {
        $xmlData = '<Contacts>
                    <row no="1">
                    <FL val="First Name">'.$name.'</FL>
                    <FL val="Last Name">-</FL>
                    <FL val="Phone">'.$mobile.'</FL>
                    <FL val="Email">'.$email.'</FL>
                    </row>
                    </Contacts>';
        
        $url = 'https://crm.zoho.com/crm/private/xml/Contacts/insertRecords';
        $param = 'authtoken='.Constants::AUTHTOKEN.'&scope=crmapi&newFormat=1&xmlData='.$xmlData;

        return self::getDataFromCrm($url, $param);
    }
    
    
    public static function createPotential($contact_id = '', $name = '', $product_name = '', $email = '', $mobile = '', $product_id = '', $google_id = '', $utm_campaign = '', $utm_content = '', $utmcsr = '', $utm_source = '', $utm_medium = '', $utm_term = '', $affiliate_id = '', $utmccn = '')
    {
        $xmlData = '<Potentials>
                    <row no="1">
                    <FL val="Potential Name">'.sprintf('%s - %s', $name, $product_name).'</FL>
                    <FL val="Stage">Новая</FL>
                    <FL val="CONTACTID">'.$contact_id.'</FL>
                    <FL val="Email">'.$email.'</FL>
                    <FL val="Телефон">'.$mobile.'</FL>
                    <FL val="Продукт_ID">'.$product_id.'</FL>
                    <FL val="Отправлять письмо при создании">true</FL>
                    <FL val="google_id">'.$google_id.'</FL>
                    <FL val="utm_campaign">'.$utm_campaign.'</FL>
                    <FL val="utm_content">'.$utm_content.'</FL>
                    <FL val="utmcsr">'.$utmcsr.'</FL>
                    <FL val="utm_source">'.$utm_source.'</FL>
                    <FL val="utm_medium">'.$utm_medium.'</FL>
                    <FL val="utm_term">'.$utm_term.'</FL>
                    <FL val="affiliate_id">'.$affiliate_id.'</FL>
                    <FL val="utmccn">'.$utmccn.'</FL>
                    </row>
                    </Potentials>';
        
        $url = 'https://crm.zoho.com/crm/private/xml/Potentials/insertRecords';
        $param = 'authtoken='.Constants::AUTHTOKEN.'&wfTrigger=true&scope=crmapi&newFormat=1&xmlData='.$xmlData;
  
        return self::getDataFromCrm($url, $param);
    }
    
      
    public static function updateExistsPotential($potential_id = '', $niche = '', $social = '', $impression = '', $helpful = '')
    {
        $xmlData = '<Potentials>
                    <row no="1">
                    <FL val="Facebook">'.$social.'</FL>
                    <FL val="Ниша">'.$niche.'</FL>
                    <FL val="Чем может быть полезен?">'.$helpful.'</FL>
                    <FL val="Ожидание от MeetUP">'.$impression.'</FL>
                    </row>
                    </Potentials>';
        
        $url = 'https://crm.zoho.com/crm/private/xml/Potentials/updateRecords';
        $param = 'authtoken='.Constants::AUTHTOKEN.'&wfTrigger=true&scope=crmapi&id='.$potential_id.'&newFormat=1&xmlData='.$xmlData;
        
        return self::getDataFromCrm($url, $param);
    }
}