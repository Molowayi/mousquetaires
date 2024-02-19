<?php
// echo "a";
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
$menu=simplexml_load_file("menu.xml") or die("Error: Cannot create object");

echo "<pre>";
print_r($menu);
echo "</pre>";
// echo "b";
echo $xml["to"];

echo $menu->onglet[0]->principal . "<br>"; 
echo $menu->onglet[0]["lien"];
?>