<?php

define( "MEDIAWIKI", true );

# A few constants that might be needed during LocalSettings.php
define( 'DBO_DEBUG', 1 );
define( 'DBO_NOBUFFER', 2 );
define( 'DBO_IGNORE', 4 );
define( 'DBO_TRX', 8 );
define( 'DBO_DEFAULT', 16 );

# Virtual namespaces; these don't appear in the page database:
define("NS_MEDIA", -2);
define("NS_SPECIAL", -1);

# Real namespaces:
define("NS_MAIN", 0);
define("NS_TALK", 1);
define("NS_USER", 2);
define("NS_USER_TALK", 3);
define("NS_WP", 4);
define("NS_WIKIPEDIA", 4);
define("NS_WP_TALK", 5);
define("NS_WIKIPEDIA_TALK", 5);
define("NS_IMAGE", 6);
define("NS_IMAGE_TALK", 7);
define("NS_MEDIAWIKI", 8);
define("NS_MEDIAWIKI_TALK", 9);
define("NS_TEMPLATE", 10);
define("NS_TEMPLATE_TALK", 11);
define("NS_HELP", 12);
define("NS_HELP_TALK", 13);
define("NS_CATEGORY", 14);
define("NS_CATEGORY_TALK", 15);

?>
