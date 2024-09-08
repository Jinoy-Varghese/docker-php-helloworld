<?php
echo "Hello, World from Docker! <br>";
echo "Hello ECS! <br>";
for($i=1;$i<=5;$i++)
{
  echo $i."<br>";
}
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseException;
use Parse\ParseObject;

// Initializes with the <APPLICATION_ID>, <REST_KEY>, and <MASTER_KEY>
ParseClient::initialize( "qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic", "ui9JtZVsSkNqQmHUz1IezQovwz7s2GcdyXIVRMSk", "zNdLgqeDsRPkxmBsAcke5jFAnDYoC6LYV6N8uJrk" );
ParseClient::setServerURL('https://parseapi.back4app.com/classes/Indonesia_Cities_Database', '/');

$myCustomObject = new ParseObject("Indonesia_Cities_Database");

$myCustomObject->set("name", "rishi");
$myCustomObject->set("dem", 11);
$myCustomObject->set("population", 2222);

try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}
?>
