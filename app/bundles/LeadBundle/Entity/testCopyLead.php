<?php
//
//// Include Composer's autoloader from the vendor directory
//require_once 'C:/Users/Asus/Desktop/Mautic 4.4.10/vendor/autoload.php';
//
//// Assuming Lead.php and CustomLead.php are in the current directory
//// If they are in a different directory, adjust the paths accordingly
//require_once 'Lead.php';
//require_once 'CustomLead.php';
//
//// Your existing code to create a Lead, copy it to a CustomLead, and test properties
//$lead = new Mautic\LeadBundle\Entity\Lead();
//$lead->setFirstname('John');
//$lead->setLastname('Doe');
//$lead->setEmail('johndoe@example.com');
//
//// Use the copyLead function to create a CustomLead from the Lead
//$customLead = Mautic\LeadBundle\Entity\CustomLead::copyLead($lead);
//
//// Print some properties to verify the copy
//echo "Original Lead Name: " . $lead->getFirstname() . " " . $lead->getLastname() . "\n";
//echo "Custom Lead Name: " . $customLead->getFirstname() . " " . $customLead->getLastname() . "\n";



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//// Include Composer's autoloader and required files
//require_once 'C:/Users/Asus/Desktop/Mautic 4.4.10/vendor/autoload.php';
//require_once 'Lead.php';
//require_once 'CustomLead.php';
//
//// Assuming your copyLead function is correctly implemented and available
//
//// Create a Lead, copy it to a CustomLead
//$lead = new Mautic\LeadBundle\Entity\Lead();
//$lead->setFirstname('John');
//$lead->setLastname('Doe');
//$lead->setEmail('johndoe@example.com');
//
//$customLead = Mautic\LeadBundle\Entity\CustomLead::copyLead($lead);
//
//// Test and print properties
//testAndPrintMismatchedProperties($lead, $customLead);
//
//function testAndPrintMismatchedProperties($lead, $customLead)
//{
//    $reflectionClassLead = new ReflectionClass($lead);
//    foreach ($reflectionClassLead->getProperties() as $property) {
//        $property->setAccessible(true);
//        $leadValue = $property->getValue($lead);
//
//        $reflectionPropertyCustomLead = new ReflectionProperty($customLead, $property->getName());
//        $reflectionPropertyCustomLead->setAccessible(true);
//        $customLeadValue = $reflectionPropertyCustomLead->getValue($customLead);
//
//        if ($leadValue !== $customLeadValue) {
//            echo "Property '" . $property->getName() . "' does not match. Lead: " . print_r($leadValue, true) . " CustomLead: " . print_r($customLeadValue, true) . "\n";
//        }
//    }
//}
//
//// Print some properties to verify the copy
//echo "Original Lead Name: " . $lead->getFirstname() . " " . $lead->getLastname() . "\n";
//echo "Custom Lead Name: " . $customLead->getFirstname() . " " . $customLead->getLastname() . "\n";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//// Include Composer's autoloader and required files
//require_once 'C:/Users/Asus/Desktop/Mautic 4.4.10/vendor/autoload.php';
//require_once 'Lead.php';
//require_once 'CustomLead.php';
//
//// Assuming your copyLead function is correctly implemented and available
//
//// Create a Lead, copy it to a CustomLead
//$lead = new Mautic\LeadBundle\Entity\Lead();
//$lead->setFirstname('John');
//$lead->setLastname('Doe');
//$lead->setEmail('johndoe@example.com');
//
//$customLead = Mautic\LeadBundle\Entity\CustomLead::copyLead($lead);
//
//// Test and print properties
//testAndPrintMismatchedProperties($lead, $customLead);
//
//function testAndPrintMismatchedProperties($lead, $customLead)
//{
//    $reflectionClassLead = new ReflectionClass($lead);
//    $matchCount = 0;
//    $mismatchCount = 0;
//    foreach ($reflectionClassLead->getProperties() as $index => $property) {
//        $property->setAccessible(true);
//        $leadValue = $property->getValue($lead);
//
//        $reflectionPropertyCustomLead = new ReflectionProperty($customLead, $property->getName());
//        $reflectionPropertyCustomLead->setAccessible(true);
//        $customLeadValue = $reflectionPropertyCustomLead->getValue($customLead);
//
//        if ($leadValue === $customLeadValue) {
//            echo ++$matchCount . ". Property '" . $property->getName() . "' matches.\n";
//        } else {
//            echo "Property '" . $property->getName() . "' does not match. Lead: " . print_r($leadValue, true) . " CustomLead: " . print_r($customLeadValue, true) . "\n";
//            ++$mismatchCount;
//        }
//    }
//
//    if ($matchCount > 0 && $mismatchCount === 0) {
//        echo "All properties match.\n";
//    } elseif ($mismatchCount > 0) {
//        echo "There are properties that do not match.\n";
//    }
//}
//
//// Print some properties to verify the copy
//echo "Original Lead Name: " . $lead->getFirstname() . " " . $lead->getLastname() . "\n";
//echo "Custom Lead Name: " . $customLead->getFirstname() . " " . $customLead->getLastname() . "\n";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Include Composer's autoloader and required files
require_once 'C:/Users/Asus/Desktop/Mautic 4.4.10/vendor/autoload.php';
require_once 'Lead.php';
require_once 'CustomLead.php';

