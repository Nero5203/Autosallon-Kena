<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./index.js"></script>
</head>

<body>
    <div class="container">
        <form id="form" action="/">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2" name="password2" type="password">
                <div class="error"></div>
            </div>
            <form action="Makinat.php" method="POST">
                <button type="submit">Submit</button>
            </form>
        </form>
    </div>
</body>
<style>
    body {
        background-image: radial-gradient(circle, #e97979, #eb8d8c, #eca09f, #ecb2b2, #eac5c5, #e9ced0, #e7d6da, #e5dfe1, #e4e0e2, #e3e1e3, #e3e2e3, #e3e3e3);
    }

    #form {
        width: 300px;
        margin: 20vh auto 0 auto;
        padding: 20px;
        background-color: whitesmoke;
        border-radius: 4px;
        font-size: 12px;
    }

    #form h1 {
        color: #0f2027;
        text-align: center;
    }

    #form button {
        padding: 10px;
        margin-top: 10px;
        width: 100%;
        color: white;
        background-color: rgb(41, 57, 194);
        border: none;
        border-radius: 4px;
    }

    .input-control {
        display: flex;
        flex-direction: column;
    }

    .input-control input {
        border: 2px solid #f0f0f0;
        border-radius: 4px;
        display: block;
        font-size: 12px;
        padding: 10px;
        width: 100%;
    }

    .input-control input:focus {
        outline: 0;
    }

    .input-control.success input {
        border-color: #09c372;
    }

    .input-control.error input {
        border-color: #ff3860;
    }

    .input-control .error {
        color: #ff3860;
        font-size: 9px;
        height: 13px;
    }
</style>


</html>