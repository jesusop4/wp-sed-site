<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp-sed' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('FTP_USER', 'wp-ftp');
define('FTP_PASS', 'senha ftp');
define('FTP_HOST', 'localhost:21');
define('FTP_SSL', false);

define('DISABLE_WP_CRON', 'true');

define( 'WP_MEMORY_LIMIT', '1024M' );
define( 'WP_MAX_MEMORY_LIMIT', '2048M' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[e@@`}?UD-ZlbA>.RPD$7E_p+=fbB^r$N~%aG~7)tyUvV.&hdj%ouY)>a Sr-@MC' );
define( 'SECURE_AUTH_KEY',  'thD10zQ`VBYeAkEy`LS<`m_[d9Cdokg#B@)n0mSjg337Pz8b$&Tn- #/eHTx<V>#' );
define( 'LOGGED_IN_KEY',    '-xmZP[G*2sGGiqSGe;ur4fv=U=<H{*vx#(kh_!^gY25Jh*4BH!#Xt(<g<w6(qS4I' );
define( 'NONCE_KEY',        'f?5a_JX-%s-nk&[S]WvpILju#veC:oC7ein:+8siWYJOLciBNo>*|cnn_m(qUP,7' );
define( 'AUTH_SALT',        '/v@]L+Ay-/nX&RXw9aDNiE?Q4O$#{[71 H8%tsgJ]ok44PGu6>XeB//AS=%#>duB' );
define( 'SECURE_AUTH_SALT', 'jan<Vgssa;#u,,*a+#W!m9roI~HC4 ?1Uy4dTVbTJ`mxOZ-_5%T[>Wq_? !dj96+' );
define( 'LOGGED_IN_SALT',   '_fW-kj$v)i?k1.9iLsf7V>A/5a5)0F}+cOf$zM05B]HXf?X;/O6@]hr31hFUhPJ*' );
define( 'NONCE_SALT',       '=b9yZv;ci`JOco2=RhPN&9IN=R|p::C&GFBQMi,&*cG2%{Z<ZfW)V}6_M|F<OeQR' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'sea_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
