<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * @ORM\Entity()
 */
class PlaceCategory
{
    use Common\IdTrait,
        ORMBehaviors\Sluggable\Sluggable,
        ORMBehaviors\Sortable\Sortable;

    /**
     * @ORM\Column
     */
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Department
     */
    public function setName($name): Department
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getSluggableFields(): array
    {
        return ['name'];
    }
}
