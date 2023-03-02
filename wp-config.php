<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'jewstore' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?CV`qwny4acG!:.z#r~v3Vs0(,wN?JI>T3gbJv5X+1l{f6!`&z {T2K`0J?y5`=_' );
define( 'SECURE_AUTH_KEY',  'uB.8?}f}bz)8]DXL1lvaduQif5g02C2A/F$/H~,$uRqb8M2>+-o+Y+%6&}wP ,SP' );
define( 'LOGGED_IN_KEY',    'de~A&&ezC6x/;D[0VMLV%3qnM)L8H^1In=4UNIqb:YQJS76uJPpH;PJ25!(^#85`' );
define( 'NONCE_KEY',        'C3Ugo .#K:h`aX{dZ4G>8{&8rk$rzJ~(-y3d<6$#LDz]cSWpeS?JwV8SW)v~xT=@' );
define( 'AUTH_SALT',        '>$kd8,|=HVSN|Z%mNFF0?cw[8TrbO5S}]#aC:W1MkU7W[5B/,=<<*E0C<0?F]O!p' );
define( 'SECURE_AUTH_SALT', 'qPnly.9AU1*kz@/|4Wj/vm9PKqj8CP64zWuVG]o(TP>Q)Ho.YW-:1{8/+!Z,Gdr8' );
define( 'LOGGED_IN_SALT',   'a$l9)eT:3anMO{6)NAmuEJq#Z|HtovKEUrsx->CIpJ^^ff+EJ#N~~I0t[>/e*S X' );
define( 'NONCE_SALT',       'aXv.UqMPz##|pe?BK{@(]Y^fo.C_{i~A?M=>!SWFV,a:t}*yH;rVw1CRwo:vMr@ ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
