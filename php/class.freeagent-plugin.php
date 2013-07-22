<?php

namespace Tomjn\doctrine_plugin;

class Doctrine_Plugin extends \Pimple {

	public function run() {
		// the connection configuration
		$entitymanager = $this['entityManager'];

		// do your thing, add actions, filters, etc
	}

	public function __construct() {
		$this['dbconfig'] = $this->share( function ( $plugin ) {
			$paths = array( 'php/models' );
			$isDevMode = false;
			return \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration( $paths, $isDevMode );
		} );

		$this['entityManager'] = $this->share( function ( $plugin ) {
			$dbParams = array(
				'driver'   => 'mysqli',
				'user'     => DB_USER,
				'password' => DB_PASSWORD,
				'dbname'   => DB_NAME,
			);
			$config = $plugin['dbconfig'];
			return \Doctrine\ORM\EntityManager::create( $dbParams, $config );
		} );

	}

}