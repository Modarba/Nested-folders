<?php

namespace App\Console\Commands;

use App\Models\Folder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Node\Block\ThematicBreak;

class SizeFolder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:size {folder}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $folderId=$this->argument('folder');
        $folderId=Folder::query()
            ->where('path','like',"%$folderId%")
            ->update(['size'=>12.5]);
        }
}
