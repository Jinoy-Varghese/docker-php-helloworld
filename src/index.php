<?php
require 'vendor/autoload.php';
echo "Hello, World from Docker! <br>";
echo "Hello ECS! <br>";
for($i=1;$i<=5;$i++)
{
  echo $i."<br>";
}





// $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, 'https://parseapi.back4app.com/classes/City?limit=10');
//     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//         'X-Parse-Application-Id: mxsebv4KoWIGkRntXwyzg6c6DhKWQuit8Ry9sHja', // This is the fake app's application id
//         'X-Parse-Master-Key: TpO0j3lG2PmEVMXlKYQACoOXKQrL3lwM0HwR9dbH' // This is the fake app's readonly master key
//     ));
//     $data = json_decode(curl_exec($curl)); // Here you have the data that you need
//     print_r(json_encode($data, JSON_PRETTY_PRINT));
//     curl_close($curl);
?>
<script src="node_modules/parse/dist/parse.min.js"></script>

<script>
Parse.serverURL = 'https://parseapi.back4app.com/classes/Indonesia_Cities_Database'; // This is your Server URL
// Remember to inform BOTH the Back4App Application ID AND the JavaScript KEY
Parse.initialize(
  'qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic', // This is your Application ID
  'NDunEJ6qyg1AZ104lDqbC4969ItHhjXYoYXIwC1D' // This is your Javascript key
);
</script>
<?php

use Parse\ParseException;
// use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseClient;

$app_id = 'qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic';
$master_key = 'zNdLgqeDsRPkxmBsAcke5jFAnDYoC6LYV6N8uJrk';

ParseClient::initialize($app_id, null, $master_key);

//Set server url
ParseClient::setServerURL('https://parseapi.back4app.com/classes/Indonesia_Cities_Database','parse');
$health = ParseClient::getServerHealth();
if($health['status'] === 200) {
    print('Server connected - everything looks good!');
}
else {
    print('Oops, looks like something is wrong. Please check the server status.');
}
$myCustomObject = new ParseObject("Indonesia_Cities_Database");

$myCustomObject->set("asciiname", "jinjin");
$myCustomObject->set("longitude", 1);
$myCustomObject->set("admin1_code", 1);
$myCustomObject->set("name", "A string");
$myCustomObject->set("population", 1);
$myCustomObject->set("geonameid", 1);
$myCustomObject->set("feature_class", "A string");
$myCustomObject->set("timezone", "A string");
$myCustomObject->set("feature_code", "A string");
$myCustomObject->set("dem", 1);
$myCustomObject->set("modification_date", "A string");
$myCustomObject->set("alternatenames", "A string");
$myCustomObject->set("latitude", 1);
$myCustomObject->set("country_code", "A string");
$myCustomObject->set("admin3_code", 1);
$myCustomObject->set("cc2", "A string");
$myCustomObject->set("elevation", 1);

try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}
?>
