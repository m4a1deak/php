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
define('DB_NAME', 'wp');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '12345678');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '[eI4Wy5R1pCvcWzYy|$RlX?Pjgg2zf7fd=G<DP5!BiUlJ!xpoP8a[x%x,bt>Bg&c');
define('SECURE_AUTH_KEY',  '%+ vw)m*]U+Od^Q$.01(.}z/(!s;r^?KFd~Qtb fUK5M>SR]e;E!_v}i5kHp&Q`+');
define('LOGGED_IN_KEY',    '?4s(R1zU`^4EQps1Vq|nr,J%4.KmnvFPb-sjfBd[iFDKPn&A.p:m<>>[6U!XR<r7');
define('NONCE_KEY',        'N8,0R4d:)#NCo:TKqaqU)9+h9y|!/Up xB+H[p@?Z$lnX($}zP#_Z(hc98$$V1:<');
define('AUTH_SALT',        '`}/Z]U9*)U4*4?|DGUh04xj.EBS*e(2K!*6<`_r_Cv]C4v~;{lR/vD4;IH.899lu');
define('SECURE_AUTH_SALT', 'd-k7#,`a|<2OPwXyq`SrhDCl6Lj&)BMV+{Iw]62T1L|6cw:W;]y6R]@`dEW6WS/A');
define('LOGGED_IN_SALT',   '_N.+?{n6bzcb7q[<L`uiA3b/K{V9/kP:W9u&O-$1.6dHFG6FO>/ljepYOp!cM_i ');
define('NONCE_SALT',       '*EKHR<?pyVs>Me&1JMO6 ^IH:w3N9}/3=vrGif7Q.q2pi/CYcCJC]_<k#Lug/NQK');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

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

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
