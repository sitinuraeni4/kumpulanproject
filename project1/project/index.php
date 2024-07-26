<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gim Bola</title>
    <style>
    .img {
        position: absolute;
        transition: top 0.5s ease;
    }

    .atas {
        width: 100%;
        height: 90%;
    }

    .bawah {
        width: 100%;
        height: 10%;
        position: fixed;
        bottom: 0;
    }
    </style>
</head>

<body>
    <div class="atas"></div>
    <div class="bawah">
        <img src="bola.png" id="tendang" class="img" width="50px">
        <img src="bola.png" id="img" class="img" width="50px">
    </div>
</body>

</html>
<script src="main.js?1"></script>