<?php
$date = date('w');
if ($date == 6) {
echo "Je vous souhaite un bon weekend";
} elseif ($date == 0) {
echo "Je vous souhaite un bon dimanche";
} else {
   echo "Je vous souhaite une bonne journée";
}
