Config file wp-config:

define('DB_NAME', getenv('DB_NAME'));

/** User db MySQL */
define('DB_USER', getenv('DB_USER'));


/** password MySQL */
define('DB_PASSWORD', getenv('DB_PASS'));


/** name host MySQL */
define('DB_HOST', getenv('DB_HOST'));