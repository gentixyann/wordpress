<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wplocal');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`*4B` `y<pjoE-+I5#Ek1R!J%2q! Y6L^V71JbHf;R{8JR6s1*QZ]16]irTii7Q-');
define('SECURE_AUTH_KEY',  'B6s}t<VMZ3B6&Z[D.J=d[0b)?E 6ewiQp$]@I-S@`IA$,oNyt~)sjKi_)E6e<o]:');
define('LOGGED_IN_KEY',    'AJriaOfL5?#_-qai}x<3!; p5+euY9,,`CqlhLsn0O@1tM7y+QecS(TQEV736:TO');
define('NONCE_KEY',        'Tgq43a@N`U2jJlb%@aE~vG5$8x4,h6cj.BqR&?;`om2y%,`r6K7OD2>rx]7O4?aA');
define('AUTH_SALT',        'rca^WA?ocKeoex]<2z[;k9K0YMW7XeJOgB>FW{ :k<gE7K^F%X>7r~9A0+)0!9vB');
define('SECURE_AUTH_SALT', 'ot tn[/F[}PKM_N?P8:{,Iv^26B3XOT6aKK~MLIpK?;cLtuk5$A$DIE,m#3kf)@6');
define('LOGGED_IN_SALT',   'mSa>Ci`~+QcF]p! _wu[Kw6KUk]Q3O ~)28[RsvpH`jmN]>t&Dw0RVb8+9Skae5/');
define('NONCE_SALT',       'T%s=X@$_pt}7kp[qDf&+~(fRcAO)_9h!kpIk89I{`ZmP<_e{Emroy78<)YGsM[q`');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
