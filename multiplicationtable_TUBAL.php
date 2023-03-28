<!DOCTYPE html>
<head>
</head>

<style>
body {
    background: black; color: white; font-family: 'Century Gothic'
}

ul {
    list-style: none;
}

li {

    border-style: solid;
    width: 100px;
}


</style>
<body>
<h1><?php echo "Multiplication Table" ?> </h1>

<?php
 $number = 2;

 echo "<ul>";

 for($i = 1; $i <= 10; $i++)
{
    echo "<li> $number x $i = "  . $number * $i . "</li>";
}
echo "</ul>";
?>

</body>

</html>