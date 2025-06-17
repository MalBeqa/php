<?php
$grades = array(
    "Math" => "3",
    "Art" => "5",
    "History" => "4",
    "Music" => "4"
);

foreach($grades as $subject => $grade) {
    echo "Subject:" .$subject . ", Grade:" . $grade;
    echo "<br>";
}
?>