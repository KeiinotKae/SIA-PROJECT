<?php
$Email = $password = "";
$EmailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is Required";
    } else {
        $Email = $_POST["Email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is Required";
    } else {
        $password = $_POST["password"];
    }

    if ($Email && $password) {
        include("connections.php");

        $check_Email = mysqli_query($connections, "SELECT * FROM `login_tbl` WHERE Email='$Email'");
        $check_Email_row = mysqli_num_rows($check_Email);

        if ($check_Email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_Email)) {
                $db_password = $row["password"];
                $db_Account_type = $row["Account type"];
                if ($password == $db_password) {
                    if ($db_Account_type == "1") {
                        echo "<script>window.location.href='admin.php';</script>";
                        exit;
                    } else {
                        echo "<script>window.location.href='user.php';</script>";
                        exit; 
                    }
                } else {
                    $passwordErr = "Incorrect password";
                }
            }
        } else {
            $EmailErr = "Email is not registered";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #3498db, #2c3e50);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .Login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .Login-container:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #333333;
        }

        .Login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            padding: 10px;
            margin: 8px 0;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease-in-out;
        }

        input:focus {
            border-color: #3498db;
        }

        .error-message {
            color: #e74c3c;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="Login-container">
        <h2>Login</h2>
       <form class="Login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input value="<?php echo $Email; ?>" type="email" id="Email" name="Email" placeholder="Email">
    <span class="error-message"><?php echo $EmailErr; ?></span>
    <br><br> 
    <input value="<?php echo $password; ?>" type="password" id="password" name="password" placeholder="Password">
    <span class="error-message"><?php echo $passwordErr; ?></span>
    <br><br>
    <input type="submit" value="Login">
</form>


    </div>
</body>
</html>


