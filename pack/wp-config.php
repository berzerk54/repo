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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpressuser' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'SomeP@ssword' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '#$ky0+Gsy6y<0nG,l.;p,h_ r,zP,Uz{d3j[M]w@1}D%@k7h_n.=;Lr3`R~>lkOn' );
define( 'SECURE_AUTH_KEY',  '1wtgk?)|vu*)J5<c0 KC%6)2Oie|UX9!bW#?pam[Am2Xf6r$&)OW]r2*et/8:G]:' );
define( 'LOGGED_IN_KEY',    'Eo_aNy^]Z8eF!xDl::fb,zWo)),d,M-WT& mgsC)(hgYDgkUj,[4Z6Tl{B&a[*,t' );
define( 'NONCE_KEY',        'HwqYc>5U/wxeH#)6~X_-;YD)e{P0K 0YA;xK!N;!UM;h=ZBacbIf`YVPUZ}No{O]' );
define( 'AUTH_SALT',        '>zxP?x j$Bg#e2(?FQ,L0!D,hcX*P!@}4w.)pDR~h*hC,gq>P~=:#[9{c;Ixkpo,' );
define( 'SECURE_AUTH_SALT', 'n(X5f OUVVY45ShP2)E+n8}$[<T$W@%R8MwWXf|{x(e3.Max$~9JN+[3:9U,8oTf' );
define( 'LOGGED_IN_SALT',   ']Bb?+OMo)w:{D#4^!x}!=ko:*QyZj JXRPb+@EQ=<_Y_ *Pdylk;AH0.BD70_h}5' );
define( 'NONCE_SALT',       'lo5r$v3g!s7chJZ[w0g5?-o207+V!h,ZU.yXI8CLV@_-8X4rrXHv[7=W|$&HGh2#' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
 define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
