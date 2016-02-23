<?php

namespace EcomDev\Compiler\Storage;

use EcomDev\Compiler\Statement\SourceInterface;

/**
 * Interface for a storage driver
 */
interface DriverInterface
{
    /**
     * Stores reference
     *
     * @param ReferenceInterface $reference
     *
     * @return $this
     */
    public function store(ReferenceInterface $reference);

    /**
     * Find reference within a source
     *
     * @param SourceInterface $reference
     *
     * @return ReferenceInterface|bool
     */
    public function find(SourceInterface $reference);

    /**
     * Interprets php code from reference
     *
     * @param ReferenceInterface $reference
     *
     * @return mixed
     */
    public function interpret(ReferenceInterface $reference);

    /**
     * Returns a stored php code for reference
     *
     * @param ReferenceInterface $reference
     *
     * @return string
     */
    public function get(ReferenceInterface $reference);

    /**
     * Saves all the data into storage
     *
     * @return $this
     */
    public function flush();
}
