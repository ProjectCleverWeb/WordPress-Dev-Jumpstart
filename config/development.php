<?php
/**
 * LOCAL BUILD CONFIGURATION
 * =========================
 * This is how WordPress should be configured on your local machine.
 */

// Database Constants
define('DB_NAME',          'app_name');
define('DB_USER',          'root');
define('DB_PASSWORD',      '');
define('DB_HOST',          'localhost');
define('DB_CHARSET',       'utf8');
define('DB_COLLATE',       '');

// Environment Constants
define('WP_MEMORY_LIMIT',  '64M');
define('WP_SITEURL',       'http://example.com');
define('WP_HOME',          'http://example.com');

// Key Constants
define('AUTH_KEY',         'NtH3~-m|_2e6A0E3VMowM]2_;1S#QEw}N?.i_}e#M|4kNKaH^w|]{OsMR<L&.qJA');
define('SECURE_AUTH_KEY',  ';pg_+-%*u:5dqh6Dh@#|>hF_@;;i(gmldUd.;t%3yI1}A:r4j]g:9,;H`r@U6V(-');
define('LOGGED_IN_KEY',    '#|Y)WybA|!noB{8*BS-r #kl-*n%)U#*M/Cpx>N,4e`>fU<ORa?3dl`1{|_<d{6M');
define('NONCE_KEY',        'C>5jn<LhRT}=byxb;ixr0[!o=|*p-y3B:v,FY`q,nXOs(l1Ziz7M>RzlN%-M$~:E');
define('AUTH_SALT',        'w]x+a34 CJNx$1)[fnc>(eMwgKdXLWlq<-lGFwb).H;mK[t~/E)/kok-hKELp+#A');
define('SECURE_AUTH_SALT', 'D]t:o-0Agzq1Q#,4(s~C3G Ju* |mz[.&FygF5*cyR{Sfq.<Z}4XA9;nmGY}(vC-');
define('LOGGED_IN_SALT',   ';![;,|k251)Z+mYdWorzC~M@RE3QONw!+SActlKS|8Y$&P 3||{uzBht${VOOi:v');
define('NONCE_SALT',       '~EWp|xW4&B9>L@(M-K2&?ZK^Iygv~,u~yYl8U-KMI#Wx;Y%?1>goa{Z03r`#uVm2');

$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', true);
