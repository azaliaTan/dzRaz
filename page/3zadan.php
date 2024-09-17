<h1>3 задание</h1>

<?php 

$student=[
    'name'=>'Azalia',
    'fullname'=>'Tanaeva',
    'Group'=>'425 ВЕБ',
    'Hobbi'=>'Рисование',
    'Social networks'=>[ 'TG'=>'@ldzil','INST'=>'@ld.zil']
];
?>

<p>Привет! Меня зовут <?php echo $student['name']  ?>! Я студентка группы <?php echo $student['Group']?>.
Мое хобби это - <?php echo $student['Hobbi']?>. 

<p>Мои социальные сети:</p>
<ul>
    <?php foreach ($student['Social networks'] as $network => $nick) : ?>
        <li><?php echo $network . ': ' . $nick; ?></li>
    <?php endforeach; ?>
</ul>



