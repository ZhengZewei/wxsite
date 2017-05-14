<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wxsite_dev');

/** MySQL数据库用户名 */
define('DB_USER', 'wxsite_dev');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'jd73d4ifh');

/** MySQL主机 */
define('DB_HOST', 'rm-uf68lsw07o293t779o.mysql.rds.aliyuncs.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', 'utf8mb4_general_ci');

define('WP_ALLOW_MULTISITE', true);

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gpjzTG6I|%[n0<b.<Iq{g9!i5B;z`XjnBH^9_F{e+TH1bSPD^yhp+1%7iG}BtzP-');
define('SECURE_AUTH_KEY',  'Wxg>Bx*k6}$3nMq8<O2:Wm8p,e=5fl3);-{p&+0zD4JC~A}XxjR>Y4ha<*4z&$^/');
define('LOGGED_IN_KEY',    '`<TwKoCUzJ?:ff~/G/?ST!+E+E68ajcy!V~e?y,T]|6dR>Wu!nn/G1x`S}w]i[Wv');
define('NONCE_KEY',        ' yGbB{(7evtvq3?J@n -aY?ja[1k+%O!6[W^<7WsG3Mi)`7`8}Qh#qJP5O12aL|v');
define('AUTH_SALT',        'H >dWv#?XP;fgxmT8U3A;*<vE!#z=Y3qsKg-F:[h9!U14m43Mp9-F~M0ZVr}!lh#');
define('SECURE_AUTH_SALT', '/f%|z}}W3m9RRQB7t%;wF+_ms/x|h5F@$QRyuDq}:^_qZfw{KCT(/:jg[n%[A2/S');
define('LOGGED_IN_SALT',   'JQNZtPZ_G6gr<{]&EkM0$r$.x^g93+!_vFv1s/SLT4-=TtC6OSKd<O! t^39iI?M');
define('NONCE_SALT',       'sqb(37LyQ^@!L8]Ds<Q3SOyJGny,NI]Ay@ZRG/[ry8S`ptt2w8FdWj[CB5qZmGix');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wx_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wxsite.menuxx.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
