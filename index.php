<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stucher</title>
</head>

<body>

    <script>
        var inputPass=prompt('Please enter password to proceed...');
        if(inputPass=='Ankit'){
            <?php include 'landingPage.php'?>
        }
        else{
            document.write('<center><h1>Access Denied</h1></center>');
        }
    </script>
</body>

</html>