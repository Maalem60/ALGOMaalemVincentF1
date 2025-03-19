
<?php
function alimenterListeDeroulante($elements)
{
    echo '<select>';
    foreach ($elements as $element) {
        echo '<option value="' . $element . '">' . $element . '</option>';
    }
    echo '</select>';
}

$elements = ["Monsieur", "Madame", "Mademoiselle"];
alimenterListeDeroulante($elements);
?>