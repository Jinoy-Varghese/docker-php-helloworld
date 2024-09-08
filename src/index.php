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
use Parse\ParseQuery;



// Initializes with the <APPLICATION_ID>, <REST_KEY>, and <MASTER_KEY>
ParseClient::initialize( "qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic", "ui9JtZVsSkNqQmHUz1IezQovwz7s2GcdyXIVRMSk", "zNdLgqeDsRPkxmBsAcke5jFAnDYoC6LYV6N8uJrk" );
ParseClient::setServerURL('https://parseapi.back4app.com', '/');

$myCustomObject = new ParseObject("testdb");

$myCustomObject->set("name", "rishi");
$myCustomObject->set("nick", "ubcbcs");

try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}


$query = new ParseQuery("testdb");
try {
  $myCustomObject = $query->get("PIzYOpcW2j");
  // The object was retrieved successfully.

  // To get attributes, you can use the "get" method, providing the attribute name:
  $myCustomKey1Value = $myCustomObject->get("name");
  echo $myCustomKey1Value;
} catch (ParseException $ex) {
  // The object was not retrieved successfully.
  // error is a ParseException with an error code and message.
}
?>
