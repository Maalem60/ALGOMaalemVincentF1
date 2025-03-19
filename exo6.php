<?php
function alimenterListeDeroulante($elements)
{
    $result = '<select>';
    foreach ($elements as $element) {
        $result .= '<option value="' . $element . '">' . $element . '</option>';
    }
    $result .= '</select>';
    return $result;
}

$elements = ["Monsieur", "Madame", "Mademoiselle"];
echo '<span style="color:#FDC030">' . alimenterListeDeroulante($elements) . '</span>';
