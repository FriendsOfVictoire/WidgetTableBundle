<?php

namespace Victoire\Widget\TableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Field
 *
 * @ORM\Table("vic_widget_field")
 * @ORM\Entity
 */
class Field
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
     * @ORM\Column(name="val", type="string", length=255, nullable=true)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="OptionValue", cascade={"persist"})
     */
    private $option;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="WidgetTable", inversedBy="columnFields")
     *
     */
    private $columnField;


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
     * Set val
     *
     * @param string $val
     *
     * @return Field
     */
    public function setVal($val)
    {
        $this->val = $val;

        return $this;
    }

    /**
     * Get val
     *
     * @return string
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set columnField
     *
     * @param \Victoire\Widget\TableBundle\Entity\WidgetTable $columnField
     *
     * @return Value
     */
    public function setColumnField(\Victoire\Widget\TableBundle\Entity\WidgetTable $columnField = null)
    {
        $this->columnField = $columnField;

        return $this;
    }

    /**
     * Get columnField
     *
     * @return \Victoire\Widget\TableBundle\Entity\WidgetTable
     */
    public function getColumnField()
    {
        return $this->columnField;
    }

    /**
     * Set option
     *
     * @param \Victoire\Widget\TableBundle\Entity\OptionValue $option
     *
     * @return Field
     */
    public function setOption(\Victoire\Widget\TableBundle\Entity\OptionValue $option = null)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get option
     *
     * @return \Victoire\Widget\TableBundle\Entity\OptionValue
     */
    public function getOption()
    {
        return $this->option;
    }
}
