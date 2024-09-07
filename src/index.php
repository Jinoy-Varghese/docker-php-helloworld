<?php
require 'vendor/autoload.php';
echo "Hello, World from Docker! <br>";
echo "Hello ECS! <br>";
for($i=1;$i<=5;$i++)
{
  echo $i."<br>";
}
ParseClient::initialize( $app_id, $rest_key, $master_key);
ParseClient::setServerURL('https://parseapi.back4app.com','/');

$soccerPlayer = new ParseObject("SoccerPlayer");
$soccerPlayer->set("name", "A. Wed");
$soccerPlayer->set("yearOfBirth", 1997);
$soccerPlayer->set('emailContact', 'a.wed@email.io');
$soccerPlayer->setArray('attributes', ['fast', 'good conditioning']);

try {
  $soccerPlayer->save();
  echo 'New object created with objectId: ' . $soccerPlayer->getObjectId();
  } catch (ParseException $ex) {  
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
  }
?>
