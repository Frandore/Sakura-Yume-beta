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
//define('WP_HOME','http://2yu.me');
//define('WP_SITEURL', 'http://2yu.me');
// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\phpstudy_pro\WWW\wordpress-sakura\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'yume' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'yume' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '123456' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '31*>U3m<wp]k$S-idqfjdE,Kh:/>hc9oK`_nc#~*llmS<({|]1Uxf5$K IrN)bb*' );
define( 'SECURE_AUTH_KEY',  '!l:jzdyUaBxyV?@:UuvP.OZ4Rb_v^TnC#@$~GJ8t?[?3Wy6070(xdG]T6%K=D32>' );
define( 'LOGGED_IN_KEY',    'Zsqt/l*>t0&zgrdPQ]f2x%MDu(<GUh$H(.J3+7#G(7Im*IGzpTF*:1ZeR1J[T5C{' );
define( 'NONCE_KEY',        'I[-D3z??k+m1T<y6frQkPpJ8L[glAV*E~3&A@A[0)^dr<g:q7ei3 {4~n!?Gru>G' );
define( 'AUTH_SALT',        'sU~MM}~y3sRM.>SchW<Z_b2784(tI~;!_ST?`9t@#;buvM1dP-,H?0=bOq[@{g%O' );
define( 'SECURE_AUTH_SALT', 'aU?R^sZ3b=6ED1JJ{%v_;gCx:N3P:=/Wo ~z6*7*q%[1Z4WX6AU*;rd7usDE|@=Q' );
define( 'LOGGED_IN_SALT',   '%+[+`/kxrA;-LdW>Y_GbkvA0]?FrjQ[s$]t?AWo:TeVZovXev8DTou)p#do`4-Oo' );
define( 'NONCE_SALT',       'v0@aBni?4pR3xEF.m}Z@pL]*?Dt[2NX,$Y`W_)2p<b0W[[o-3GQ@[N/&PjoLp$39' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

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

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
