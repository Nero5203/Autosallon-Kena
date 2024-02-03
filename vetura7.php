<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stl.css">
</head>
<style>
    .c1>img {
        width: 500px;
        margin-top: 10%;
    }

    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    .container {
        width: 400px;
        background-color: black;
        color: white;
        padding: 20px;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: -29%;
        margin-left: 50%;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input,
    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button {
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    .blej {
        background-color: red;
    }

    .blej:hover {
        width: 398px;
    }
</style>


<body>
    <div class="c1">
        <img src="img/car7.jpg" alt="">

        <div class="cont">

            <form action="vetura7.php" method="post" class="vetura1">
                <div class="container">
                    <h1>Blije makinen tuaj te endrrave</h1>
                    <form action="order.php" method="post">
                        <label for="name">Emri:</label>
                        <input type="text" id="name" name="name" required><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="model">Modeli Makines:</label>
                        <input type="text" id="model" name="model" required><br>

                        <label for="color">Ngjyra:</label>
                        <input type="text" id="color" name="color"><br>

                        <label>Sasia</label>
                        <input type="text" name="Sasia" required><br>
                        <input type="submit" value="Ruaj" class="blej">

                        <?php
                        if (isset($_POST['Sasia'])) {
                            $item = "Makina";
                            $price = 14000;
                            $sasia = $_POST["Sasia"];
                            $total = null;

                            if (is_numeric($sasia)) {
                                $total = $sasia * $price;
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTe dhenat jane ruajtur<br> &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspme sukses<br>";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVlera totale:{$total}$";
                            } else {
                                echo "Te dhenat nuk jane ruajtur me sukses!";
                            }
                        }
                        ?>

                        <button type="submit">Blije</button>
                    </form>
                </div>

            </form>
        </div>
    </div>

</body>

</html>