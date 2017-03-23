<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $hour = $parsed_json->{'moon_phase'}->{'sunrise'}->{'hour'};
  $minute = $parsed_json->{'moon_phase'}->{'sunrise'}->{'minute'};
  $moon = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
  $hemisphere = $parsed_json->{'moon_phase'}->{'hemisphere'};
  echo "in Australia Sydney percent illuminated is ${moon} at ${hemisphere} <br>
  time sunrise is ${hour}.${minute}  ";
?>
<br><br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/conditions/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $weather = $parsed_json->{'current_observation'}->{'weather'};
  $localtime = $parsed_json->{'current_observation'}->{'local_time_rfc822'};
  $city = $parsed_json->{'current_observation'}->{'display_location'}->{'city'};
  $temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
  $wind = $parsed_json->{'current_observation'}->{'wind_degrees'};
  $pressurein = $parsed_json->{'current_observation'}->{'pressure_in'};
  echo "On the day ${localtime} weather in ${city} ${weather} and temp ${temp_c}C with ${wind} wind degrees <br>
  pressure in ${pressurein} ";
?>
<br><br>
 <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/tide/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'tide'}->tideInfo[0]->{'tideSite'};
  $year = $parsed_json->{'tide'}->tideSummary[0]->{'date'}->{'year'};
  $maxheight = $parsed_json->{'tide'}->tideSummaryStats[0]->{'maxheight'};
  echo "in ${year} at ${location} height is ${maxheight} ";
?>

