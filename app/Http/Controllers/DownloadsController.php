<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculum;
use App\Assignment;
use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller


{
    public function __construct()
    {
        $this->middleware(['auth', 'suspend']);
    }

  //   public function curriculumdownload($id) {
  //     $file = Curriculum::find($id);
  //     $file_name = $file->file;
  //     $pathToFile = public_path('storage/files/'.$file_name);
  //   //   dd($pathToFile);
  //     return response()->download($pathToFile);
  // }

    public function curriculumdownload($id){
        $file = Curriculum::find($id);
        $filename = $file->file;
        return Storage::disk('s3')->download('files/' . $filename);
    }

    public function assignmentdownload($id){
        $assignment = Assignment::find($id);
        $file_name = $assignment->file;
        return Storage::disk('s3')->download('assignments/' . $file_name);
    }

   

 
}
