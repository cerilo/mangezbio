<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * @ORM\Entity()
 */
class Department
{
    use Common\IdTrait,
        ORMBehaviors\Sluggable\Sluggable;

    /**
     * @ORM\Column
     */
    private $name;

    /**
     * @ORM\Column(length=10)
     */
    private $code;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Department
     */
    public function setCode($code): Department
    {
        $this->code = $code;

        return $this;
    }

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

    /**
     * @param array $values
     *
     * @return string
     */
    public function generateSlugValue(array $values): string
    {
        return implode('-', $values);
    }

}
