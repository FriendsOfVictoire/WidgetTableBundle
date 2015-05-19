<?php
namespace Victoire\Widget\TableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetTable
 *
 * @ORM\Table("vic_widget_table")
 * @ORM\Entity
 */
class WidgetTable extends Widget
{

    /**
     * @ORM\OneToMany(targetEntity="Row", mappedBy="widgetTable", cascade={"persist", "remove"}, orphanRemoval=true)
     */

    private $rows;

    /**
     * @ORM\OneToMany(targetEntity="Field", mappedBy="columnField", cascade={"persist", "remove"}, orphanRemoval=true)
     */

    private $columnFields;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="OptionValue", cascade={"persist"})
     */
    private $option;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fullWidth", type="boolean", nullable=true)
     */
    private $fullWidth;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     *
     * @return String
     */
    public function __toString()
    {
        return 'Table #'.$this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rows = new \Doctrine\Common\Collections\ArrayCollection();
        $this->columnFields = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add row
     *
     * @param \Victoire\Widget\TableBundle\Entity\Row $row
     *
     * @return WidgetTable
     */
    public function addRow(\Victoire\Widget\TableBundle\Entity\Row $row)
    {
        $this->rows[] = $row;
        $row->setWidgetTable($this);

        return $this;
    }

    /**
     * Remove row
     *
     * @param \Victoire\Widget\TableBundle\Entity\Row $row
     */
    public function removeRow(\Victoire\Widget\TableBundle\Entity\Row $row)
    {
        $this->rows->removeElement($row);
    }

    /**
     * Get rows
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Add columnField
     *
     * @param \Victoire\Widget\TableBundle\Entity\Field $columnField
     *
     * @return WidgetTable
     */
    public function addColumnField($columnField)
    {
        if($columnField === null )
        {
            $columnField = new \Victoire\Widget\TableBundle\Entity\Field;
        }
        $this->columnFields[] = $columnField;
        $columnField->setColumnField($this);


        return $this;
    }

    /**
     * Remove columnField
     *
     * @param \Victoire\Widget\TableBundle\Entity\Field $columnField
     */
    public function removeColumnField(\Victoire\Widget\TableBundle\Entity\Field $columnField)
    {
        $this->columnFields->removeElement($columnField);
    }

    /**
     * Get columnFields
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColumnFields()
    {
        return $this->columnFields;
    }

    /**
     * Set option
     *
     * @param \Victoire\Widget\TableBundle\Entity\OptionValue $option
     *
     * @return WidgetTable
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

    /**
     * Set fullWidth
     *
     * @param boolean $fullWidth
     *
     * @return WidgetTable
     */
    public function setFullWidth($fullWidth)
    {
        $this->fullWidth = $fullWidth;

        return $this;
    }

    /**
     * Get fullWidth
     *
     * @return boolean
     */
    public function getFullWidth()
    {
        return $this->fullWidth;
    }
}
