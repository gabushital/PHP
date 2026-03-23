<html>
    <head>
        <title>
            Logical Operator
        </title>
    </head>
<body>
    <?php
    $a=10;
    $b=20;
    echo"<br>AND: ".($a<$b&&$a==$b);
    echo"<br>OR: ".($a>=$b||$a!=$b);
    echo"<br>NOT: ".(!($a==$b));
    ?>
</body>
</html>