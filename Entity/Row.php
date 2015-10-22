<?php

namespace Victoire\Widget\TableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Axis.
 *
 * @ORM\Table("vic_widget_table_row")
 * @ORM\Entity
 */
class Row
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Value", mappedBy="row", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $values;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="WidgetTable", inversedBy="rows")
     */
    private $widgetTable;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->values = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name.
     *
     * @param string $name
     *
     * @return Row
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add value.
     *
     * @param \Victoire\Widget\TableBundle\Entity\Value $value
     *
     * @return Row
     */
    public function addValue(\Victoire\Widget\TableBundle\Entity\Value $value)
    {
        $this->values[] = $value;
        $value->setRow($this);

        return $this;
    }

    /**
     * Remove value.
     *
     * @param \Victoire\Widget\TableBundle\Entity\Value $value
     */
    public function removeValue(\Victoire\Widget\TableBundle\Entity\Value $value)
    {
        $this->values->removeElement($value);
    }

    /**
     * Get values.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set widgetTable.
     *
     * @param \Victoire\Widget\TableBundle\Entity\WidgetTable $widgetTable
     *
     * @return Row
     */
    public function setWidgetTable(\Victoire\Widget\TableBundle\Entity\WidgetTable $widgetTable = null)
    {
        $this->widgetTable = $widgetTable;

        return $this;
    }

    /**
     * Get widgetTable.
     *
     * @return \Victoire\Widget\TableBundle\Entity\WidgetTable
     */
    public function getWidgetTable()
    {
        return $this->widgetTable;
    }

    /**
     * Set compareValueTo0.
     *
     * @param bool $compareValueTo0
     *
     * @return Row
     */
    public function setCompareValueTo0($compareValueTo0)
    {
        $this->compareValueTo0 = $compareValueTo0;

        return $this;
    }

    /**
     * Get compareValueTo0.
     *
     * @return bool
     */
    public function getCompareValueTo0()
    {
        return $this->compareValueTo0;
    }
}
