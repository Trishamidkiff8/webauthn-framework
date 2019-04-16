<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn\MetadataService;

class BiometricAccuracyDescriptor
{
    /**
     * @var float
     */
    private $selfAttestedFRR;

    /**
     * @var float
     */
    private $selfAttestedFAR;

    /**
     * @var float|null
     */
    private $maxTemplates;

    /**
     * @var float|null
     */
    private $maxRetries;

    /**
     * @var float|null
     */
    private $blockSlowdown;

    /**
     * @return float
     */
    public function getSelfAttestedFRR(): float
    {
        return $this->selfAttestedFRR;
    }

    /**
     * @return float
     */
    public function getSelfAttestedFAR(): float
    {
        return $this->selfAttestedFAR;
    }

    /**
     * @return float|null
     */
    public function getMaxTemplates(): ?float
    {
        return $this->maxTemplates;
    }

    /**
     * @return float|null
     */
    public function getMaxRetries(): ?float
    {
        return $this->maxRetries;
    }

    /**
     * @return float|null
     */
    public function getBlockSlowdown(): ?float
    {
        return $this->blockSlowdown;
    }

    public static function createFromArray(array $data): self
    {
        $object = new self();
        $object->selfAttestedFRR = $data['selfAttestedFRR'] ?? null;
        $object->selfAttestedFAR = $data['selfAttestedFAR'] ?? null;
        $object->maxTemplates = $data['maxTemplates'] ?? null;
        $object->maxRetries = $data['maxRetries'] ?? null;
        $object->blockSlowdown = $data['blockSlowdown'] ?? null;

        return $object;
    }
}
