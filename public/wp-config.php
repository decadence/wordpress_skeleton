<?
// задаём новые пути
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');


define('WP_DEFAULT_THEME', 'main');
define('WPLANG', 'ru_RU');

define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '12345678');
define('DB_HOST', 'localhost:3307');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'p;R- ss_?JUKgv?tHyrI&ZlS[:tkGX1emYjum~o&z?+F2dc1; 1V#^t*0lLK0+O+');
define('SECURE_AUTH_KEY', 'Z.nZj~;@&6Y7}6XuG^.nRLN-}akS(vUm 3+Iv~2:kE@Fo1bXPd8p#Qfju_oJVOzb');
define('LOGGED_IN_KEY', 'Z!SJ3sqL0%k4|QF7EOd8,w@eWPZGeKJM8Pz<.7kKzHG3>GAVVgM8~?ufQiUTO83)');
define('NONCE_KEY', 'fn58v)p]-b6SnBv(oj7k/AGX-|gqyVrc]q?/8p6w]OEnAi(?RGzg.,zi*[6`0<3)');
define('AUTH_SALT', 'x+%5Gs>V 7f$?=eQcuh1% SOELcP>UyU&;U^v1#fPW{A&0wOpS|8A8(d!<JzrP-4');
define('SECURE_AUTH_SALT', '4xwF14Aps>m8KlLvDtvDZ~PiSmF,N+/Y/*7w:hCpZX(J~$I6)=gQa;97q[DIC/An');
define('LOGGED_IN_SALT', '}<L0MGHzQlWxazrA (/Zdv]-oHNGk4{/XoCS/t>]fR+K.T?akYL<l/|$y`Ou5pqw');
define('NONCE_SALT', '#mEx&]D}m.:9FVYnl6pTz3ZvLS(e@a{&W|Gf9Mnx)l]7HMDnw{;<gtoJ3m_%]G)7');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

