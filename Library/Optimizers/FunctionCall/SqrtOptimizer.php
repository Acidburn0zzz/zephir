<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir                                                                   |
 | Copyright (c) 2013-present Zephir Team (https://zephir-lang.com/)        |
 |                                                                          |
 | This source file is subject the MIT license, that is bundled with this   |
 | package in the file LICENSE, and is available through the world-wide-web |
 | at the following url: http://zephir-lang.com/license.html                |
 +--------------------------------------------------------------------------+
*/

namespace Zephir\Optimizers\FunctionCall;

use Zephir\Optimizers\MathOptimizer;

/**
 * SqrtOptimizer
 *
 * Optimizes calls to 'sqrt' using internal function
 */
class SqrtOptimizer extends MathOptimizer
{
    public function getFunctionName()
    {
        return 'sqrt';
    }
}
