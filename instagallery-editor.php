<?php
$xml = simplexml_load_file('ig-data.xml');

if (isset($_POST['gram'])){
    $xml->addChild('instagram', $_POST['gram']);
    $xml->saveXML();

    /**
     * TODO: Save modified XML File
     */
    echo 'add: ' . $_POST['gram'];
}


echo '<pre>';
print_r($xml);
echo '</pre>';

?>
<form method="post">
    <input type="text" name="gram" placeholder="Enter IG Code...">
    <button type="submit">Submit</button>
</form>
