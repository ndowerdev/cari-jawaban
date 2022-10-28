<?php

require "vendor/autoload.php";

use Brainly\Brainly;

$query = "25586876";
$st = new Brainly($query);
$result = $st->execFindTugas($query);
print_r($result);

// if (count($result) === 0) {
//     print "Not found!\n";
// } else {
//     print json_encode($result, JSON_PRETTY_PRINT);
// }
// $query = "siapa penemu lampu?";
// $st = new Brainly($query);
// $result = $st->exec();

// if (count($result) === 0) {
//   print "Not found!\n";
// } else {
//   print json_encode($result, JSON_PRETTY_PRINT);
// }
