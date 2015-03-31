<?php

namespace Victoire\Widget\TableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionValue
 *
 * @ORM\Table("vic_widget_table_option_value")
 * @ORM\Entity
 */
class OptionValue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="percent", type="string", length=255, nullable=true)
     */
    private $percent;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set percent
     *
     * @param string $percent
     *
     * @return OptionValue
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }
}
