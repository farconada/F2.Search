<?php
namespace F2\Search\Service\Index;

/**
 * Interface to be implented by Model objects
 */
interface IndexableModel {
    /**
     * Persistence identifier
     * @abstract
     * @return string
     */
    public function getIdentifier();
}