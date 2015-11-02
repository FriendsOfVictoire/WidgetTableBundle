<?php

namespace Victoire\Widget\TableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Value.
 *
 * @ORM\Table("vic_widget_table_value")
 * @ORM\Entity
 */
class Value
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="string", length=255, nullable=true)
     */
    private $val;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Row", inversedBy="values")
     */
    private $row;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set val.
     *
     * @param string $val
     *
     * @return Value
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Get val.
     *
     * @return string
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set row.
     *
     * @param \Victoire\Widget\TableBundle\Entity\Row $row
     *
     * @return Value
     */
    public function setRow(\Victoire\Widget\TableBundle\Entity\Row $row = null)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row.
     *
     * @return \Victoire\Widget\TableBundle\Entity\Row
     */
    public function getRow()
    {
        return $this->row;
    }
}
