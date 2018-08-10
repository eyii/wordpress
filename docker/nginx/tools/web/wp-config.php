<?php
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/

 */
define('AUTH_KEY',         'PK=^2-61`K>IdO<O`j?>&XgLU/=^I?Ir7HWj&{2Venj:aI2AS%3<~gDs5<>Z`M1!');
define('SECURE_AUTH_KEY',  'Tph%-_x/aM@yJmn(@sL++Ii>E-BU=U-Cu8qcJRHv&L#n H|lA1?8&1Cd5>moH{>V');
define('LOGGED_IN_KEY',    '4&1v{JN$ed(Bk>+ym,k,C^}KI,bL(b%$8QFBGdFTh@yy_>qd[f]Qy{4{l)rm~0hz');
define('NONCE_KEY',        'l^;K[%:npz{q(bGJqHJk]UNc8AJUqT+Xp@cw{Us`(@ZTRpa>|YO{~(H.b?<bvz#P');
define('AUTH_SALT',        'c$AIM!w4(!;|xAD ^tA|Z|= NDdV:T#hhZFb8sTS6k9sGm%%|9?YX=PC|]qeSIP2');
define('SECURE_AUTH_SALT', ' p-*&H3K`Da|I|aQ`sr)Pl2aj}xLSJKW8Cq+vhpK_!ow*tkmwn7<^9}=xGws.6/X');
define('LOGGED_IN_SALT',   '^*N,VN(bX^k*$7w(:.`2FQ6&4Pd$12tt(=`po/[VI^@0uu,2;!9M^6/-{8hvE;*d');
define('NONCE_SALT',       'q&YUhoG,cPU0BW]5JNXi8,3,b8S 1GaDtQQ23JOpn0{Frx(iXd3_R%JoLNyRT5?(');

$table_prefix  = 'wp_';
define('WP_DEBUG', false);

define('WP_ZH_CN_ICP_NUM', true);
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
