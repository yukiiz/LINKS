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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
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
define( 'AUTH_KEY',         'A:$9=M&721};(9=??;Gja=iX/g^v,@}6-DYlydGi`=UI 6D)->GTwhKflWhVT@AR' );
define( 'SECURE_AUTH_KEY',  'oOGb^ZL-02154V&7:m8jzL$}on8~@%:Wn;{2Hxf;0RN;{H%w{GL$fx&eW!QoZ)<2' );
define( 'LOGGED_IN_KEY',    'ey1${MSqt=jTK_:E8h9d)hCm;h6m;/XC!a4D]9S:rkc:[=$6M6{n : bD}vfJlar' );
define( 'NONCE_KEY',        'Wu+6(M58YPOhDS?+pCdaWqGmzG?)GpHI}@Q;*nL<El9;@^o>/)bZ`fVrX_?>$kFd' );
define( 'AUTH_SALT',        'NV-r8QoBb?oXnW>(h,CWj+b=d*lgTa+A.Xs~aa%7(_@IBu=bmCY{x e;aC?l?n`j' );
define( 'SECURE_AUTH_SALT', '/O,nt?>Prd2H(w< T6}G}yi=ok#{``qOZt5*k(yA5F6iCPXO#w4YFg%Fr@6lK:3Q' );
define( 'LOGGED_IN_SALT',   '#w64J`o1%sR&4~J-Ny4T{+dic)$U5R4p+ha|BE!DU!e`Ycu(?y)^j%4228vXgzg2' );
define( 'NONCE_SALT',       '+}+NKW={KOH5J`s}_S3]^UD14mR1}J3}1}F!%s(;7D3A)Y-2ju,P$DiwDvkv#S]?' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
