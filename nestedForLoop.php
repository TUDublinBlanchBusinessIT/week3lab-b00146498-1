<?php
echo "<TABLE border='1'>";
for ($i=1;$i<=15;$i++) {
    echo "<TR>";
    for ($j=1; $j<=20; $j++){
        echo "<TD>row$i, col$j</TD>";
    }
    echo"</TR>";
}
echo"</TABLE>";
?>