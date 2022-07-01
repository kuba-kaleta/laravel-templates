<!-- Name: js_demo.php -->
<!-- Comment: JavaScript demo -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <button type="button" onclick='document.getElementById("demo").innerHTML = "Click the button below"'>Click Me!</button>

    <p id="demo">JavaScript can change HTML content.</p>

    <button type="button" onclick='document.getElementById("demo").innerHTML = "Click the button above"'>Click Me!</button>

    <button type="button" onclick="document.write('surprise')">Try me</button>

    <script>
        // alert(5 + 5);
    </script>

</body>

</html>