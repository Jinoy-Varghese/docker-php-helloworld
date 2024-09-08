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
Parse.serverURL = 'https://parseapi.back4app.com'; // This is your Server URL
// Remember to inform BOTH the Back4App Application ID AND the JavaScript KEY
Parse.initialize(
  'qyAZuVFBpeAH6QGkz1IT5gK3eP5IZaphaFtZJMic', // This is your Application ID
  'NDunEJ6qyg1AZ104lDqbC4969ItHhjXYoYXIwC1D' // This is your Javascript key
);
</script>
<?php

use Parse\ParseException;
use Parse\ParseQuery;

$query = new ParseQuery("Indonesia_Cities_Database");
echo $query."heello<br>";
try {
  $myCustomObject = $query->get("z20ydNn5uF");
  // The object was retrieved successfully.

  // To get attributes, you can use the "get" method, providing the attribute name:
  $myCustomKey1Value = $myCustomObject->get("name");
  echo $myCustomKey1Value;
} catch (ParseException $ex) {
  // The object was not retrieved successfully.
  // error is a ParseException with an error code and message.
}

?>
