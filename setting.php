<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>
<style>
    .container {
        display: flex;
        align-items: center;
        place-content: center;
    }

    .btn {
        padding: 0.5vw 2vw;
        border-radius: 0.5vw;
    }
</style>

<body>
    <form method="get" action="dua.php">
        <p> Setting </p>
        <br> </br>
        <p> Text-align:
            <select id="fruits" name="fruits">
                <option value="--Pilih Text Align--"> --Pilih Text Align-- </option>
                <option value="Left">Left</option>
                <option value="Right">Right</option>
                <option value="Center">Center</option>
                <option value="Justify">Justify</option>
            </select>
        </p>
        <p> Font-family:
            <select id="fruits" name="fruits">
                <option value="--Pilih Font Family--"> --Pilih Font Family-- </option>
                <option value="Arial">Arial</option>
                <option value="Tahoma">Tahoma</option>
                <option value="Calibri">Calibri</option>
            </select>
        </p>
        <p> Color:
            <input type="color" id="favcolor" name="favcolor" value="#000000">
        </p>
        <p>
            <a href="hasil.php">
                <button class="btn">Simpan</button>
            </a>
        </p>
    </form>
</body>

</html>