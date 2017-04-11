<?php

namespace AppBundle\Entity\Common;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return mixed
     */
    public function setId(?int $id)
    {
        $this->id = $id;

        return $this;
    }
}
