<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dark Mode</title>
    <style>
        /* Dark mode styles */
        body {
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1f1f1f;
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #1f1f1f;
            padding: 10px;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        h1, p {
            margin: 0;
        }

        /* Add more dark mode specific styles */
        a {
            color: #bb86fc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Dark Mode Page</h1>
    </header>

    <div class="container">
        <p>This page is styled with dark mode in mind, meaning the background is dark, and the text is light.</p>
        <a href="#">Click me to test link in dark mode</a>
    </div>

    <footer>
        <p>Laravel Dark Mode Example</p>
    </footer>
</body>
</html>
