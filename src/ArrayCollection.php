<?php

namespace Gander\Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraints\Collection;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * Class ArrayCollection
 * @package Gander\Symfony\Component\Validator\Constraints
 * @author Adam Gąsowski <adam.gasowski@gander.pl>
 */
class ArrayCollection extends Collection
{
}