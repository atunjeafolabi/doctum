<?php

/*
 * This file is part of the Doctum utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Doctum\Parser\Filter;

use Doctum\Reflection\ClassReflection;
use Doctum\Reflection\MethodReflection;
use Doctum\Reflection\PropertyReflection;

interface FilterInterface
{
    public function acceptClass(ClassReflection $class);

    public function acceptMethod(MethodReflection $method);

    public function acceptProperty(PropertyReflection $property);
}
