<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align: center;
        }
    </style>    
</head>
<body>
  <form action="" method="post">
    x awal
    <input type="text" name="X" />
    y awal
    <input type="text" name="Y" /><br>

    x akhir
    <input type="text" name="X2" />
    y akhir
    <input type="text" name="Y2" /><br>
    <button>submit</button>

    <h1> Hasil: </h1>
   </form>
    <?php
    $X= isset($_POST['X'])?$_POST['X']: '';
    $Y= isset($_POST['Y'])?$_POST['Y']: '';
    $X2= isset($_POST['X2'])?$_POST['X2']:'';
    $Y2=isset($_POST['Y2'])?$_POST['Y2']:'';

    $hasilX = (int) $X - (int) $X2;
    $hasilY = (int) $Y - (int) $Y2;

    if ($hasilx > 0){
        echo "Mundur",$hasilx,"langkah";
    }else{
        echo "Maju",abs($hasilx),"langkah";
    };
    echo "<br>";
    if ($hasily > 0){
        echo "Kekiri",$hasily,"langkah";
    }else{
        echo "Kekanan",abs($hasily),"langkah";
    };
    ?>
</body>
</html>