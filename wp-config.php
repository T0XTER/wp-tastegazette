<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_tastegazette' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'serg' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Gbnnfrec^40917' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(S|&c_db-x8.[7^~zFg-VSbG,sh|r`^eb_2T`hm=`;LA-4vPwh|{I~2Q65yn(h@J');
define('SECURE_AUTH_KEY',  'cWS6 z*V<@To|Z{]-jnYiK,1c|-oz`A88u37+5T|Ei_z!1jIM {JX0zWeBHQT^Ia');
define('LOGGED_IN_KEY',    'e>$4iZmG:9p6ZQ |S2F(>6*swM}rqM#5El*b#-!~>F%wQ$.g~Vv@Ib9A(dbr3`F+');
define('NONCE_KEY',        '%kR.1a,2D.n`X-?2ai65<vw.hbK{i-xksk~72yvpR s[^wdL.Jb<|,?Err?o|&_I');
define('AUTH_SALT',        ';.Lt2.ZVgWN(r~WqHy+i}TH+cYh7E3oCQBaJ6#V!p-gnkd+-a=d$r~  }ihXkNe@');
define('SECURE_AUTH_SALT', ' _I2BQ4^ilXZQ|Qg Q|!S9Or.2]p;KW_Z2uE8dln,*0K}+:xxk[$wv1~HD&#V:<l');
define('LOGGED_IN_SALT',   'neU:P>|B*]MmsD<vn%84d<37l$-z,`G,YrSM9{_7GkTje=+Kc,sI|bLTd2MZFV[o');
define('NONCE_SALT',       'aV[~0( byo?47dxAh?-`p^&xrC(}{,iB3?%NmO_+bOq5sQd8C8hfEpD~vO]J]]a%');


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
