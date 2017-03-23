<?php 


function parseContacts($filename)
{
    $contacts = [];

    // Open stream
    $file = $filename;
    $handle = fopen($file, 'r');
    $contents = trim(fread($handle, filesize($file)));

    // Convert stream contents to an array
    $contactsArray = explode("\n", $contents);

    // Explode each array element into an associative array of name and number key/values
    foreach ($contactsArray as $key => $contact) {
        $tempArr = explode("|", $contact);
        $contacts[$key]["name"] = $tempArr[0];

        // Create properly formatted phone numbers with substr
        $contacts[$key]["number"] = substr($tempArr[1], 0, 3) . "-" . substr($tempArr[1], 3, 3) . "-" . substr($tempArr[1], 6);
    }

    // Close the stream
    fclose($handle);

    return $contacts;
}

// Displays all contacts to the command line
function showContacts($filename)
{

    // clear cache for updated results in real time

    clearstatcache();

    // Call parseContacts function to grab an array of all contacts in a given file

    $contacts = parseContacts($filename);

    // echo out template for a pretty display to the command line

    echo "-------------CONTACTS-----------\n\n";
    echo "Name             |  Phone Number" . PHP_EOL;
    echo "--------------------------------" . PHP_EOL;

    // Iterate over each contact and display with correct formatting

    foreach($contacts as $contactArray) {
        echo str_pad($contactArray['name'], 15) . "|" . "    " . $contactArray['number'] . PHP_EOL;
    }

}

// Adds a new contact to a specified file
function addNewContact($filename, $name, $number)
{


}

// Shows a specific contact based on a given string
function showContact($filename, $name)
{

    // Call parseContacts to get an updated array of contacts

    $contacts = parseContacts($filename);

    // Iterate over each contact and search for matching results

    foreach ($contacts as $contactsArray) {
        
        if (is_numeric(strpos($contactsArray['name'], trim($name))) !== false ) {
            echo "\n\n\n-------------CONTACTS-------------\n\n";
            echo "Name            |     Phone Number" . PHP_EOL;
            echo "----------------------------------" . PHP_EOL;
            echo str_pad($contactsArray['name'], 16) . "|" . "     " . $contactsArray['number'] . "\n\n\n";
        }
    }
}

// Test showContact()

echo "Please enter a name to search for: ";
$name = fgets(STDIN);
showContact("contacts.txt", $name);


// Deletes contacts that match a given string
function deleteContact($filename, $name)
{

}

// Displays menu options to the user and validates a correct selection
function mainMenuSelect()
{

}

// Contains conditional logic based on a user menu choice 
// Gets user input if needed, and calls specific functions passing in the input
function runApp($filename)
{

}

// runApp("contacts.txt");
