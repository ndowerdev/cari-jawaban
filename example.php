<?php

require "src/Brainly.php";

use Brainly\Brainly;

$query = "20296626";
$st = new Brainly($query);
echo $result = $st->execFindTugas($query);

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
