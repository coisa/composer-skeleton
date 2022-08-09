<?php

declare(strict_types=1);

/**
 * This file is part of coisa/composer-skeleton.
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 *
 * @link      https://github.com/coisa/composer-skeleton
 * @copyright Copyright (c) 2022 Felipe Sayão Lobato Abreu <github@mentor.dev.br>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace CoiSA\Component;

use PHPUnit\Framework\TestCase;

/**
 * Class DummyTest.
 *
 * @package Test
 *
 * @internal
 * @coversNothing
 */
final class DummyTest extends TestCase
{
    /**
     * Test if true is really true (duh!).
     */
    public function testAlwaysTrue(): void
    {
        static::assertTrue(true);
    }
}
