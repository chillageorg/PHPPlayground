<?php

if ($handle = opendir('/')) {
	echo "Directory handle: $handle\n";
	echo "Files:<br />";

	/* Das ist der korrekte Weg, ein Verzeichnis zu durchlaufen. */
	while (false !== ($file = readdir($handle))) {
		echo $file.'<br />';
	}

	/* Dies ist der FALSCHE Weg, ein Verzeichnis zu durchlaufen.
	 while ($file = readdir($handle)) {
	 echo "$file\n";
	 }
	 */
	closedir($handle);
}


?>