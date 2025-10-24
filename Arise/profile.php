<?php
// A simple PHP variable to demonstrate dynamic content
$pageTitle = "Profile Page";

// Array of motivational fitness quotes
$fitnessQuotes = [
    "The only bad workout is the one that didn't happen.",
    "Push yourself because no one else is going to do it for you.",
    "Your body can do it. It's your mind you have to convince.",
    "Fitness is not about being better than someone else. It's about being better than you used to be.",
    "The hardest lift of all is lifting your butt off the couch.",
    "Sweat is just fat crying.",
    "Don't stop when you're tired. Stop when you're done.",
    "Train insane or remain the same.",
    "Excuses don't burn calories.",
    "Stronger than yesterday."
];

// Select a random quote
$randomQuote = $fitnessQuotes[array_rand($fitnessQuotes)];

// Array of randomized program descriptions (updated to shorter, casual format)
$programDescriptions = [
    "It's your favorite day - leg day.",
    "Upper body blast incoming!",
    "Time for some cardio fun!",
    "Core work to strengthen your center.",
    "Full-body circuit awaits.",
    "Recovery and mobility session.",
    "Powerlifting power hour."
];

// Select a random program description
$randomProgram = $programDescriptions[array_rand($programDescriptions)];

// Sample goal data (weights updated and converted to typical KG targets)
$goals = [
    [
        'name' => 'Squat Goal',
        'target' => 140, // kg
        'progress' => 75 // percentage
    ],
    [
        'name' => 'Bench Press Goal',
        'target' => 100, // kg
        'progress' => 60
    ],
    [
        'name' => 'Deadlift Goal',
        'target' => 180, // kg
        'progress' => 85
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Set universal font to Roboto */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif; /* Roboto as the primary font */
            min-height: 100vh; /* Ensure body takes full viewport height */
            display: flex;
            flex-direction: column; /* Stack content vertically */
        }
        
        nav {
            background-color: white; /* Plain white background as requested */
            padding: 10px 20px; /* Padding for spacing */
            display: flex; /* Use flexbox for horizontal alignment */
            justify-content: space-between; /* "Home" on left, rest on right */
            align-items: center; /* Vertically center items */
            border-bottom: 90px solid black; /* Separator as per your code */
        }
        
        nav a.home-link {
            color: black; /* Dark color for visibility on white background */
            text-decoration: none; /* Remove underlines */
            font-weight: bold; /* Make it stand out */
            margin-right: auto; /* Ensures it's pushed to the left */
            font-size: 2rem;
        }
        
        nav a.home-link:hover {
            text-decoration: underline; /* Add underline on hover */
        }
        
        .right-nav {
            display: flex; /* Align "Settings" and search bar horizontally */
            align-items: center; /* Vertically center items */
            gap: 20px; /* Space between "Settings" and search bar */
        }
        
        .right-nav a {
            color: black; /* Dark color for "Settings" link */
            text-decoration: none; /* Remove underlines */
            font-size: 2rem;
        }
        
        .right-nav a:hover {
            text-decoration: underline; /* Add underline on hover */
        }
        
        .right-nav form {
            display: flex; /* Align search input and button */
            align-items: center;
        }
        
        .right-nav input[type="text"] {
            padding: 8px; /* Padding inside the input */
            border: 1px solid #ddd; /* Light border for visibility */
            border-radius: 4px 0 0 4px; /* Rounded corners for the left side */
            width: 200px; /* Width of the search bar */
            outline: none; /* Remove outline on focus */
            font-family: 'Roboto', sans-serif; /* Ensure Roboto font */
        }
        
        .right-nav button {
            padding: 8px 12px; /* Padding for the button */
            background-color: #f0f0f0; /* Light gray background for button to match white theme */
            border: 1px solid #ddd; /* Light border */
            border-left: none; /* No left border to connect with input */
            border-radius: 0 4px 4px 0; /* Rounded corners for the right side */
            color: black; /* Dark color for visibility */
            cursor: pointer; /* Change mouse cursor to pointer */
            display: flex; /* Align icon */
            align-items: center; /* Center items vertically */
            font-family: 'Roboto', sans-serif; /* Ensure Roboto font */
            font-size: 1rem;
        }
        
        .right-nav button:hover {
            background-color: #e0e0e0; /* Slightly darker on hover for feedback */
        }
        
        /* Main content styling */
        .content-wrap {
            flex-grow: 1; /* Allow content to grow and push footer down */
        }

        main {
            display: flex; /* Make main a flex container */
            flex-direction: row; /* Align children (profile and buttons) horizontally */
            justify-content: space-between; /* Space between profile and buttons */
            align-items: center; /* Vertically center the children */
            padding: 60px;
            max-width: 1200px; /* Limit the width for centering */
            margin: 0 auto; /* Center the main content on the page */
        }
        
        /* Profile section styling */
        .profile-container {
            display: flex; /* Align image and info beside each other */
            justify-content: flex-start; /* Push to the left side */
            align-items: center; /* Vertically align items */
            margin-bottom: 20px; /* Space below the profile section */
        }
        
        .profile-image {
            width: 150px; /* Size of the image holder */
            height: 150px;
            border-radius: 50%; /* Make it round */
            overflow: hidden; /* Ensure the image doesn't overflow the circle */
            margin-right: 20px; /* Space between image and text */
            align-self: center; /* Ensure the image is vertically centered within the container */
        }
        
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio and cover the area */
        }
        
        .profile-info {
            text-align: left; /* Align text to the left within the container */
        }
        
        .profile-info h2 {
            font-weight: bold; /* User's name in bold */
            margin: 0;
            font-size: 1.5rem; /* Matches your font size theme */
        }
        
        .profile-info p.categories {
            font-style: italic; /* Slight emphasis on categories */
            margin: 5px 0; /* Space below categories */
            font-size: 1.2rem;
        }
        
        .profile-info p.bio {
            margin: 10px 0 0; /* Space below bio */
            font-size: 1rem;
        }
        
        /* Buttons section styling */
        .buttons-container {
            display: flex; /* Use flex for spacing */
            flex-direction: column; /* Stack buttons vertically */
            justify-content: flex-end; /* Align the stack to the right */
            gap: 20px; /* Evenly space the buttons vertically */
            margin-top: 0; /* Remove previous margin to align properly */
        }
        
        .buttons-container button {
            padding: 10px 20px; /* Padding for buttons */
            border-radius: 20px; /* Rounded edges */
            font-family: 'Roboto', sans-serif; /* Use Roboto font */
            cursor: pointer;
            border: none; /* Remove default border for consistency */
            font-size: 1rem; /* Consistent with your theme */
            width: 200px; /* Ensure buttons have a fixed width for better alignment */
        }
        
        .buttons-container .hollow-button {
            border: 2px solid black; /* Hollow: only border */
            background-color: transparent; /* No background */
            color: black; /* Black text */
        }
        
        .buttons-container .hollow-button:hover {
            background-color: #f0f0f0; /* Light background on hover */
        }
        
        .buttons-container .filled-button {
            background-color: black; /* Filled: black background */
            color: white; /* White text */
        }
        
        .buttons-container .filled-button:hover {
            background-color: #333; /* Darker shade on hover */
        }
        
        /* Separator and quote container styling (Inside Content Wrap) */
        .separator {
            max-width: 1200px; /* Match main's max-width for consistency */
            margin: 0 auto; /* Center it */
            padding: 0 60px; /* Match main's horizontal padding */
        }
        
        /* Style for the horizontal lines */
        .separator .line {
            border: none; /* Remove default border */
            height: 1px; /* Thin line */
            background-color: black; /* Black color */
            margin: 0; /* Remove any default vertical margin from the line itself */
        }
        
        .quote-container {
            background-color: lightgray; /* Light gray background */
            padding: 20px; /* Padding inside the container */
            margin: 50px 0; 
            border-radius: 8px; /* Slight rounding for a rectangular look */
            text-align: center; /* Center the quote text */
            font-style: italic; /* Italicize the quote for emphasis */
            font-size: 1.2rem; /* Slightly larger font for readability */
        }
        
        /* Program section styling (Inside Content Wrap) */
        .program-section {
            max-width: 1200px; /* Match main's max-width for consistency */
            margin: 40px auto 0; /* Center it with top margin for spacing */
            padding: 0 60px; /* Match main's horizontal padding */
            text-align: center; /* Center the content */
        }
        
        .program-section h2 {
            font-weight: bold; /* Bold header */
            font-size: 1.8rem; /* Larger size for header */
            margin-bottom: 20px; /* Space below header */
        }
        
        .program-section p {
            font-size: 1.1rem; /* Readable size for program text */
            margin-bottom: 30px; /* Space below program description */
            line-height: 1.5; /* Improve readability */
        }
        
        .program-section .program-button {
            padding: 12px 24px; /* Padding for the button */
            background-color: black; /* Filled black background */
            color: white; /* White text */
            border: none; /* No border */
            border-radius: 8px; /* Rounded corners */
            font-family: 'Roboto', sans-serif; /* Use Roboto font */
            font-size: 1rem; /* Consistent font size */
            cursor: pointer; /* Pointer on hover */
            text-decoration: none; /* Remove underline for link */
            display: inline-block; /* Make it behave like a button */
        }
        
        .program-section .program-button:hover {
            background-color: #333; /* Darker shade on hover */
        }
        
        /* Goal Progress section styling (Inside Content Wrap) */
        .goal-progress-section {
            max-width: 1200px; /* Match main's max-width for consistency */
            margin: 100px auto 0; 
            padding: 0 60px; /* Match main's horizontal padding */
            display: flex; /* Use flexbox for left and right sides */
            justify-content: space-between; /* Space between left and right */
            align-items: flex-start; /* Align to top */
            gap: 40px; /* Space between left and right sections */
        }
        
        .goal-progress-left {
            flex: 1; /* Take up available space */
            text-align: left; /* Align text to left */
            margin-top: 80px; 
        }
        
        .goal-progress-left h2 {
            font-weight: bold; /* Bold header */
            font-size: 1.8rem; /* Larger size for header */
            margin-bottom: 10px; /* Space below header */
        }
        
        .goal-progress-left p {
            font-size: 1rem; /* Normal text size */
            margin: 0; /* No margin */
            color: #666; /* Grey color for subtitle */
        }
        
        .goal-progress-right {
            flex: 1; /* Take up available space */
            text-align: left; /* Align text to left */
        }
        
        .goal-item {
            margin-bottom: 20px; /* Space below each goal item */
            padding-bottom: 10px; /* Padding below for line */
            border-bottom: 1px solid #ddd; /* Thin grey line separator */
        }
        
        .goal-item:last-child {
            border-bottom: none; /* No line for the last item */
            margin-bottom: 0; /* No margin for last item */
        }
        
        .goal-name {
            font-weight: bold; /* Bold goal name */
            font-size: 1.2rem; /* Slightly larger */
            margin-bottom: 5px; /* Space below name */
        }
        
        .goal-details {
            display: flex; /* Flex for target and progress */
            justify-content: space-between; /* Space them apart */
            align-items: center; /* Vertically center */
        }
        
        .goal-target {
            color: #666; /* Grey text */
            font-size: 1rem; /* Normal size */
        }
        
        .goal-progress {
            font-size: 1rem; /* Normal size */
            font-weight: bold; /* Bold progress */
        }

        /* ---------------------------------------------------- */
        /* Performance Metrics Section Styling (Inside Content Wrap) */
        /* ---------------------------------------------------- */
        .metrics-section {
            max-width: 1200px;
            margin: 100px auto 40px; 
            padding: 0 60px;
            text-align: center;
        }

        .metrics-section h2 {
            font-weight: bold;
            font-size: 2.2rem; /* Requested size */
            margin-bottom: 10px;
        }

        .metrics-section p.subtitle {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .metrics-section .view-history-button {
            padding: 10px 25px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 8px;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            cursor: pointer;
            margin-bottom: 50px; /* Space below the button before the metrics row */
            display: inline-block;
            text-decoration: none;
        }

        .metrics-section .view-history-button:hover {
            background-color: #333;
        }

        .metrics-row {
            display: flex;
            justify-content: space-around; /* Even spacing for the three containers */
            gap: 20px;
        }

        .metric-container {
            flex: 1; /* Ensure containers take equal space */
            background-color: #f5f5f5; /* Light grey background for emphasis */
            padding: 20px 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .metric-label {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 5px; 
            color: black;
        }

        .metric-value {
            font-size: 2.2rem; 
            font-weight: 700;
            color: black;
            margin-bottom: 5px; 
        }
        
        .metric-increase {
            font-size: 1rem;
            font-weight: 700;
            color: #4CAF50; /* Green for increase */
        }

        /* ---------------------------------------------------- */
        /* Footer Styling */
        /* ---------------------------------------------------- */
        footer {
            margin-top: auto; /* Push footer to the bottom */
            background-color: #000000ff; /* Dark background */
            color: white; /* White text */
            padding: 20px 60px;
            text-align: center;
            border-top: 5px solid black; /* Separator line */
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #f0f0f0; /* Lighten on hover */
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="content-wrap">
        <nav>
            <a href="home.php" class="home-link">Home</a> 
            <div class="right-nav"> 
                <a href="settings.php">Settings</a> 
                <form action="search.php" method="get">
                    <input type="text" placeholder="Search in site" name="query">
                    <button type="submit"><i class="fas fa-search"></i></button> 
                </form>
            </div>
        </nav>
        
        <main>
            <div class="profile-container">
                <div class="profile-image">
                    <img src="/images/orhii.jpg" alt="Profile Picture"> 
                </div>
                <div class="profile-info">
                    <h2>John Doe</h2> <p class="categories">Fitness Enthusiast, Powerlifter</p> <p class="bio">Keep pushing your limits!</p> </div>
            </div>
            
            <div class="buttons-container">
                <button class="hollow-button">Join a Community</button> <button class="filled-button">Start New Challenge</button> </div>
        </main>
        
        <div class="separator">
            <hr class="line">
            <div class="quote-container">
                <?php echo $randomQuote; ?>
            </div>
            <hr class="line">
        </div>
        
        <div class="program-section">
            <h2>PROGRAM</h2>
            <p><?php echo $randomProgram; ?></p>
            <a href="program.php" class="program-button">View Detailed Program</a>
        </div>
        
        <div class="goal-progress-section">
            <div class="goal-progress-left">
                <h2>Goal Progress</h2>
                <p>Current goals and progress towards them.</p>
            </div>
            <div class="goal-progress-right">
                <?php foreach ($goals as $index => $goal): ?>
                    <div class="goal-item">
                        <div class="goal-name"><?php echo $goal['name']; ?></div>
                        <div class="goal-details">
                            <span class="goal-target">Target: <?php echo $goal['target']; ?> kg</span>
                            <span class="goal-progress">Progress: <?php echo $goal['progress']; ?>%</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="metrics-section">
            <h2>Performance Metrics</h2>
            <p class="subtitle">Track your progress in different lifts.</p>
            
            <a href="workouthistory.php" class="view-history-button">View History</a>
            
            <div class="metrics-row">
                <?php 
                // Labels for the three lifts
                $metric_labels = ["Squat", "Bench Press", "Deadlift"];
                
                // Dummy data for visual increase (since no historical data exists)
                $metric_increases = ["+5 kg", "+2.5 kg", "+7.5 kg"];
                
                for ($i = 0; $i < count($goals) && $i < 3; $i++):
                    $goal = $goals[$i];
                    $label = $metric_labels[$i];
                    $increase = $metric_increases[$i];
                    
                    // Calculate the achieved weight (Current Progress percentage of Target Weight)
                    $achieved_weight = round(($goal['progress'] / 100) * $goal['target']);
                ?>
                    <div class="metric-container">
                        <div class="metric-label"><?php echo $label; ?></div>
                        <div class="metric-value"><?php echo $achieved_weight; ?> kg</div>
                        <div class="metric-increase"><?php echo $increase; ?></div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="footer-links">
            <a href="privacy.php">Privacy Policy</a>
            <a href="terms.php">Terms of Service</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </footer>
</body>
</html>