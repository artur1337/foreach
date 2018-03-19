<?php
$user0= ['vardas' => 'Vardas', 'pavarde' => 'Pavarde', 'amzius' => 'Amzius'];
$user1= ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 19];
$user2= ['vardas' => 'Juozas', 'pavarde' => 'Juozaitis', 'amzius' => 21];
$user3= ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 30];
$user4= ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 17];
$user5= ['vardas' => 'Juozas', 'pavarde' => 'Juozaitis', 'amzius' => 41];
$user6= ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 50];

$user=[$user0, $user1, $user2, $user3,$user4,$user5,$user6];
echo "<table>";
foreach ($user as $users) {
    echo "<tr>";
    echo '<td>' . $users['vardas'] . '</td>';
    echo '<td>' . $users['pavarde'] . '</td>';
    echo '<td>' . $users['amzius'] . '</td>';
    echo "</tr>";
}
echo "</table>";