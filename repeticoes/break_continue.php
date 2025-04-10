<div class="titul">Break / Continue</div>

<?php
$count = 10;
for(;;){
    echo "$cont <br>";
    $count++;
    if ($count>20){
        break;
    }
}

echo"<br><hr><br>";

for(;;){
    $count++;
    if ($count % 2 == 1){
        continue;
    }
    echo "<br> $count";
    if ($count >30){
        break;
    }
}

echo "<br> FIM!"

?>