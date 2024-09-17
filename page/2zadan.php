<div class="container">

<h1>2 задание</h1>



<?php 

$users_2 = array(
    "Спортивный" => "Сидоров",
    "Художественный" => "Емелина",
    "Музыкальный" => "Иванова",
    "Литературный" => "Петров",
    "Биологический" => "Антонова"
);

asort($users_2);

foreach ($users_2 as $hobbi => $surname) {
    echo "$hobbi - $surname<br>";
}
?></div>