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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpressDB');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '54596834');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'r/~MFO-Q5|414PG>0Ic|:MGUKU.$o]oV*/b[5rPwyu-c5Dy l04F{+>p6|!q4}+F');
define('SECURE_AUTH_KEY',  'U0?J[3 6[h|!-ir*PYlR27[*p4[PZh/R$mE}cU+U5HqIc=!myLQFDzi)E27B>hon');
define('LOGGED_IN_KEY',    '{-P`d*j`{hwHVwu#Ws:0na#<!rAKy=o37 #s};@+5!#M(MK|NQrhC2gt]Jj zBDI');
define('NONCE_KEY',        '<~0uy<^Z:<Z* Zf:L5ErIAK*$!WwO7+KbNxdGeI7ziL~_SOJY+%w*iVGtZhWcki%');
define('AUTH_SALT',        '~~-igjY9UR,-&un|w9tD`9X{X:QS<zI|Z+(pS97n|9No.!1}t|r5@ZK}6TdH^h1X');
define('SECURE_AUTH_SALT', 'zJb) wcQ~{>u>SoCdw,2S}hI`!K,,ar:-=KqmuZ#$t$hw;vdlmgN.j9VJveh.-c/');
define('LOGGED_IN_SALT',   'xY&3kx/k9Oxyw8Mo!GkKT+9Z{D4l[3o=sGeZ-7N210(czdwnHeBa%|0a=[m2Qds^');
define('NONCE_SALT',       '6(US/:J=hLsdnh`G|tm+mr2`HDF+JAf&[-C9TRaX8Fa8]JbW(E0DaaJ8R Fq-G|-');

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
