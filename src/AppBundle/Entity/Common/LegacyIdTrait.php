<?php

namespace AppBundle\Entity\Common;

use Doctrine\ORM\Mapping as ORM;

trait LegacyIdTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    private $legacyId;

    /**
     * @return int|null
     */
    public function getLegacyId(): ?int
    {
        return $this->legacyId;
    }

    /**
     * @param int|null $legacyId
     *
     * @return mixed
     */
    public function setLegacyId(?int $legacyId)
    {
        $this->legacyId = $legacyId;

        return $this;
    }
}
