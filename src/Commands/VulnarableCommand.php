<?php

namespace Enrico\Vulnarable\Commands;

use Illuminate\Console\Command;

class VulnarableCommand extends Command
{
    public $signature = 'make:vulnerability';

    public $description = 'Adds everything needed to make your project vulnerable!';

    public function handle(): int
    {
        $this->comment('All done, your project is vulnerable!');

        return self::SUCCESS;
    }
}
