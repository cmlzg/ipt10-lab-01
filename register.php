<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0471ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: auto;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold; 
        }

        
        .radio-group label {
            font-weight: normal; 
        }

        input[type="text"], input[type="email"], input[type="date"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #220606;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        textarea {
            height: 100px;
        }

        .radio-group, .button-group {
            margin: 10px 0;
        }

        .button-group {
            text-align: center;
        }

        .button-group input {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-group input[type="reset"] {
            background-color: #6c757d;
        }

        .button-group input:hover {
            opacity: 0.8;
        }

        .button-group input[type="reset"]:hover {
            opacity: 0.8;
        }

        img.logo {
            display: block;
            margin: 0 auto 20px;
            max-height: 200px;
            width: auto; 
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="imgs/auflogo.png" alt="AUF Logo" class="logo">
        <h1>AUF Student Registration Form</h1>
        <form action="summary.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label>Sex:</label>
            <div class="radio-group">
                <label><input type="radio" name="sex" value="Male"> Male</label>
                <label><input type="radio" name="sex" value="Female"> Female</label>
            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <label for="department">College Department:</label>
            <select id="department" name="department">
                <option value="Engineering">Engineering</option>
                <option value="Business">Business</option>
                <option value="Education">Education</option>
                <option value="Computing Studies">Computing Studies</option>
                <option value="Arts and Communication">Arts and Communication</option>
            </select>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program">

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile">

            <div class="button-group">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>
