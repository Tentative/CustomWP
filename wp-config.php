<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'wordpress');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'orion21');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D<j13P)|FZlo!05N6h1<-cB lO40(Kzgn9S}Rw71r<-)X0Y0N^Wme%O>72;p|9M5');
define('SECURE_AUTH_KEY',  '#J~+]^/^De-Zj0-meJle/.o:S_dKTETb2XVP |w-Q7tQmI!xr#T0I+1wAR?3^`V8');
define('LOGGED_IN_KEY',    'mY)44aY.N-iX@jws?dcL-A=6:Y%%s/ lxYWL4IYBSRhzF?cRQo;-ZL)/7qO]wLth');
define('NONCE_KEY',        '|KjY#2QGypvupt+10V[N8cJ8VsME1GE{W+J$x!ve9j|YxBX-mWn_},7NAN~CJ^*[');
define('AUTH_SALT',        '!paGZ6CJbpj&ycoRCfNc>Q,=p(P8XH^i er/x_Z,Dzs3|#T s+bSlCbAd|-~GDJk');
define('SECURE_AUTH_SALT', '_sFcnhT=!y:I|#/-=O#7:xmO;[aOogt5@SY*]CDjP b@]S4BJZ_pfp8h*C~-bE]9');
define('LOGGED_IN_SALT',   ')_B;&l<9]{s>66-+c2Oirdi:U2c/V7b+4|wycS!Bo5}nbyu;jeMt_V,]ci-7a.2G');
define('NONCE_SALT',       'S!g8]hEvWEe,;E8a%5qe}bE~} r{|k4a@Kq`QSW*Xq])6]MhaZ?AKKrm6Lv:[ #=');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Lingua di Localizzazione di WordPress, di base Inglese.
 *
 * Modificare questa voce per localizzare WordPress. Occorre che nella cartella
 * wp-content/languages sia installato un file MO corrispondente alla lingua
 * selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
 * impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
 *
 * Tale valore è già impostato per la lingua italiana
 */
define('WPLANG', 'it_IT');

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
