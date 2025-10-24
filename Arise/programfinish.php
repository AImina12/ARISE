<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Finished</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        nav {
            display: flex;
            justify-content: flex-end; /* Aligns the nav-right to the right */
            align-items: center;
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            border-bottom: 1px solid #ddd;
        }
        .nav-right {
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        .nav-right a {
            font-size: 1.3rem;
            font-weight: 100;
            text-decoration: none;
            color: #000;
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
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: -5rem; /* Moves the content higher up */
        }
        h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }
        .subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            color: #666;
            margin-bottom: 2rem;
        }
        button {
            background-color: black;
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <nav>
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

    <div class="content">
        <h1>PROGRAM FINISHED</h1>
        <p class="subtitle">TOMORROW IS REST DAY.</p>
        <button>View Detailed Program</button>
    </div>
</body>
</html>
