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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'test' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'blktudiwV@rm5tGK' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lE><yDcoR,_O.wcv7KI?EUH*-p*[[w}5/q3;|Tv(>a0U>7~<$h|dRDlClqmc# 3z' );
define( 'SECURE_AUTH_KEY',  'ux6_!Rigw_{_9.QkHv*6b1wW|mtY@6F=1dxuoO+&UU`W1pV]1qdfs)v!QrQ|_m_5' );
define( 'LOGGED_IN_KEY',    '*|joB7]V/`b 9dLu!KXO  .MN{^^cUjz5Cj:$#wrT8KA6}T#0L*r=-9PmyACjdE0' );
define( 'NONCE_KEY',        'RF1M2ac-skzhW1?hzXH)ZtgxF.6:r/zwZokxP+TrQ?3WF!W`N.[c}&@wF1JO%(6w' );
define( 'AUTH_SALT',        'VI&D pomCMHb=ObQX$t6@OS-D~p<g`La!~4$c=-8iyE=$U{8e)O>J |V.l!|3Pqd' );
define( 'SECURE_AUTH_SALT', '-O~xc.85XIA[!|U]{#i m`7%:kS%V0&divAdtJ$@52m#9!=ryh,_:Ybl1Qa8?+iM' );
define( 'LOGGED_IN_SALT',   'c6$*k[2|yCzbU,L|n;`~0DXWM{q0)X!e#93oj$<b3?M6VL#VRUo3Z0BonifG6~bq' );
define( 'NONCE_SALT',       '1i4;$B(zH_sD,gnA-^}WLR&w vn}ME-t$rVhL0=J7KjMNL mXgMe4n>,)@0CTV}-' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
