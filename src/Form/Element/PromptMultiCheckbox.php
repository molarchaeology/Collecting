<?php
namespace Collecting\Form\Element;

use Laminas\Form\Element\MultiCheckbox;

class PromptMultiCheckbox extends MultiCheckbox
{
    use PromptIsMultipleTrait;
    use PromptIsRequiredTrait;

    public function getInputSpecification(): array
    {
        $spec = parent::getInputSpecification();
        $spec['required'] = $this->required;
        return $spec;
    }
}
