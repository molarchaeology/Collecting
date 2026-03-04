<?php
namespace Collecting\Form\Element;

use Omeka\Form\Element\ResourceSelect;

class PromptItem extends ResourceSelect
{
    use PromptIsMultipleTrait;
    use PromptIsRequiredTrait;

    public function getInputSpecification(): array
    {
        $spec = parent::getInputSpecification();
        $spec['multiple'] = $this->multiple;
        $spec['required'] = $this->required;
        return $spec;
    }
}
