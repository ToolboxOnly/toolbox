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
define('DB_NAME', 'retpro02');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'retpro02');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'wfj2018');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql01-farm68.kinghost.net');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'gOUTK/SLdO(G]v8fetSpH%W@Rv[^%8 5wnX!{Z}zq+SAjhq$fx.Q(5K)G{}#rtSs');
define('SECURE_AUTH_KEY',  '0nnjgyR&xSW_kEE^- X3 e$ME-{`y-te^X]IwkCB}R@{<1n v901yv$T1|hG(GK)');
define('LOGGED_IN_KEY',    '$7J5&Le6s*8<:&*(o>zttuY<[-!&|A-E>^5G4[t]/vQM`kx3AjfYQ$tO=8X*y+BL');
define('NONCE_KEY',        '>L!`h<i)LG,MaV?%9aD^C7Wl|}QM)LHAyE,2B13w)d-MS>No?;-0+{R>%xI/#|5x');
define('AUTH_SALT',        '?oyyj:?h&X1nNu%D9;Cz),$-3Xp/kFa7)h}*`up=#/!4ZeaPV)RmTd;oF,WVNhJF');
define('SECURE_AUTH_SALT', 'H%MR#a&`Doxj0R3:0LSc>uB9vDEVPzuwddy<W[}}TW.St0cIZxK*j^Ib%z|O5U ?');
define('LOGGED_IN_SALT',   'V|j=H5}^AS?dV64~/#;iwRW4(M;PCTbm?1OsLO*&@N wI+y^`b~Xaij2*3T*)<yY');
define('NONCE_SALT',       '1|c+t8URMGx|oF9Mn;:+RAuSs?9mG5VB:Ujwlb1xk+sdu:#<!E5>D~tOw`7W+&)0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tbox_';

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
