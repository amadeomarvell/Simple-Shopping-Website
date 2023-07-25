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
    <nav class="navbar" style="background-color:rgb(48, 48, 48);">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(255, 255, 255); margin-left: 30px; font-weight: bold;"  href="/home">Shop-1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: rgb(255, 255, 255); margin-right: 30px; font-weight: bold;"  aria-current="page" href="/hot-items">Hot Items</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255); margin-right: 30px; font-weight: bold;" >Category</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-bold" href='/category-product/{{ $categories=1}}'>Stationary</a></li>
                            <li><a class="dropdown-item fw-bold" href='/category-product/{{ $categories=2}}'>Sports</a></li>
                            <li><a class="dropdown-item fw-bold" href='/category-product/{{ $categories=3}}'>Jewelry</a></li>
                            <li><a class="dropdown-item fw-bold" href='/category-product/{{ $categories=4}}'>Shoes</a></li>
                            <li><a class="dropdown-item fw-bold" href='/category-product/{{ $categories=5}}'>Clothes</a></li>
                            <li><a class="dropdown-item fw-bold" href='/category-product/{{ $categories=6}}'>Liquor</a></li>
                          </ul>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: rgb(255, 255, 255); margin-right: 30px; font-weight: bold;"  aria-current="page" href="/view-cart">View Cart</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <form action="/home/{id}" method="GET" class="search-form">
                        <input type="text" name="query" placeholder="Search..." class="search-input">
                        <button type="submit" class="search-button fw-bold">Search</button>
                    </form>
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(255, 255, 255); margin-left: 30px; font-weight: bold;" >Profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/transaction" style="font-weight: bold;">Transaction History</a></li>
                                <li><a class="dropdown-item" href="/view-profile" style="font-weight: bold;">Edit Profile</a></li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type ="submit" class="dropdown-item" style="font-weight: bold;"><a href="/" style="color: black;">Log Out</a></button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
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

    .search-container {
        display: flex;
        justify-content: center;
        align-items: center;

    }
        .search-form {
            display: flex;
            align-items: center;
    }

    .search-input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        color: #555;
        outline: none;
        width: 200px;
    }

    .search-button {
        padding: 10px 20px;
        background-color: #5a23c2;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #3f4fd8;
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
