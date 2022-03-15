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
define( 'DB_NAME', 'marketing' );

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
define( 'AUTH_KEY',         'N-Hm#03QHPe!{K^jazktdK|8(|bb*^6c@*WtIsmcob83(r&9gfV{~xxK1r%IdxYw' );
define( 'SECURE_AUTH_KEY',  ',$i!zTgBP#4|2Sp}=<MVmFaZ-r!&hB^9[gGq_?*_$=/n~D+lAr@PIjxZPir!DZ?0' );
define( 'LOGGED_IN_KEY',    'DiPW+Aef*K*r{yr-AOgu+zC#n+Vj:9CAx.*JMaMgdz|ezA?]{fKJxLtKBI|]o4dG' );
define( 'NONCE_KEY',        '+=@VC&Nr C))2.CrqlYHu7?T9>;sc!*Caw;cyLyk@r89iv{G?qk826;u0.<& U{l' );
define( 'AUTH_SALT',        'f}M#sVsVwoOc=>1ix g`i[{9!iPZWP0A~7L{+GRYoReZdx>XkPr9^2]4lS<Gu$n<' );
define( 'SECURE_AUTH_SALT', '<qT8W]p;h5QuSg1_,.<45/.Tub+]CvXNx*cU@09=J!-Lo<;;ShTZ WU=H1Zh<q~@' );
define( 'LOGGED_IN_SALT',   'vAR-qe8O>V*;3z}Z(TC|sW2b!rp)a+3VSbn6#jmL[H-1Ubo{eJ0 xTCs^=dz@>p}' );
define( 'NONCE_SALT',       '<g{zJJdLCK[G(6lvQ@+6z.Wv!|xb7S~;A?xcl:vr7YqA:[ieo$3ni.<KzZD2F]n5' );
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
