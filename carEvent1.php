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
        margin-top: 5%;
        margin-left: 25%;
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
        background-color: red;
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

    body {
        background-image: url(img/eldorado-600x450.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        filter: brightness(0.7);
        background-position: center;
    }
</style>


<body>
    <div class="c1">


        <div class="cont">

            <form action="evente.php" method="post" class="vetura1">
                <div class="container">
                    <h1>Merr me Qera makinen e endrrave</h1>
                    <form action="order.php" method="post">
                        <label for="name">Emri:</label>
                        <input type="text" id="name" name="name" required><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="model">Numri Personal:</label>
                        <input type="text" id="model" name="model" required><br>

                        <label for="color">Kohzgjatja e mbajtjes:</label>
                        <input type="text" id="color" name="color"><br>

                        <button type="submit">Merr me Qera</button>
                    </form>
                </div>

            </form>
        </div>
    </div>




</body>

</html>