# ChatZilla Custom Smilies

ChatZilla is an IRC client that is an extension to FireFox. This uses ChatZilla's flexibility to point to custom CSS within its preferences. All users would need to point to the same CSS file to get the benefit.

## Installation

Files included:
+ chatzilla.css - This is the main CSS file that will be linked from within ChatZilla's preferences
+ xml-js.xml - This is the javascript embedded within XML that will be allowed to run within the ChatZilla window. This file is linked from within the CSS file using -moz-binding: url().
+ smiles.php - An SVG file embedded with a PHP file for the smilies toggle button

You will need to upload the CSS and XML file along with any smilies or images onto a server or somewhere that can be publicly accessed. The URL to this location shouldn't change much either otherwise you'd need to give out the new link each time. The setting within ChatZilla for the CSS is ChatZilla > Preferences > Global Settings > Appearance > Current Motif

## Usage

This is the main configurable area for adding smilies. Instances of :crazy: will be replaced with the appropriate image in the below example.

```js

var find = [
	/:crazy:/, 	
	/:roll:/,	
	/:illcontent:/	
];
var replaceWith = [
	"<img src=\"http://www.lighthead.net/mf/icons/smilies/crazy.gif\">", 	
	"<img src=\"http://www.lighthead.net/mf/icons/flashemotes/16x16/smi_roll.gif\">", 	
	"<img src=\"http://www.lighthead.net/mf/icons/flashemotes/16x16/smi_ill_content.gif\">"	
];

```
[![chatzilla-screenshot](http://www.lighthead.net/images/chatzilla-custom-smilies.png)](http://www.lighthead.net/images/chatzilla-custom-smilies.png)
