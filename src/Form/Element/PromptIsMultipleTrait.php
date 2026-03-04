<?php
namespace Collecting\Form\Element;

/**
 * Flag a prompt element as multiple or single.
 *
 * Prompt elements using this trait should implement InputProviderInterface and
 * set the "multiple" input spec accordingly in getInputSpecification().
 */
trait PromptIsMultipleTrait
{
    protected $multiple = false;

    public function setIsMultiple($multiple)
    {
        $this->multiple = (bool) $multiple;
        $this->setAttribute('multiple', $this->multiple);
        return $this;
    }
}
