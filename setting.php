<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("textAlign", $_POST['align'], time() + 3600);
    setcookie("fontFamily", $_POST['font'], time() + 3600);
    setcookie("fontColor", $_POST['pickColor'], time() + 3600);
    header("Location: index.php");
    exit();
}

$align = isset($_COOKIE["textAlign"]) ? $_COOKIE["textAlign"] : "";
$font = isset($_COOKIE["fontFamily"]) ? $_COOKIE["fontFamily"] : "";
$color = isset($_COOKIE["fontColor"]) ? $_COOKIE["fontColor"] : "#000000";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Setting</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Sans+Narrow:wght@400;700&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap');

        body{
            position: relative;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            font-family: "PT Sans Narrow", sans-serif;
        }
        
        .wrap{
            padding-top: 5%;
            display: grid;
            place-content: center;
        }

        .container-form{
            position: relative;
            z-index: 1;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            padding: 0.5vw 2vw;
            border-radius: 0.5vw;
            border: 1px solid rgba(0, 0, 0, 0.3);
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
            font-weight: bold;
            font-size: 0.8rem;
        }

        .bg{
            position: absolute;
            z-index: 0;
            top: 0;
            
            width: 100vw;
            height: 100vh;
        }

        .tabel{
            position: absolute;
            z-index: 2;
            bottom: 0;
            right: -10%;
            width: 35%;
        }

        form{
            position: absolute;
            z-index: 2;
            top: 5%;
            left: 10%;
            color: white;
        }

        form>h1{
            font-size: 2.8vw;
        }

        form p {
            font-size: 1.4vw;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="container-form">
            <img src="Asset/papan-utama.png" class="papan-utama"> 
            <form method="POST" action="">
                <h1>Setting</h1>
                <p>Text-align:
                    <select id="align" name="align">
                        <option value="--Pilih Text Align--" <?php echo $align == "" ? " selected" : "" ?>> --Pilih Text Align-- </option>
                        <option value="Left" <?php echo $align == "Left" ? " selected" : "" ?>>Left</option>
                        <option value="Right" <?php echo $align == "Right" ? " selected" : "" ?>>Right</option>
                        <option value="Center" <?php echo $align == "Center" ? " selected" : "" ?>>Center</option>
                        <option value="Justify" <?php echo $align == "Justify" ? " selected" : "" ?>>Justify</option>
                    </select>
                </p>
                <p>Font-family:
                    <select id="font" name="font">
                    <option value="--Pilih Font Family--" <?php echo $align == "" ? " selected" : "" ?>> --Pilih Font Family-- </option>
                        <option value="Arial" <?php echo $font == "Arial" ? "selected" : "" ?>>Arial</option>
                        <option value="Tahoma" <?php echo $font == "Tahoma" ? "selected" : "" ?>>Tahoma</option>
                        <option value="Calibri" <?php echo $font == "Calibri" ? "selected" : "" ?>>Calibri</option>
                    </select>
                </p>
                <p>Color:
                    <input type="color" name="pickColor" value="<?php echo htmlspecialchars($color) ?>">
                </p>
                <br>
                <br>
                <button class="btn">Simpan</button>
            </form>
        </div>
    </div>
    <img src="Asset/bg.png" class="bg">
    <img src="Asset/tabel.png" class="tabel">
</body>

</html>