<!DOCTYPE html>

<html>

<head>
</head>

<body>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="0px">
        <?php
        for ($z = 0; $z < 10; $z++) {
            echo "<tr>";
            for ($ha = 0; $ha <= $z; $ha++) {
                echo "<td height=30px width=30px bgcolor=black></td>";
            }
            echo "<tr>";
        }
        ?>
    </table>

</body>

</html>