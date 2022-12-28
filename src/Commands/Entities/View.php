<?php

declare(strict_types=1);

namespace Console\Commands\Entities;

class View
{
    public function __construct(
        public string $name,
        public \SplFileInfo $file,
        public string $contents,
        public bool $shouldExport
    ) {
    }
}
