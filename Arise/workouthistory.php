<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout History</title>
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
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }
        .subtitle {
            font-size: 1.2rem;
            font-weight: normal;
            color: #666;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-left">
            <h1>Workout History</h1>
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

    <main>
        <h1>Workout History</h1>
        <p class="subtitle">A detailed breakdown of your finished training sessions.</p>
    </main>
</body>
</html>
