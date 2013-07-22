<?php
/**
 * This is the cli helper file, used to do Doctrine stuff like auto generating wrappers etc
 */


require '../../../wp-config.php';

$doctrine_plugin = new \Tomjn\Doctrine_Boilerplate\Freeagent_Plugin();

// replace with mechanism to retrieve EntityManager in your app
$em = $doctrine_plugin['entityManager'];

$helperSet = new \Symfony\Component\Console\Helper\HelperSet( array(
	'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper( $em->getConnection() ),
	'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper( $em )
) );

return $helperSet;