<?php

declare(strict_types=1);

namespace Symfony\UX\LiveComponent\Tests\Fixtures\Component;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('deferred_component')]
final class DeferredComponent
{
    use DefaultActionTrait;

    public function getLongAwaitedData(): string
    {
        return 'Long awaited data';
    }
}
