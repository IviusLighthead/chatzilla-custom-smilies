<?php
header("Content-type: image/svg+xml");

if (isset($_GET['b']))
	$base = $_GET['b'];
else
	$base = "0,0,0,1";
	
if (isset($_GET['i']))
	$icon = $_GET['i'];
else
	$icon = "255,255,255,1";
?>

<svg id="Layer_1" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 853 314" xml:space="preserve" viewBox="0 0 229.54401 229.54401" version="1.1" y="0px" x="0px" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"><metadata id="metadata3426"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata>
<defs>
	<style type="text/css"><![CDATA[
		.base_art { fill: rgba(<?php echo $base; ?>); }
		.icon_art { fill: rgba(<?php echo $icon; ?>); }
	]]></style>
</defs>
<circle class="base_art" cy="114.77" cx="114.77" r="114.77" />
<path class="icon_art" d="m196.57 113.77c0 45.03-36.504 81.535-81.534 81.535-45.031 0-81.535-36.505-81.535-81.535s36.504-81.534 81.535-81.534c45.03-0.001 81.534 36.503 81.534 81.534zm-104.27-42.209c0-2.196-1.781-3.977-3.977-3.977h-0.047c-2.195 0-3.977 1.781-3.977 3.977v29.046c0 2.196 1.781 3.977 3.977 3.977h0.047c2.195 0 3.977-1.781 3.977-3.977v-29.046zm54 0c0-2.196-1.781-3.977-3.977-3.977h-0.047c-2.195 0-3.977 1.781-3.977 3.977v29.046c0 2.196 1.781 3.977 3.977 3.977h0.047c2.195 0 3.977-1.781 3.977-3.977v-29.046zm-83.159 55.307c0 29.497 23.912 53.409 53.409 53.409 29.498 0 53.41-23.912 53.41-53.409"/></svg>
