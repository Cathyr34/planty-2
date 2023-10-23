<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '&f81P~?kylZx*=MXM=2A6baH{TBx!vSfE-z;^{@nI95X;q}e`60{#,r.7<gD!?N>' );
define( 'SECURE_AUTH_KEY',  '<?a Q bIge7o;-KwrCi9>7DZ&MlQa:|,V1MiVP`Ppn$5;rV5#[6}x)6lfpKADkT9' );
define( 'LOGGED_IN_KEY',    '6cK?k2s.sq9)WtX(brRDTLmgh?d_^q-Igoaud*`>,STj>Vu0Dd.vRF`ch}a]57$&' );
define( 'NONCE_KEY',        'ZM|SNMgYaC;)FE7*P+ALyMgl(yve7(*^>E>f6}<^~14~Qqy%KfI(=s9g8>}D[JVW' );
define( 'AUTH_SALT',        '9bU3I44e@Z8)k{ED#_!XfaFTR=[oC<=dsO uQBd<64GCLm0Ee/~eaYZ5-5eK?$lg' );
define( 'SECURE_AUTH_SALT', '&0$TjkjU`c{F^-HEFxjvy+v~Ex}I$T51c} [F@qQ=PGK?i161tuOl9AlKriyabef' );
define( 'LOGGED_IN_SALT',   'zQx$kICRrYc[Ab[xdu2w+{1&T=*5*q0N:l%)l.VeG%!9gHY)8AFGD:ZignX!EERi' );
define( 'NONCE_SALT',       'gI?^>Km7h2|+6kc$q`L-NBUzKMgrs7qb.R72*q.m4mZgGh^~6wyF4)Wr%%B)C~3:' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
