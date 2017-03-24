
<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-fd94db0301492db6017acc45f7901a99
');
$domain = "https://sandbox25ef3133ae834692842d6e87e1d9fba7.mailgun.org
";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <mailgun@YOUR_DOMAIN_NAME>',
    'to'      => 'Denham Rogers <denhamrogers10@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness! Take your survey here.'
));
?>