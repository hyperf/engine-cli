<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Cases;

use Hyperf\Context\Context;
use Hyperf\Di\Exception\CircularDependencyException;
use Hyperf\Di\Resolver\DepthGuard;

/**
 * @internal
 * @coversNothing
 */
class DiTest extends AbstractTestCase
{
    protected function tearDown(): void
    {
        Context::destroy('di.depth');
    }

    public function testDepthGuard()
    {
        $guard = DepthGuard::getInstance();
        $guard->increment();
        $depth = Context::get('di.depth');
        $this->assertSame(1, $depth);
    }

    public function testDepthGuardException()
    {
        $guard = DepthGuard::getInstance();
        $this->expectException(CircularDependencyException::class);
        for ($i = 0; $i < 501; ++$i) {
            $guard->increment();
        }
    }
}
