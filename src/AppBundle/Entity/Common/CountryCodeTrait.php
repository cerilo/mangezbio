<?php

namespace AppBundle\Entity\Common;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

trait CountryCodeTrait
{
    /**
     * @ORM\Column(length=5)
     * @Assert\NotBlank(message="validators.country.not_blank")
     * @Assert\Length(max=5, maxMessage="validators.country.max_length_exceeded")
     * @Assert\Country()
     * @Groups({
     *     "city_output_default", "city_input_default",
     *     "certificate_output_default", "certificate_input_default",
     *     "proForm_output_default", "proForm_input_default",
     *     "project_input_default", "project_output_default"
     * })
     */
    private $countryCode;

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     */
    public function setCountryCode(string $countryCode = null)
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
