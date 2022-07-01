<!-- Name: forms.php -->
<!-- Comment: Forms demo -->
<!-- Na podstawie: https://www.youtube.com/watch?v=I6_hkqq6Vk0 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forms</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <table>
        <tr>
            <td>
                <p>GET</p>
                <form action="forms.php" method="get">
                    <p>Login: <input type="text" name="mylogin" id=""></p>
                    <input type="submit" value="Wyslij">
                </form>
            </td>
            <td>
                <p>POST</p>
                <form action="forms.php" , method="post">
                    <p>Login: <input type="text" name="mylogin" id=""></p>
                    <input type="submit" value="Wyslij">
                </form>
            </td>
        </tr>
    </table><br><br>    

    <?php 

    if(isset($_GET['mylogin'])){
        echo '<b>GET</b><br><br>';
        echo 'LOGIN: ';
        echo $_GET['mylogin'];
    }
    else if(isset($_POST['mylogin'])){
        echo '<b>POST</b><br><br>';
        echo 'LOGIN: ';
        echo $_POST['mylogin'];
    }
    else{
        echo "Nie wyslano formularza";
    }

    ?>

</body>

</html>