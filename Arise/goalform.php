<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goals Form</title>
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

    .goals-container {
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

    .goal-option {
      display: block;
      margin-bottom: 10px;
      padding: 10px;
      background-color: #333;
      border: 2px solid #ff0000;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .goal-option:hover {
      background-color: #555;
    }

    input[type="radio"] {
      display: none;
    }

    input[type="radio"]:checked + .goal-option {
      background-color: #ff0000;
      color: #000;
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
  <div class="goals-container">
    <h1>Your goal is...</h1>
    <form id="goalsForm" method="POST" action="goals.php">
      <div class="form-group">
        <label>
          <input type="radio" name="goal" value="Increase my numbers in Powerlifting" required>
          <span class="goal-option">Increase my numbers in Powerlifting</span>
        </label>
        <label>
          <input type="radio" name="goal" value="Gain muscle">
          <span class="goal-option">Gain muscle</span>
        </label>
        <label>
          <input type="radio" name="goal" value="Lose weight">
          <span class="goal-option">Lose weight</span>
        </label>
        <label>
          <input type="radio" name="goal" value="Improve stamina">
          <span class="goal-option">Improve stamina</span>
        </label>
      </div>
      <button type="submit">Complete Registration</button>
    </form>
  </div>
  <a href="questions.php" class="returnButton">Back</a>
</body>
</html>
