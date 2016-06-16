<?php

namespace Gander\Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\AllValidator;

/**
 * Class ArrayAllValidator
 * @package Gander\Symfony\Component\Validator\Constraints
 */
class ArrayAllValidator extends AllValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if ($this->context
                ->getValidator()
                ->inContext($this->context)
                ->atPath($this->context->getPropertyPath())
                ->validate($value, new Type('array'))
                ->getViolations()
                ->count() === 0
        ) {
            parent::validate($value, $constraint);
        }
    }

}