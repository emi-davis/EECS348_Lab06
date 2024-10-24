<html>
<body>

<?php
$size = $_POST["size"];

echo "<table>";
echo "<tr><td></td>";
for ($i = 1; $i <= $size; $i++) {
    echo "<td><strong>$i</strong></td>";
}
echo "</tr>";
for ($i = 1; $i <= $size; $i++) {
    echo "<tr>";
    echo "<td><strong>$i</strong></td>";
    for ($j = 1; $j <= $size; $j++) {
        echo "<td>".($i*$j)."</td>";
    }
    echo '</tr>';
}
echo "</table>";
?>

</body>
</html>