<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            border-bottom: 1px solid #ddd;
        }
        .nav-left h1 {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 0;
            color: #333;
        }
        .nav-right {
            display: flex;
            align-items: center;
            gap: 3rem;
           
        }
        .nav-right a {
            font-size: 1.3rem;
            font-style: normal;
            font-weight: 100; /* Changed to 100 for thinnest possible weight */
            text-decoration: none;
            color: #000000ff;
            transition: color 0.3s;
        }
        .nav-right a:hover {
            color: #0056b3;
        }
        .search-bar {
            display: flex;
        }
        .search-bar input {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            width: 200px;
        }
        .search-bar button {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0 4px 4px 0;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #0056b3;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
        }
        .social-icons a {
            display: inline-block;
        }
        .social-icons img {
    width:300px; /* or your new size */
    object-fit: contain;
    /* 👇 ADD THIS LINE */
    vertical-align: middle;
}

.social-icons a:nth-child(2) img {
padding-top: 40px;
    transform: scale(1.1);
    width: 350px;
}

.social-icons a:nth-child(1) img {
    transform: scale(1.4);
    padding-bottom: 110px;
    width: 350px;
}
 
        main {
            padding: 2rem;
        }
        footer {
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            text-align: center;
            padding-bottom: 100px;
        }
        footer a {
            margin: 0 1rem;
            text-decoration: none;
            color: #000000ff;
            font-size: 1rem;
        }
        footer a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-left">
            <h1>Share</h1>
        </div>
        <div class="nav-right">
            <a href="#">Home</a>
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <div class="search-bar">
                <input type="text" placeholder="Search in site">
                <button type="submit">Search</button>
            </div>
        </div>
    </nav>

    <div class="social-icons">
        <a href="#"><img src="images/discord.png" alt="Discord"></a>
        <a href="#"><img src="images/x.png" alt="X"></a>
        <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
        <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
    </div>

    <footer>
        <a href="#">Contact Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
    </footer>

    <main>

    </main>
</body>
</html>
