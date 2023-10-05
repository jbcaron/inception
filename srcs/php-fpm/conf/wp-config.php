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
define('DB_NAME', '$MARIADB_DATABASE');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '$MARIADB_USER');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '$MARIADB_PASSWORD');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mariadb');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'EB0{&o%Md`2;K1|/koR[wXDs_[Q%r]>Hz`vpm~Xm&)Ib]OzDU6+wlJ]Rl<C/6Y-X');
define('SECURE_AUTH_KEY',  'yVb4uT%SZ/0{.3TQaS<EJ:,*r>}4V`CO=V;O~`.pE+!7PtdSK)33wXm+#{XCM,o-');
define('LOGGED_IN_KEY',    'Gaf~V6pFLY-+HSfEdfn4z s/;B.=q!Y;c*{t~UQ,86|GTCGnMX)BUT+XvSY?3juo');
define('NONCE_KEY',        '|Psk5[_]]=4Ul-hzeWa?wq{ryK-`W}j^G@F86{4qAfhnjU]89qO-M~kUe.EH*drd');
define('AUTH_SALT',        'Zw&C];dI$euC~,QHL-Ed?<]CtPzOjUCn33rR NZS;B>r.-T);]-8Xy%*+Pt;%`>#');
define('SECURE_AUTH_SALT', 'aH#/+@pNF.IR>%nBg+)5k$L@Mx~{wUDF+UZ8C5aXJ +S_Rc~0$nojMxnl3=j#u<g');
define('LOGGED_IN_SALT',   'jsd}lr4j60HT&5S4VKO*COQIh7c_j$emS}+y7V|hM7b=C:y_lS!afcxH,{[RRG|w');
define('NONCE_SALT',       '>-?B,u]U}r(:6>_5<&nPT6  Ro{0{Djz )&mTYp8GNjz *RMQ5+AT[#D{j:9Z|(f');
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
