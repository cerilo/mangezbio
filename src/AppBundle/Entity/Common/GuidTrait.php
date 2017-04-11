<?php

namespace AppBundle\Entity\Common;

use Doctrine\ORM\Mapping as ORM;

trait GuidTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
}
