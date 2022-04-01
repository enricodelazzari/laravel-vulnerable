<?php

namespace Enrico\Vulnarable\Commands;

use Illuminate\Console\Command;

class VulnarableCommand extends Command
{
    public $signature = 'laravel-vulnerable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
