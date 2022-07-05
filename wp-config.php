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
define( 'DB_NAME', 'xs377997' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '_Q-%e{{-zkD$n4=<0r<E])&F;c%` Vr97Efh(*BTSQ4-Q6/}H.-4B}TT=-=$TUix' );
define( 'SECURE_AUTH_KEY',  '7.dFed+a6=0$ep}huW(+q-E[nv`b3g@i/co tPt&%q9-Dj*(`4nvN9;y#n:EIMXz' );
define( 'LOGGED_IN_KEY',    'up7i)*i9BbMb0)j_%$6P%1iyi<}d@xomZ* ~7/[KcX[HutP+$e:?-bTnaVyx_V%B' );
define( 'NONCE_KEY',        '*AXyla%6[8eVFJt[ef~Bp,*/a$lqr|g62F@lUec9r1K$cjMh^E@HhM%7eEG%D^EM' );
define( 'AUTH_SALT',        'm-.S*)P=uF;Cs_1]*06.jhEGHdcH+V&E>lXNpX$Vx4oPByH@KO5|wL+2fFn~r_aj' );
define( 'SECURE_AUTH_SALT', 'f[w<hMc2JM%SnN$G)Bq)]S(aH4PKqkN|P+Nb$-Dj2g$gZJh%f{Q%oUz[`T?(SyCs' );
define( 'LOGGED_IN_SALT',   '*lcPPN(o+CYDsqc.,CDqP1o?{O t.aM6lCuP9_j.b[Ll9xcs#8b_(KGSG}^(1YDC' );
define( 'NONCE_SALT',       '7qkgX|[`630|Ta?Z#r@${dhe^|]pUSd<Y.*5A_zMw)<-ha+Sn(>dS29;$Dt`9e:9' );
define( 'WP_CACHE_KEY_SALT','O2$(TL<DpSg0#fX=0R)qbN! G_t6hQ/Z>P`qxsdvN^qV6,j#Ig@1twvUW9@/J2.%' );

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


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/xs/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
