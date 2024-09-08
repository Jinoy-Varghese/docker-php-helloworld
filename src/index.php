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
// Parse.serverURL = 'https://parseapi.back4app.com/classes/Indonesia_Cities_Database'; // This is your Server URL
// // Remember to inform BOTH the Back4App Application ID AND the JavaScript KEY
// Parse.initialize(
//   'qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic', // This is your Application ID
//   'NDunEJ6qyg1AZ104lDqbC4969ItHhjXYoYXIwC1D' // This is your Javascript key
// );
//axios is not defined
const axios = require('axios');


async function addCustomClassName(){
try{
axios({
method:'POST',
url:'https://parseapi.back4app.com/classes/Indonesia_Cities_Database',
headers:{
"X-Parse-Application-Id": "qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic",
"X-Parse-REST-API-Key": "ui9JtZVsSkNqQmHUz1IezQovwz7s2GcdyXIVRMSk",
"Content-Type": "application/json"
},
data:{
  "asciiname": "testing jino",
  "longitude": 1,
  "admin1_code": 1,
  "name": "testing jino",
  "population": 1,
  "geonameid": 1,
  "feature_class": "testing jino",
  "timezone": "testing jino",
  "feature_code": "testing jino",
  "dem": 1,
  "modification_date": "testing jino",
  "alternatenames": "A string",
  "latitude": 1,
  "country_code": "A string",
  "admin3_code": 1,
  "cc2": "A string",
  "elevation": 1
}
 }).then((res)=>{
  console.log(res)
 }).catch((err)=>{
 console.log(err.request )
 })
}
catch(error){
console.log(error)}}
addCustomClassName();

</script>
<?php

use Parse\ParseException;
use Parse\ParseQuery;
use Parse\ParseObject;
use Parse\ParseClient;

$app_id = 'qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic';
$RestAPIKey = 'ui9JtZVsSkNqQmHUz1IezQovwz7s2GcdyXIVRMSk';
$master_key = 'zNdLgqeDsRPkxmBsAcke5jFAnDYoC6LYV6N8uJrk';

ParseClient::initialize($app_id, $RestAPIKey, $master_key);

//Set server url
ParseClient::setServerURL('https://parseapi.back4app.com/classes/Indonesia_Cities_Database','/');
$health = ParseClient::getServerHealth();
if($health['status'] === 200) {
    print('Server connected - everything looks good!');
}
else {
    print('Oops, looks like something is wrong. Please check the server status.');
    echo $health['status'];
}
$query = new ParseQuery("Indonesia_Cities_Database");
try {
  $myCustomObject = $query->get("<PARSE_OBJECT_ID>");
  // The object was retrieved successfully.

  // To get attributes, you can use the "get" method, providing the attribute name:
  $asciiname = $myCustomObject->get("asciiname");
  $longitude = $myCustomObject->get("longitude");
  $admin1_code = $myCustomObject->get("admin1_code");
  $name = $myCustomObject->get("name");
  $population = $myCustomObject->get("population");
  $geonameid = $myCustomObject->get("geonameid");
  $feature_class = $myCustomObject->get("feature_class");
  $timezone = $myCustomObject->get("timezone");
  $feature_code = $myCustomObject->get("feature_code");
  $dem = $myCustomObject->get("dem");
  $modification_date = $myCustomObject->get("modification_date");
  $alternatenames = $myCustomObject->get("alternatenames");
  $latitude = $myCustomObject->get("latitude");
  $country_code = $myCustomObject->get("country_code");
  $admin3_code = $myCustomObject->get("admin3_code");
  $cc2 = $myCustomObject->get("cc2");
  $elevation = $myCustomObject->get("elevation");
} catch (ParseException $ex) {
  // The object was not retrieved successfully.
  // error is a ParseException with an error code and message.
  echo 'Failed to get object, with error message: ' . $ex->getMessage();
}

?>
