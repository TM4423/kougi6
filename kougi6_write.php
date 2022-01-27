<?php

function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
// var_dump($_POST);
$data = array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9']);
// $data = {$name,$mail,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9};
echo $data[2];

// $file = fopen("/data/dataf.txt","w");
// fputcsv($file, $data);
// fwrite($file, $data);
// fclose($file);


?>


<html>
    <body>
<?= h($name); ?>さん、ありがとうございます。<br>
Q1 = <?= h($q1); ?>などを登録しました。
<form action="kougi6_read.php" method="get">
    <button type="submit">結果を見る</button>
</form>

</body>
</html>


