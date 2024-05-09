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
define( 'DB_USER', 'imchavinc' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Boston2024!' );

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
define( 'AUTH_KEY',         'EtTWtB;$k{L]+ggQMLiBg4$?g>aZ0YEO&WYV 4xnX%O_CC$MNbv*kQa59*9>c 5$' );
define( 'SECURE_AUTH_KEY',  'V0WKdCaq-W{)AjXFzYym98J?v&N_eA`Jjg}D4H?kC-U&eYL]&PPk UMlI`oy{Jsf' );
define( 'LOGGED_IN_KEY',    '{I?-G$jcW.vIlsN^*,d4jK8xNS*}6SKb?(~DJ4LFuVAP=R6p0bs<GY,j=IG/*.&`' );
define( 'NONCE_KEY',        'R-1>mQ6*Pwf:sPi~{#3u%)fH:=qw@wSBC<Xy{Lr%!)HJqb-Y.tSQxVFsO68i*H}S' );
define( 'AUTH_SALT',        'n)C6M]Yrk{~XA!s57m-.bvB-T>;0P^k<F@^=IPG->%q}ECisw7kyFU#|I<w?VX.F' );
define( 'SECURE_AUTH_SALT', '^}EbjqWWaAWfy.kPOX*N?J]L;dJU37^?NnLQP~qpxi%>i18ETr;E{e30LKddumPD' );
define( 'LOGGED_IN_SALT',   'pzZ(0C&jDPj,|Ip89Q1l=<HN2n&n @ubMVXn;sem4LAGI(}c+Mrj.5zam[fl[Y$x' );
define( 'NONCE_SALT',       'Eb(&%D dtwm} V5xq$2w,i`/HSj /+Csxp[Z)qdx1]dy[dvW,/Y>,~C*PP{Re01T' );
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
