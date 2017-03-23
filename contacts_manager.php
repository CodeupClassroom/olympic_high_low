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


function showContacts($filename)
{
    clearstatcache(); // clears out cached version of the file
    $contacts = parseContacts($filename);

    echo "------------CONTACTS------------\n\n";
    echo "Name           |    Phone Number" . PHP_EOL;
    echo "--------------------------------\e[36m" . PHP_EOL;
    foreach($contacts as $contactArray) {


        echo str_pad($contactArray['name'], 15) . "|" . "    " . $contactArray['number'] . PHP_EOL;
    }
    echo "\e[39m";
}


function addNewContact($filename, $name, $number)
{
    $file = $filename;
    $handle = fopen($file, 'a');

    $entry = trim($name) . "|" . trim($number);

    fwrite($handle, PHP_EOL . $entry);

    echo "\nContact added successfully.\n";

    fclose($handle);
}


function showContact($filename, $name)
{

    $contactsArray = parseContacts($filename);

    foreach ($contactsArray as $contact) {
        if (is_numeric(strpos($contact['name'], $name)) !== false) {
            echo "\n\n\n------------CONTACTS------------\n\n";
            echo "Name           |    Phone Number" . PHP_EOL;
            echo "--------------------------------" . PHP_EOL;
            echo str_pad($contact['name'], 15) . "|" . "    " . $contact['number'] . "\n\n\n";
        } 
    }

}












function deleteContact($filename, $name)
{
    $contactsArray = parseContacts($filename);

    foreach ($contactsArray as $contact) {
        if (is_numeric(strpos($contact['name'], $name)) !== false) {
            $contactFound = true;
            break;
        }
    }

    if ($contactFound == true) {
        // Truncate the file and rewrite all entries except entry to delete
        $handle = fopen($filename, 'w');

        foreach ($contactsArray as $contact) {
            if (is_numeric(strpos($contact['name'], $name)) == false) {

                $plainNumber = substr($contact['number'], 0, 3) . substr($contact['number'], 4, 3) . substr($contact['number'], 8);
                
                fwrite($handle, PHP_EOL . $contact['name'] . "|" . $plainNumber);
            }
        }

        fclose($handle);

        echo "\n\e[31mCONTACT DELETED!\e[39m\n\n\n";
        
    } else {
        echo "No contact found by that name.\n";
    }

    showContacts($filename);

}


function mainMenuSelect()
{
    $selection = 0;

    while (!is_numeric($selection) || $selection < 1 || $selection > 5) {

        echo "\n\n1) View contacts" . PHP_EOL;
        echo "2) Add contact" . PHP_EOL;
        echo "3) Search contact by name" . PHP_EOL;
        echo "4) Delete contact" . PHP_EOL;
        echo "5) Exit" . PHP_EOL;
        echo "\nPlease enter a number to select an action: ";
        $selection = (int) fgets(STDIN);
        echo "\n\n";

    }

    return $selection;
    
}

































function runApp($filename)
{
    echo "\n\n================================\n";
    echo "       Contacts Manager App         " . PHP_EOL;
    echo "================================\n\n\n";

    $choice = 0;

    showContacts($filename);

    while ($choice != 5) {

        $choice = mainMenuSelect();
        $contactName = "";
        $contactNumber = "";

        switch ($choice) {
            case 1 : 
                showContacts($filename);
                break;
            case 2 :
                echo "Please enter a new contact name: ";
                $contactName = fgets(STDIN);
                echo "Please enter the new contact number: ";
                $contactNumber = fgets(STDIN);
                addNewContact($filename, $contactName, $contactNumber);
                break;
            case 3 : 
                echo "Please enter a contact name to view: ";
                $contactName = trim(fgets(STDIN));
                showContact($filename, $contactName);
                break;
            case 4 :
                echo "Please enter a contact name to delete: ";
                $contactName = trim(fgets(STDIN));
                deleteContact($filename, $contactName);
                break;
            case 5 :
                break;
        }

    }

    echo "GOODBYE!!\n\n";

}

runApp("contacts.txt");
