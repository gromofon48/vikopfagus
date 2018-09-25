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
define('DB_NAME', 'vikopfag_new');

/** Имя пользователя MySQL */
define('DB_USER', 'vikopfag_gromofo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'hjvfy5446196');

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
define('AUTH_KEY',         'Rc^ptQtrZh2$s]*<mo}at)E%S]#Eve;-+aFbLk{D8*c~XnZ=`c}?8ZIHj8z*<Zb7');
define('SECURE_AUTH_KEY',  'a@7lYf R#wgrjmCeG0cGF6AlUAfMB)CZ8bdXSc4U_RmuBL:!HW#Je}FZtRf~65@1');
define('LOGGED_IN_KEY',    '/wh*zTEduvNqa/UXi*olO1&MtSyUYjpe.QYzrI5;8nJ/[lgJqn7HxbPw<x~VT~H{');
define('NONCE_KEY',        'EO(oEKF2,5f,6(5&Yl8chG#i*sj^y61<|^yzN/f5+m^Cx!:/A-)xI_(N2z!~35;O');
define('AUTH_SALT',        '(v_a714& ,puF!N#:y%81CQZ5O9>*9W|sUq05s_{>f]y[4~v4Z?:Ip6 Kr67 $&D');
define('SECURE_AUTH_SALT', 'i%1y(MATEWP[XcPUakzU-@1 6A78v[R]Rc$|4Y :rAIr5[3VU6ROt3aiRGWRJ&sg');
define('LOGGED_IN_SALT',   'LYLhB,l&/h6-J2HOGZD^e_=RPcaG:tvlnV{KC]h5X4vmpsjwcT@CCyv *5Yb7Y`B');
define('NONCE_SALT',       '3#]:7n6;oi3cY^=GJDE.rHvA5S[y<;R?4HMe_$&hiIc|o:V5gRfi=jDmqvfZDi;D');

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
