<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gim Bola</title>
    <style>

        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        body {
            background: url('bg.jpg') repeat-y; /* Mengulang gambar latar belakang secara vertikal */
            background-size: cover;
            animation: moveBackground 1s linear infinite; /* Animasi latar belakang bergerak selama 10 detik */
        }

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

    .tankmonster2 {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            top: -900%;
            width: 250px;
            height: 300px;
        }

    @keyframes moveBackground {
            from {
                background-position: 0 0;
            }
            to {
                background-position: 0 100%;
            }
        }

    </style>
</head>

<body>
    <div class="atas">
    <img src="tankmonster2.png" id="tankmonster2" class="img" width="150px">
    </div>
    <div class="bawah">
        <img src="peluru.png" id="tendang" class="img" width="85px">
        <img src="tank.png" id="img" class="img" width="85px">
        <audio id="sound" src="shot.mp3"></audio>
    </div>
</body>

</html>
<script src="main.js"></script>