// Assuming your copyLead function is correctly implemented and available

//// Create a Lead, copy it to a CustomLead
//$lead = new Mautic\LeadBundle\Entity\Lead();
//$lead->setFirstname('John');
//$lead->setLastname('Doe');
//$lead->setEmail('johndoe@example.com');


use Mautic\LeadBundle\Entity\Lead;
use Mautic\UserBundle\Entity\User;
use Mautic\CoreBundle\Entity\IpAddress;
use Mautic\StageBundle\Entity\Stage;

// Assuming User, IpAddress, and Stage entities are correctly set up in your project
$user = new User();
$user->setUsername('testUser');

$ipAddress = new IpAddress();
$ipAddress->setIpAddress('192.168.1.1');

$stage = new Stage();
$stage->setName('Initial Stage');

$lead = new Lead();

$lead->setId(111111);

$lead->setTitle('Mr.');
$lead->setFirstname('John');
$lead->setLastname('Doe');
$lead->setCompany('Acme Inc.');
$lead->setPosition('Developer');
$lead->setEmail('johndoe@example.com');
$lead->setPhone('1234567890');
$lead->setMobile('0987654321');
$lead->setAddress1('123 Main St');
$lead->setAddress2('Suite 100');
$lead->setCity('Anytown');
$lead->setState('Anystate');
$lead->setZipcode('12345');
$lead->setTimezone('America/New_York');
$lead->setCountry('US');
$lead->setOwner($user);
$lead->addIpAddress($ipAddress);
$lead->setStage($stage);
$lead->setPoints(100);




// Continue setting properties for the $lead instance
$lead->setLastActive(new \DateTime('-1 day'));
$lead->setInternal(['key' => 'value']); // Assuming 'internal' expects an array
$lead->setColor('blue');
$lead->setNewlyCreated(true);
$lead->setDateIdentified(new \DateTime('-2 days'));
$lead->setPreferredProfileImage('custom');

// For collections like tags, doNotContact, etc., you would typically add to them rather than set them directly
// Example for tags (assuming Tag entity is set up correctly and you have it ready)
 $tag = new \Mautic\LeadBundle\Entity\Tag();
 $tag->setTag('ExampleTag');
 $lead->addTag($tag);

// Similarly, you would add IP addresses, notes, and other entities that are part of collections in the Lead entity
// Example for adding a second IP address

//Note that both ip addresses are matching
$secondIpAddress = new IpAddress();
$secondIpAddress->setIpAddress('10.0.0.1');
$lead->addIpAddress($secondIpAddress);

// Assuming you have a method to add frequency rules if your application involves communication preferences
 $frequencyRule = new \Mautic\LeadBundle\Entity\FrequencyRule();
 $frequencyRule->setChannel('email');
 $frequencyRule->setFrequencyNumber(1);
 $frequencyRule->setFrequencyTime('DAY');
 $lead->addFrequencyRule($frequencyRule);



$customLead = Mautic\LeadBundle\Entity\CustomLead::copyLead($lead);

// Test and print properties
testAndPrintMismatchedProperties($lead, $customLead);

function testAndPrintMismatchedProperties($lead, $customLead)
{
    $reflectionClassLead = new ReflectionClass($lead);
    $matchCount = 0;
    $mismatchCount = 0;
    foreach ($reflectionClassLead->getProperties() as $property) {
        $property->setAccessible(true);
        $leadValue = $property->getValue($lead);

        $reflectionPropertyCustomLead = new ReflectionProperty($customLead, $property->getName());
        $reflectionPropertyCustomLead->setAccessible(true);
        $customLeadValue = $reflectionPropertyCustomLead->getValue($customLead);

        if ($leadValue === $customLeadValue) {
            echo ++$matchCount . ". Lead '" . $property->getName() . "' {" . print_r($leadValue, true) . "} is matching CustomLead '" . $property->getName() . "' {" . print_r($customLeadValue, true) . "}.\n";
        } else {
            echo "Property '" . $property->getName() . "' does not match. Lead: " . print_r($leadValue, true) . " CustomLead: " . print_r($customLeadValue, true) . "\n";
            ++$mismatchCount;
        }
    }

    if ($matchCount > 0 && $mismatchCount === 0) {
        echo "All properties match.\n";
    } elseif ($mismatchCount > 0) {
        echo "There are properties that do not match.\n";
    }
}

// Print some properties to verify the copy
echo "Original Lead Name: " . $lead->getFirstname() . " " . $lead->getLastname() . "\n";
echo "Custom Lead Name: " . $customLead->getFirstname() . " " . $customLead->getLastname() . "\n";
