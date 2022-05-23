<?php

namespace App\Http\Controllers\File;

use App\Models\FileUpload;
use App\Http\Requests\StoreFileUploadRequest;
use App\Http\Requests\UpdateFileUploadRequest;

use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFileUploadRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreFileUploadRequest $request)
    {
        /*
       if($request->hasFile('files'))
       {
          $files = $request->file('files');

          foreach ($files as $file)
          {
              $filename = $file->getClientOriginalName();
              $path = $file->storeAs('uploads', $filename, 'public');

              FileUpload::create(
                  [
                    "name" => $filename,
                    "path" => '/storage/' . $path
                  ]
                  );
          }

          return response()->json(['success'=>'File uploaded successfully.']);
        }
        */

        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
         ]);

         $fileUpload = new FileUpload;

         if($request->file()) {
             $file_name = time().'_'.$request->file->getClientOriginalName();
             $file_path = $request->file('file')->storeAs('uploads', $file_name, 'public');

             $fileUpload->name = time().'_'.$request->file->getClientOriginalName();
             $fileUpload->path = '/storage/' . $file_path;
             $fileUpload->save();

             return response()->json(['success'=>'File uploaded successfully.']);
         }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileUploadRequest  $request
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileUploadRequest $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUpload $fileUpload)
    {
        //
    }
}
