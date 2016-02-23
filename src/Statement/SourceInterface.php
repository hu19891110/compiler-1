<?php

namespace EcomDev\Compiler\Statement;

/**
 * Source interface
 */
interface SourceInterface extends \Serializable
{
    /**
     * Returns a statements from source
     *
     * @return ContainerInterface
     * @throws \RuntimeException in case if source cannot be loaded by some reason
     */
    public function load();

    /**
     * Returns checksum of the data in statement provider
     *
     * @return string
     */
    public function getChecksum();

    /**
     * Returns identifier of the source
     *
     * @return string
     */
    public function getId();
}
