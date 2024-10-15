<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="atv2.css">
</head>
<body>
    <main>

<?php

    $dolla = $_POST['dola'];

    if(isset($_POST['dola']))
    DtoR($dolla);
    {

function DtoR ($dolla){
return ($dolla*5.66 );

}

echo "$dolla Dolares  são ".DtoR($dolla), " Reais";
}   
?>

</main>
    
</body>
</html>