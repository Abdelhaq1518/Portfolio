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
define( 'DB_NAME', 'epurback' );

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
define( 'AUTH_KEY',         'axhPwspdiKJde*I:uP!eun$gpZKffh2(IU(B:R_ND[;AY?-&99Z;|CU+j(%PbRkb' );
define( 'SECURE_AUTH_KEY',  '}+K[Ohjb<YiLnidXkHkT1G/J4b@/-Fy$i%}jA_6(:0buO(nwXY~>i tyOVVwZ7H.' );
define( 'LOGGED_IN_KEY',    'CK>7)(bee<yV>K%w&5Jp5m0xjq>r{V5APn~/BXS?^4wMC=h!&A&Cqj#HE_&+HghH' );
define( 'NONCE_KEY',        'L{;J_+`1ab*bc|uv4YC7z{j2FF4T&k^k]h$S:-%Q:GQkSR&]>#T!Z%3[uTPz`>`g' );
define( 'AUTH_SALT',        '9<3VXDUgb8;BSQ?(dQO<bLI..x8KJiMkaS4MgmMu~oAdUHH5]{;5DbR]$Ln./XM_' );
define( 'SECURE_AUTH_SALT', '&1]$=Nx^xK?VZj(Hf%dE0Ja]XXwS#4!#+as2]c0+sarf*8TDV#/gm8d{>a<f,~]%' );
define( 'LOGGED_IN_SALT',   'x^Kz~bMT<N@*u5-@h&f3,{3O!4,0Ryg5tmGEKfih.^J|MKo;)3x`tn]U,PYnyU5%' );
define( 'NONCE_SALT',       '-YVmfUpHNAl{ v$r,KzMQ;]eU:@/efF2dIZibt_diQO&vzeo eowHkd;TWD(yIM`' );
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
