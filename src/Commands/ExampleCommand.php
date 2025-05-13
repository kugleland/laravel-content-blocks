<?php

namespace Kugleland\LaravelContentBlocks\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'my-command';

    public $description = 'My command';

    public function handle(): int
    {
        $text = 'Mama, I\'m a command message!';

        $this->comment($text);

        return 0;
    }
}