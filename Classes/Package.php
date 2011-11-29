<?php
namespace F2\Search;

use \TYPO3\FLOW3\Package\Package as BasePackage;
use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Package base class of the F2.Search package.
 *
 * @FLOW3\Scope("singleton")
 */
class Package extends BasePackage {
         /**
         * Invokes custom PHP code directly after the package manager has been initialized.
         *
         * @param \TYPO3\FLOW3\Core\Bootstrap $bootstrap The current bootstrap
         * @return void
         */
        public function boot(\TYPO3\FLOW3\Core\Bootstrap $bootstrap) {
                parent::boot($bootstrap);
                //Zend Framework
                require_once 'Zend/Loader/Autoloader.php';
                \Zend_Loader_Autoloader::getInstance();
        }
}
?>