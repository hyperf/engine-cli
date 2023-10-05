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

namespace Hyperf\Engine;

use ArrayObject;
use Hyperf\Engine\Contract\CoroutineInterface;
use Hyperf\Engine\Exception\RunningInNonCoroutineException;
use Hyperf\Engine\Exception\RuntimeException;

class Coroutine implements CoroutineInterface
{
    public function __construct(callable $callable) {}

    public function execute(...$data): static
    {
        throw new RuntimeException('Not implement');
    }

    public function getId(): int
    {
        throw new RuntimeException('Not implement');
    }

    public static function create(callable $callable, ...$data): static
    {
        throw new RuntimeException('Not implement');
    }

    public static function id(): int
    {
        return 0;
    }

    public static function pid(?int $id = null): int
    {
        throw new RunningInNonCoroutineException();
    }

    public static function set(array $config): void
    {
        throw new RuntimeException('Not implement');
    }

    public static function getContextFor(?int $id = null): ?ArrayObject
    {
        throw new RuntimeException('Not implement');
    }

    public static function defer(callable $callable): void
    {
        throw new RuntimeException('Not implement');
    }

    public static function yield(mixed $data = null): mixed
    {
        throw new RuntimeException('Not implement');
    }

    public static function resumeById(int $id, ...$data): mixed
    {
        throw new RuntimeException('Not implement');
    }

    public static function stats(): array
    {
        throw new RuntimeException('Not implement');
    }

    public static function exists(int $id): bool
    {
        throw new RuntimeException('Not implement');
    }
}
