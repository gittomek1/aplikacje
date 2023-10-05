<h3>Napoje</h3>
<ol>
    <li>Kawa</li>
    <li>Herbata
        <ul>
            <li>Black Tea</li>
            <li>Green Tea</li>
        </ul>
    </li>
    <li>yerba</li>
</ol>
<br><br>
<?php
    echo "Pierwszy sposób";
    echo "<h3>Napoje</h3>
    <ol>
        <li>Kawa</li>
        <li>Herbata
            <ul>
                <li>Black Tea</li>
                <li>Green Tea</li>
            </ul>
        </li>
        <li>yerba</li>
    </ol>
    <br><br>"
?>

<?php
    echo "drugi sposób";
    $s = "<h3>Napoje</h3>
    <ol>
        <li>Kawa</li>
        <li>Herbata
            <ul>
                <li>Black Tea</li>
                <li>Green Tea</li>
            </ul>
        </li>
        <li>yerba</li>
    </ol>
    <br><br>";

    printf("[%s]\n",     $s);
?>

<?php
    echo "trzeci sposób";
    $var = "<h3>Napoje</h3>
    <ol>
        <li>Kawa</li>
        <li>Herbata
            <ul>
                <li>Black Tea</li>
                <li>Green Tea</li>
            </ul>
        </li>
        <li>yerba</li>
    </ol>
    <br><br>";

    echo "$var";
?>