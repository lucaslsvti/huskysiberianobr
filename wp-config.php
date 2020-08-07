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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'huskysiberiano' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'vc5FN2fWkrQ5SH&p' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'huskysiberiano-bd.ctii7irxbbve.us-east-1.rds.amazonaws.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'g>i-!zoLV$HgYb:~wUF|11H-^zkzE&e%54w{Z,v/nmn?Qu-F26+QbYUp2*t,<R]V' );
define( 'SECURE_AUTH_KEY',  'u5HA7>P^sg5MYu`?VQ*[DIeOKzOVG0IHi6DP1>4T=`,qwO]Y$+9 KtMsvz@u^X%w' );
define( 'LOGGED_IN_KEY',    '2T[J=(PCA=J=,cnToIqzjh:W=evWMm}ySx+vSz/GSN2o`}0Gnlqc(=HJ{vmLaL.S' );
define( 'NONCE_KEY',        'V-ZlTYO%-5/aii/3R*=D|(/M^*#brdX{S+;:H@8!3+I,TgzlW4$Rut`!ah>IXdwX' );
define( 'AUTH_SALT',        ' )mIU1-5z%:SNi^]Q(5g0>3x8u{UeJ~&zkm2+#sTRx@flqcbfV(J8@(+HKFJle$}' );
define( 'SECURE_AUTH_SALT', '|7X.E`U@xPWOEG+KtA9,,NH(SG0`N-0`w#GuTqDexY Oz9e~<gP8=.S=f~`8ta)*' );
define( 'LOGGED_IN_SALT',   'EeJ4_?M`??H%#2.3PNh9WaL!IBx#9q0.L,T`k;[o^Stqolw8#4K&3u^4!_/4?fau' );
define( 'NONCE_SALT',       'W819!>}IZ<Gdy`Rcs%Ss;-pLSRCq8kGtvI^rH N;unYQ)t+<C#kFuhca ?_nNB/@' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'husky_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
