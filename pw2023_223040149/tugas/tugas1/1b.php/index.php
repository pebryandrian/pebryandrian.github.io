<?php
$npm = 49;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1b</title>
</head>
<body>

    <p> Aku adalah angka <span> <?php echo $npm; ?> </span> </p>
    <p> Jika aku dikali 5, maka aku sekarang menjadi <span> <?php echo $npm*=5 ?></span></p>
    <p> Jika aku dibagi 2, maka aku sekarang menjadi <span> <?php echo $npm/=2 ?></span></p>
    <p> Jika aku ditambah 75 , maka aku sekarang menjadi <span> <?php echo $npm+=75 ?></span></p>
    <p> Jika aku dikurang 20, maka aku sekarang menjadi <span> <?php echo $npm-=20 ?></span></p>

</body>
</html>