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
define( 'AUTH_KEY',         '=+.0q-NPh<GOgk@}JoV=qdf*j6Ux0e0t_!?r&51FA&Ps04G]b:M.xaRs+yNjds$t' );
define( 'SECURE_AUTH_KEY',  'sddIG$p%SiOOfK3h@~m;yTohbp6B K3P?@}f2- ^,!cGO~9}_S&J$~dVLKTQ94]}' );
define( 'LOGGED_IN_KEY',    '()`t&]`?gMhx6K-b0-@QSS;FyFA?;t4#w/)#lusCsZA$s&:<)}[8[~>qPVIZ>F0i' );
define( 'NONCE_KEY',        'xmBglGVl 4!:[|t%c9Xb]C*@W2GFE:JfeS1woNAckm7/;vj;1=iO1&jD&OJFS?.Z' );
define( 'AUTH_SALT',        'LM$B9-6Vax(G>GPR8IJ9Ers{$%]{zylM9LhVt;!pTP-J?Z7;mX,Ss6n>qeIdB-ZP' );
define( 'SECURE_AUTH_SALT', 'YrO3I1y/x`{u9@qx=r8X]tMqT,l`uMf+P07(Q?cx-aL`u(6t&?vrLsTo&zb/9+qI' );
define( 'LOGGED_IN_SALT',   '/NABf5+d36RyP 9iVRbswu[Hm,,IdN.0:eIrBxOTQ;&f;80`]pFzMD@tX&yqFfB/' );
define( 'NONCE_SALT',       'MQ7s@9lON=FVBbnrl]R|fP_Mg}r[XX_NuN#}5KJ)Mrei@t-B*)Bu-8xSnREhkDg)' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
