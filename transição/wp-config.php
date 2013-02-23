<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'jcfmanuten');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'jcfmanuten');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Futebol25');

/** nome do host do MySQL */
define('DB_HOST', 'dbmy0017.whservidor.com');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' p]<8Ko3:TB[<E,8p+T|fc?zF]gz_6#dDY<$W$Kf V!)-%M<gsl`>3mDZ{fZ[qFq');
define('SECURE_AUTH_KEY',  'Q#84YUjZkPQ3=wdtyBE2o(%h$23vC/2#{3;,}j!aIT6WpxAO`UzJa4O@,0XQkW&~');
define('LOGGED_IN_KEY',    '$QG1n9ei>giR(^V|,u,>LeDlrB13:|}_9[vL^Bx]_<u6AdZTwSQ6QmI?>Y2_.|_Y');
define('NONCE_KEY',        '.rOnQ<TQv1o1FgD>#(gk5zRP}SZQ~2aj[apd1qSf?CoYR{O$~(C!B_(bm28YGhG&');
define('AUTH_SALT',        'bVX+^qu${,zdL=xCCjUH(<8l0K7_3%8MC-AET7;IIMW _>P4w@sRk@/^D7H?vQ-9');
define('SECURE_AUTH_SALT', '9)*dya{idvS^L:?^c![{LBAL2Ylf5dp%>ob7iY9)DI,3y?s{rP^P|>~RIToew[=.');
define('LOGGED_IN_SALT',   '|kh#_5Q/oE5nf8G&f|R`Di*YpK2^whO%F}&6 )DUG537K6wR>3q (<*eV:1O5(Q~');
define('NONCE_SALT',       'U|MpJZ(7@T;S`%6zPTi(H|9F+j_3+~oP<g72VErQOKWKoDD@}fG5o2YtGNDi4XN|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
