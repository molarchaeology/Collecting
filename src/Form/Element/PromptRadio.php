<?php
namespace Collecting\Form\Element;

use Laminas\Form\Element\Radio;

class PromptRadio extends Radio
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
