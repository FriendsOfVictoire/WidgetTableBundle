<?php

namespace Victoire\Widget\TableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionCondition
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class OptionCondition
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
     * @ORM\Column(name="conditionExpression", type="string", length=255)
     */
    private $conditionExpression;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionOperator", type="string", length=255)
     */
    private $conditionOperator;

    /**
     * @var string
     *
     * @ORM\Column(name="valid", type="string", length=255)
     */
    private $valid;

    /**
     * @var string
     *
     * @ORM\Column(name="notValid", type="string", length=255, nullable=true)
     */
    private $notValid;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="OptionValue", inversedBy="conditions")
     *
     */
    private $optionValue;


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
     * Set conditionExpression
     *
     * @param string $conditionExpression
     *
     * @return OptionCondition
     */
    public function setConditionExpression($conditionExpression)
    {
        $this->conditionExpression = $conditionExpression;

        return $this;
    }

    /**
     * Get conditionExpression
     *
     * @return string
     */
    public function getConditionExpression()
    {
        return $this->conditionExpression;
    }

    /**
     * Set valid
     *
     * @param string $valid
     *
     * @return OptionCondition
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return string
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * Set notValid
     *
     * @param string $notValid
     *
     * @return OptionCondition
     */
    public function setNotValid($notValid)
    {
        $this->notValid = $notValid;

        return $this;
    }

    /**
     * Get notValid
     *
     * @return string
     */
    public function isNotValid()
    {
        return $this->notValid;
    }

    /**
     * Get valid
     *
     * @return string
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Get notValid
     *
     * @return string
     */
    public function getNotValid()
    {
        return $this->notValid;
    }

    /**
     * Set optionValue
     *
     * @param \Victoire\Widget\TableBundle\Entity\OptionValue $optionValue
     *
     * @return OptionCondition
     */
    public function setOptionValue(\Victoire\Widget\TableBundle\Entity\OptionValue $optionValue = null)
    {
        $this->optionValue = $optionValue;

        return $this;
    }

    /**
     * Get optionValue
     *
     * @return \Victoire\Widget\TableBundle\Entity\OptionValue
     */
    public function getOptionValue()
    {
        return $this->optionValue;
    }

    /**
     * Set conditionOperator
     *
     * @param string $conditionOperator
     *
     * @return OptionCondition
     */
    public function setConditionOperator($conditionOperator)
    {
        $this->conditionOperator = $conditionOperator;

        return $this;
    }

    /**
     * Get conditionOperator
     *
     * @return string
     */
    public function getConditionOperator()
    {
        return $this->conditionOperator;
    }
}
