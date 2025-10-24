<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: registration.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $experienceLevel = $_POST['experienceLevel'] ?? '';
    $metricSystem = $_POST['metricSystem'] ?? '';
    $height = $_POST['height'] ?? '';
    $bodyweight = $_POST['bodyweight'] ?? '';
    $squat = $_POST['squat'] ?? '';
    $benchPress = $_POST['benchPress'] ?? '';
    $deadlift = $_POST['deadlift'] ?? '';

    $questionsData = "Username: {$_SESSION['username']}, Experience: $experienceLevel, Metric: $metricSystem, Height: $height, Bodyweight: $bodyweight, Squat: $squat, Bench: $benchPress, Deadlift: $deadlift\n";
    file_put_contents('questions.txt', $questionsData, FILE_APPEND);
    
    session_destroy();
    echo "<script>alert('Questions saved successfully!');</script>";
    echo "<script>window.location.href = 'registration.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questions Form</title>
  <style>
    body {
      font-family: 'Alumni Sans', sans-serif;
      background-color: #000;
      color: #fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      position: relative;
    }

    .questions-container {
      background-color: rgba(20, 20, 20, 0.95);
      padding: 30px 40px;
      border: 2px solid #ff0000;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
      width: 400px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    select, input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 2px solid #ff0000;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
    }

    .error-message {
      color: #ff0000;
      font-size: 0.9em;
      margin-top: 5px;
    }

    .success-message {
      color: #00ff00;
      font-size: 1em;
      margin-top: 10px;
    }

    .returnButton {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 4.3rem;
      padding: 10px 20px;
      background-color: rgba(20, 20, 20, 0.95);
      color: #fff;
      border: 2px solid #ff0000;
      border-radius: 5px;
      text-decoration: none;
      font-family: 'Alumni Sans', sans-serif;
      font-size: 25px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="questions-container">
    <h1>Questions Form</h1>
    <form id="questionsForm" method="POST" action="questions.php">
      <div class="form-group">
        <label for="experienceLevel">Are you a:</label>
        <select id="experienceLevel" name="experienceLevel" required>
          <option value="">Select your experience level</option>
          <option value="Beginner">Beginner</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Experienced">Experienced</option>
        </select>
      </div>

      <div class="form-group">
        <label for="metricSystem">Preferred metric system:</label>
        <select id="metricSystem" name="metricSystem" required>
          <option value="">Select your preferred system</option>
          <option value="Metric">Metric (kg, cm)</option>
          <option value="Imperial">Imperial (lbs, inches)</option>
        </select>
      </div>

      <div class="form-group">
        <label for="height">Height:</label>
        <input type="text" id="height" name="height" placeholder="Enter your height (e.g., 170 cm)" required>
      </div>

      <div class="form-group">
        <label for="bodyweight">Bodyweight:</label>
        <input type="text" id="bodyweight" name="bodyweight" placeholder="Enter your bodyweight (e.g., 70 kg)" required>
      </div>

      <div class="form-group">
        <label for="squat">Current Squat Record:</label>
        <input type="text" id="squat" name="squat" placeholder="Enter your squat record (e.g., 100 kg)" required>
      </div>

      <div class="form-group">
        <label for="benchPress">Current Bench Press Record:</label>
        <input type="text" id="benchPress" name="benchPress" placeholder="Enter your bench press record (e.g., 80 kg)" required>
      </div>

      <div class="form-group">
        <label for="deadlift">Current Deadlift Record:</label>
        <input type="text" id="deadlift" name="deadlift" placeholder="Enter your deadlift record (e.g., 150 kg)" required>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>
  <a href="registration.php" class="returnButton">Return</a>
</body>
</html>
