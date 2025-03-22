<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        display: flex;
        align-items: center;
        place-content: center;
    }
    .btn{
        padding: 0.5vw 2vw;
        border-radius: 0.5vw;
    }
    #btnhasil{
        margin-right: 10vw;
    }
    #btnstg{
        margin-left: 10vw;
    }
</style>
<body>
    <div class="container">
        <a href="hasil.php">
            <button id="btnhasil" class="btn">Lihat Hasil</button>
        </a>
        <a href="setting.php">
            <button id="btnstg" class="btn">Lihat Setting</button>
        </a>

    </div>
</body>
</html>