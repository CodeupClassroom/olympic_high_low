<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);
    fclose($handle);

    $listOfContacts = explode("\n", $contents);

    foreach ($listOfContacts as $key => $contact) {
    	$tempArray = explode("|", $contact);

    	$contacts[$key]["name"] = $tempArray[0];

    	$phone = substr($tempArray[1], 0, 3) . '-' . substr($tempArray[1], 3, 3) . '-' . substr($tempArray[1], 6);
    	
    	$contacts[$key]["number"] = $phone;
    }


    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
