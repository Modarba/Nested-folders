<?php

namespace App\Console\Commands;

use App\Models\Folder;
use App\Models\User;
use Illuminate\Console\Command;

class CalculateSize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:size {id}';
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
        //       $folderId= $this->argument('id');
//       $sum=Folder::query()
//           ->where('path','like',"%$folderId%")
//           ->where('type','like','file')
//           ->select('size')
//           ->groupBy('size')
//           ->sum('size');
//       $add=Folder::query()
//           ->where('path','like',"%$folderId%")
//           ->where('type','like','folder')
//           ->where('id',$folderId)
//           ->update([
//               'size'=>$sum
//           ]);
//       $this->info($sum);
//        $id=$this->argument('id');
//        $folder=Folder::query()->
//        where('id',$id)->value('path');
//        $rep=explode("/",$folder);
//        $sum=Folder::query()
//            ->where('path','like',"%$id%")
//            ->where('type','like','file')
//            ->select('size')
//            ->groupBy('size')
//            ->sum('size');
//        $this->info($sum);
    }
}
