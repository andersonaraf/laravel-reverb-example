<?php

namespace App\Events;

use Illuminate\Console\Command;

class PlaygroundCommand extends Command
{
    protected $signature = 'play';

    protected $description = 'Command description';

    public function handle(): void
    {
        TestingReverbEvent::dispatch();
    }
}
