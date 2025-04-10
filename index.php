<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Sans+Narrow:wght@400;700&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap');

    body{
        margin: 0;
        padding: 0;
        overflow: hidden;
        font-family: "PT Sans Narrow", sans-serif;
    }

    .bg{
        position: absolute;
        z-index: 0;
        top: 0;
        
        width: 100vw;
    }
    
    .papan{
        position: absolute;
        z-index: 0;
        top: 50%;
        left: 1%;
        transform: translateY(-50%);
        width: 24vw;
        color: rgba(250, 250, 250, 0.95);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .papan-img{
        width: 80%;
    }

    .text-papan{
        position: absolute;
        z-index: 2;
        top: 10%;
    }

    .text-papan>h2{
        margin-bottom: 0;
        text-align: center;
    }

    .text-papan>p{
        margin-bottom: 0;
        margin-top: 5px;
        font-weight: bold;
    }

    .judul{
        position: relative;
        z-index: 1;

        margin-top: 5%;
        text-align: center;
    }

    .judul>h1{
        font-family: "Pattaya", sans-serif;
        font-size: 3vw;
        margin: 0;
    }

    .judul>p{
        margin: 0;
        font-size: 1.3vw;
    }

    .container-awal{
        margin-top: 5%;

        display: grid;
        place-content: center;
    }

    .container {
        position: relative;
        z-index: 1;

        width: 40vw;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .btn {
        padding: 0.5vw 2vw;
        border-radius: 0.5vw;
        border: 1px solid rgba(0, 0, 0, 0.3);
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
        font-weight: bold;
        font-size: 0.8rem;
    }

    .tabel{
        position: absolute;
        bottom: 0;
        right: -10%;
        width: 40%;
    }
</style>
<body>
    <div class="judul">
        <h1>Project UTS WebProg</h1>
        <p>By-Random 8</p>
    </div>    
    <div class="container-awal">
        <div class="container">
            <a href="hasil.php">
                <button id="btnhasil" class="btn">Lihat Hasil</button>
            </a>
            <a href="setting.php">
                <button id="btnstg" class="btn">Lihat Setting</button>
            </a>
        </div>
    </div>
    <img src="Asset/bg.png" class="bg">
    <img src="Asset/tabel.png" class="tabel">
    <div class="papan">
        <img src="Asset/papan.png" class="papan-img">
        <div class="text-papan">
            <h2>Kelompok Random 8</h2>
            <p>1. Aileen Averina - 160423011</p>
            <p>2. Ricky Cahyadi - 160423191</p>
            <p>3. Aileen Joyce David - 160423031</p>
        </div>
    </div>
</body>

</html>