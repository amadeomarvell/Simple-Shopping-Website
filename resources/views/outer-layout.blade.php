<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/" style="margin-left: 25px; color: white; font-size: 18px;">Shop-1</a>
            <div class="navbar-container-1">
                <a href="/register" style="margin-right: 30px; color: white;">Register</a>
                <a href="/login" style="margin-right: 30px; color: white;">Login</a>
                <a href="/about-us" style="margin-right: 30px; color: white;">About Us</a>
            </div>
        </div>
    </nav>
    @yield('context')
</body>
<footer>
    <div class="footer">
        <h6>Shop-1 @2023 | email: shop1@gmail.com | phone: 021 3456 7890</h6>
    </div>
</footer>
<style>
    .navbar{
        display: flex;
        flex-direction: row;
        background-color: rgb(48, 48, 48);

    }

    .navbar-container{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .navbar-container-1{
        margin-left: 1000px;
    }

    .footer{
        bottom: 0;
        position: fixed;
        display: flex;
        flex-direction: row;
        background-color: rgb(48, 48, 48);
        color: white;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 5px;
    }
</style>
</html>
