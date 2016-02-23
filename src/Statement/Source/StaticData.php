<?php

namespace EcomDev\Compiler\Statement\Source;

use EcomDev\Compiler\Statement\Call;
use EcomDev\Compiler\Statement\ContainerInterface;
use EcomDev\Compiler\Statement\Instance;
use EcomDev\Compiler\Statement\SourceInterface;

class StaticData implements SourceInterface
{
    /**
     * Identifier of the source
     *
     * @var string
     */
    private $id;


    /**
     * Checksum of the source
     *
     * @var string
     */
    private $checksum;

    /**
     * Container with statements
     *
     * @var ContainerInterface
     */
    private $container;

    /**
     * Data constructor
     *
     * @param string $id
     * @param string $checksum
     * @param ContainerInterface $container
     */
    public function __construct($id, $checksum, ContainerInterface $container)
    {
        $this->id = $id;
        $this->checksum = $checksum;
        $this->container = $container;
    }

    /**
     * Returns identifier
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns checksum
     *
     * @return string
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Returns assigned container
     *
     * @return ContainerInterface
     */
    public function load()
    {
        return $this->container;
    }

    /**
     * Returns an exportable statement
     *
     * @return Instance
     */
    public function export()
    {
        return new Instance(
            get_class($this),
            [$this->id, $this->checksum, new Call('unserialize', [serialize($this->container)])]
        );
    }
}
