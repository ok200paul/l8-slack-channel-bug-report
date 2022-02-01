<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\SlackNotificationToAlternativeChannel;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing notifications to alternative channels using the to() method';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::first();

        $user->notify(new SlackNotificationToAlternativeChannel());
        return 0;
    }
}
