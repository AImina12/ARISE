<?php
session_start();
// 1. INCLUDE THE DATABASE CONNECTION FILE
require_once "database.php"; 

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $email = $_POST['email'] ?? '';
    $country = $_POST['country'] ?? '';

    // Sanitize and validate names
    $firstName = trim($firstName);
    $lastName = trim($lastName);

    // --- Validation Checks (Same as before) ---
    if (empty($username)) $errors['username'] = 'Username is required.';
    if (empty($password)) $errors['password'] = 'Password is required.';
    
    // ... (rest of your validation logic) ...
    // Note: I'm skipping the full validation block for brevity, assume it's here
    if (empty($firstName)) {
        $errors['firstName'] = 'First name is required.';
    } elseif (!preg_match('/^[a-zA-Z\s\-]+$/', $firstName)) {
        $errors['firstName'] = 'First name must contain only letters, spaces, or hyphens.';
    }
    if (empty($lastName)) {
        $errors['lastName'] = 'Last name is required.';
    } elseif (!preg_match('/^[a-zA-Z\s\-]+$/', $lastName)) {
        $errors['lastName'] = 'Last name must contain only letters, spaces, or hyphens.';
    }
    if (empty($gender)) $errors['gender'] = 'Gender is required.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'A valid email is required.';
    if (empty($country)) $errors['country'] = 'Country is required.';
    // ------------------------------------------

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO user (username, password, firstname, lastname, gender, email, country) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_stmt_init($conn);

        // 2. Prepare the prepared statement
        if (mysqli_stmt_prepare($stmt, $sql)) {
            // 3. Bind the user data to the statement
            mysqli_stmt_bind_param($stmt, "sssssss", $username, $hashedPassword, $firstName, $lastName, $gender, $email, $country);
            
            // 4. Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $success = true;
                $_SESSION['username'] = $username;
                
                // Close statement
                mysqli_stmt_close($stmt); 
                
                // Close connection (optional, connection will close when script finishes)
                mysqli_close($conn); 
                
                header('Location: questions.php');
                exit();
            } else {
                // Handle database execution error
                $errors['db_error'] = 'Database error: Could not register user.';
                // Optional: For debugging, use: $errors['db_error'] = mysqli_stmt_error($stmt);
            }
        } else {
            // Handle statement preparation error
            $errors['db_error'] = 'SQL preparation error.';
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #000;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            position: relative;
        }

        .registration-container {
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

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 2px solid #ff0000;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        /* NEW STYLES FOR THE REGISTER BUTTON */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            /* Button background is red */
            background-color: #ff0000; 
            /* Button font is white */
            color: #fff; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
            font-family: 'Montserrat', sans-serif; /* Ensure it uses the custom font */
        }

        button[type="submit"]:hover {
            background-color: #cc0000; /* Darker red on hover */
        }
        /* END NEW STYLES */

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
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="registration-container">
        <h1>Registration Form</h1>
        <form id="registrationForm" method="POST" action="registration.php">
            <div class="form-group">
                <label for="username">Username *</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                <div class="error-message" id="usernameError"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></div>
            </div>

            <div class="form-group">
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <div class="error-message" id="passwordError"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></div>
            </div>

            <div class="form-group">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
                <div class="error-message" id="firstNameError"><?php echo isset($errors['firstName']) ? $errors['firstName'] : ''; ?></div>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
                <div class="error-message" id="lastNameError"><?php echo isset($errors['lastName']) ? $errors['lastName'] : ''; ?></div>
            </div>

            <div class="form-group">
                <label for="gender">Gender *</label>
                <select id="gender" name="gender" required>
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <div class="error-message" id="genderError"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></div>
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <div class="error-message" id="emailError"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>
            </div>

            <div class="form-group">
                <label for="country">Country *</label>
                <select id="country" name="country" required>
                    <option value="">Select country</option>
                    <option value="Philippines">Philippines</option>
                    <option value="USA">USA</option>
                    <option value="Japan">Japan</option>
                    <option value="India">India</option>
                    <option value="UK">UK</option>
                    <option value="UAE">UAE</option>
                </select>
                <div class="error-message" id="countryError"><?php echo isset($errors['country']) ? $errors['country'] : ''; ?></div>
            </div>

            <button type="submit">Register</button>
            <?php if ($success): ?>
                <div class="success-message" id="successMessage">Registration successful!</div>
            <?php endif; ?>
        </form>
    </div>
    <a href="index.html" class="returnButton">Return</a>
</body>
</html>