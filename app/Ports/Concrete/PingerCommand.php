<?php

namespace App\Ports\Concrete;

use App\Adapters\Contracts\PingerAdapterInterface;
use Illuminate\Console\Command;

class PingerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pinger-command {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(PingerAdapterInterface $pingerAdapter)
    {
        $this->line($pingerAdapter->ping($this->arguments()['url']));
    }
}
