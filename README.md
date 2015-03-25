[![Latest Stable Version](https://poser.pugx.org/jlaso/session-storage-bundle/v/stable.svg)](https://packagist.org/packages/jlaso/session-storage-bundle) [![Total Downloads](https://poser.pugx.org/jlaso/session-storage-bundle/downloads.svg)](https://packagist.org/packages/jlaso/session-storage-bundle) [![Latest Unstable Version](https://poser.pugx.org/jlaso/session-storage-bundle/v/unstable.svg)](https://packagist.org/packages/jlaso/session-storage-bundle) [![License](https://poser.pugx.org/jlaso/session-storage-bundle/license.svg)](https://packagist.org/packages/jlaso/session-storage-bundle)

========
Overview
========

This bundle creates the table needed for the PDOSessionHandler

In order to install this bundle you need to pay attention with requirements: 

    php > 5.3.7


Installation
------------
Checkout a copy of the code:

    // in composer.json
    "require": {
        // ...
        "jlaso/session-storage-bundle": "*"
        // ...
    },


Then register the bundle with your kernel:

    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
        new JLaso\SessionStorageBundle\SessionStorageBundle(),
        // ...
    );


Configuration
-------------


    // in app/config/config.yml
    services:
        pdo:
            class: PDO
            arguments:
                - "mysql:host=%database_host%;port=%database_port%;dbname=%database_name%"
                - "%database_user%"
                - "%database_password%"
            calls:
                - [setAttribute, [3, 2]] # \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION
        session.handler.pdo:
            class:     Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler
            arguments: ["@pdo", "%pdo.db_options%"]



Usage
-----
execute schema:update to create into database the **session** table:

    app/console doctrine:schema:update --force 




