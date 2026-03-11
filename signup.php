<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - User Registration</title>
    <style>
        /* Modern CSS styling for the database application */
 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
 
        .container {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
 
        form {
            padding: 40px;
        }
 
        fieldset {
            border: none;
            background: transparent;
            padding: 0;
        }
 
        legend {
            font-size: 1.75rem;
            font-weight: 600;
            color: #000000;
            text-align: center;
            margin-bottom: 30px;
            padding: 0;
            width: 100%;
        }
 
        label {
            display: block;
            font-weight: 500;
            color: #333333;
            margin-bottom: 8px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
 
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            font-size: 1rem;
            transition: all 0.2s ease;
            background: #ffffff;
            margin-bottom: 20px;
        }
 
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #000000;
            background: #ffffff;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
        }
 
        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background: #000000;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 10px;
        }
 
        input[type="submit"]:hover {
            background: #333333;
        }
 
        input[type="submit"]:active {
            background: #000000;
        }
 
        br {
            display: none;
        }
 
        /* Success message styling */
        .success-message {
            text-align: center;
            padding: 40px;
        }
 
        .success-message h1 {
            color: #000000;
            font-size: 2rem;
            margin-bottom: 20px;
            animation: fadeInUp 0.6s ease;
        }
 
        .success-message p {
            color: #666666;
            font-size: 1.1rem;
            margin-bottom: 30px;
            animation: fadeInUp 0.8s ease;
        }
 
        .back-link {
            display: inline-block;
            padding: 12px 24px;
            background: #000000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.2s ease;
            animation: fadeInUp 1s ease;
        }
 
        .back-link:hover {
            background: #333333;
            color: #ffffff;
        }
 
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
 
        /* Responsive design */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
 
            .container {
                border-radius: 4px;
            }
 
            form {
                padding: 30px 20px;
            }
 
            legend {
                font-size: 1.5rem;
            }
 
            input[type="text"],
            input[type="email"],
            input[type="password"] {
                padding: 12px;
            }
 
            input[type="submit"] {
                padding: 12px;
                font-size: 1rem;
            }
        }
 
        /* Error states */
        input.error {
            border-color: #000000;
            background: #f8f8f8;
        }
 
        input.error:focus {
            border-color: #000000;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
        }
 
        /* Loading state */
        input[type="submit"].loading {
            opacity: 0.7;
            cursor: not-allowed;
        }
 
        /* Form validation styling */
        .form-group {
            margin-bottom: 20px;
        }
 
        .error-message {
            color: #000000;
            font-size: 0.85rem;
            margin-top: 5px;
            display: none;
        }
 
        .form-group.error .error-message {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="create.php" method="POST">
            <fieldset>
                <legend>Sign Up</legend>

                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" id="fname" required>
                    <span class="error-message">Please enter your first name</span>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id="lname" required>
                    <span class="error-message">Please enter your last name</span>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                    <span class="error-message">Please enter a valid email address</span>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" name="gender" id="gender" placeholder="Male, Female, or Other">
                    <span class="error-message">Please enter your gender</span>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    <span class="error-message">Please enter a password</span>
                </div>

                <input type="submit" value="Sign Up">
            </fieldset>
        </form>
        <div style="text-align: center; margin-top: 20px; padding: 0 40px 40px;">
            <a href="admin.php" style="color: #666666; text-decoration: none; font-size: 0.9rem;">Admin Login</a>
        </div>
    </div>
</body>

</html>
