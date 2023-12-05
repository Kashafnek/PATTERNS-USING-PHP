<h2>Diamond Pattern</h2>

<?php
for ($i = 1; $i <= 4; $i++) {
    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    echo "*";
    for ($k = 1; $k < 2 * $i - 1; $k++) {
        echo "&nbsp;&nbsp;";
    }
    if ($i != 1) {
        echo "*";
    }
    echo "</br>";
}

for ($i = 4 - 1; $i >= 1; $i--) {
    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    echo "*";
    for ($k = 1; $k < 2 * $i - 1; $k++) {
        echo "&nbsp;&nbsp;";
    }
    if ($i != 1) {
        echo "*";
    }
    echo "</br>";
}
?>

<h2>Staircase Pattern of Numbers</h2>

<?php
 echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "$i";
    }
    echo "</br>";
}
?>

<h2>Number Pyramid Pattern</h2>

<?php
  echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

?>
