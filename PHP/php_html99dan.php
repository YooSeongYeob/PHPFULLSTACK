<html>
<body>
<center>
    <table border ="1">
        <tr>
            <td>&nbsp;</td>


<?php
        for ($cols=1; $cols<=9; $cols++)
            {
                print "<td>$colds</td>";
            }
?>

        </tr>

<?php
    for($rows=1; $rows<=9; $rows++)
            {
                print"<tr>\n";
                print"<td$rows</td>";
                for ($cols=1; $cols<=9; $cols++)
            
            {
                print"<td>".$rows*$cols."</td>";
            }
                print "</tr>\n";
            }
?>
    
        </table>
        </center>
        </body>
        </html>