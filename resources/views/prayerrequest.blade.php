<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Share Your Prayer Request</h2>
        <p>At our church, we believe in the power of prayer. We invite you to share your prayer requests with us, so we
            can lift them up together as a community.</p>
        <p>Fill out the form below to submit your prayer request:</p>
        <form action="submit_prayer_request.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email (optional):</label>
            <input type="email" id="email" name="email">

            <label for="phone">Your Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="location">Your Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="whom">Whom We Are Praying To:</label>
            <input type="text" id="whom" name="whom" required>

            <label for="prayer">Your Prayer Request:</label>
            <textarea id="prayer" name="prayer" required></textarea>

            <input type="submit" value="Submit Prayer Request">
        </form>
        <p>We believe that no prayer is too small or too big. Your request will be kept confidential and will be prayed
            over by our church community.</p>
    </div>

</body>

</html>
