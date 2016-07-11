<?php

namespace Gander\Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraints\All;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * Class ArrayAll
 * @package Gander\Symfony\Component\Validator\Constraints
 * @author Adam Gąsowski <adam.gasowski@gander.pl>
 */
class ArrayAll extends All
{
}