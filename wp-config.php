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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*gp+YH9?wUjmImrO#wv^~mmHG~/|<)GYd?s[x}UVZPF]gHgrbGL5;;7I)dPhY3>9');
define('SECURE_AUTH_KEY',  'kLIH5ELC(#mc/)pcsS/g{X{PY2.<4!.Zo8w(PvY&A3T|%E0:%Dwj*$v|qJm!&TH^');
define('LOGGED_IN_KEY',    'D1YZ-5TU(AfETZe^I#70j+X$EG2z=c|(H5${n0n+o/iX1jBQf0eCAe5=XpEz[WHM');
define('NONCE_KEY',        'Rpc&v-k{FgTn6iY)3In@Bbz]#r%g~Q7SJVcPZnVse~5S{y y&4Wvi{u&>V~&urp=');
define('AUTH_SALT',        '8q1[${Vj##Z36?b5rfIL6K7AJJc5SeQSp<P1Z=]dmnCNZMZEQ71=dHu)z995/Icn');
define('SECURE_AUTH_SALT', 'LOCcJ;Iy<2 44{i4{O`iq2*E5uck~e=Wu/>8_r9aV+qAA6B&(Y8P0h>T_zW@/M=f');
define('LOGGED_IN_SALT',   'g]r|glhDQIfSbt5^8QMZXaoG|y:yLu:PkxI:.v:Tk[t?=pHWPF%b?zUT74[!E5&]');
define('NONCE_SALT',       '[F|Wh%*<`n4ro?4q<3X3SrFsnLL7cah<K5(^!^mp-P`r)^pHEA_#t9T^BlVW,@bC');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
