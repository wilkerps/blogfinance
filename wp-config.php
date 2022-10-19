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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blogfinance' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'K$B5%kwEG7g}9tLGq~%JQn}w|(?CSG;d<6M0e;O_oakbM4ffo#Cy?NBLl/y$IS B' );
define( 'SECURE_AUTH_KEY',  '}x~Z(Ox%7 ^MQ| X_<aTo{cT_g0J7Q~8Y20kj&s_ykp$dP8S]^M1v, m[WN;ong:' );
define( 'LOGGED_IN_KEY',    '5,P1l$z==OT3fx9oJ7bGoWi{seT 9Ro$VKarhPA|<ye([WdvX] ?0L3bNm#h{gW8' );
define( 'NONCE_KEY',        'NZLjaPlt)Zvn7%_MJ13NJQ0k;kxc)Cd3$!5-z70Pu)3Wur@.!1K0sx][U;lG@&yM' );
define( 'AUTH_SALT',        '|(*Btb(1I?K$?FI#G8fFrjjR^?7BN)/YG0*g!62_hQb{/IrA!n3Wq?O/nDL]a_u8' );
define( 'SECURE_AUTH_SALT', 'MnC~O$-~pu$z3 6s?Az}e)y3(?J:[MuI:5?_AvF.C0~m2d{c?4rGGBvYEgDKetw#' );
define( 'LOGGED_IN_SALT',   '+.!pGa(vwC,m?sM,p=Qwx&#R`rGG6eWje_lqF5piq6q0:au+^gU5XAYoE=r*$7,U' );
define( 'NONCE_SALT',       'GHEcEvUvRs!:-GD7U;%z09wiN E=>gOE%Kun6R)b&=P$Zlf/Hsh2=nS+#9kV1Rp&' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
