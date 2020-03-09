<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculum;
use App\Assignment;

class DownloadsController extends Controller
{

    public function curriculumdownload($id) {
      $file = Curriculum::find($id);
      $file_name = $file->file;
      $pathToFile = public_path('storage/files/'.$file_name);
      return response()->download($pathToFile);
  }

    public function assignmentdownload($id){
        $assignment = Assignment::find($id);
        $file_name = $assignment->file;
        $pathToFile = public_path('storage/assignments/'.$file_name);
        return response()->download($pathToFile);
      
    }
  

 
}
