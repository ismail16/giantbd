<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\PostJob;

class PostJobController extends Controller
{
   public function index()
    {
        $PostJobs = PostJob::orderBy('id','desc')->get();
        return view('admin.post-job.index',compact('PostJobs'));
    }

    public function create()
    {
        return view('admin.post-job.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
          'title' => 'required',
          'department' => 'required'
        ]);

        $PostJob = new PostJob();

        $job_image = $request->file('job_image');
        $slug = str_slug($request->title);
        if (isset($job_image)){
            $imagename = $slug.'-'.uniqid().'.'.$job_image->getClientOriginalExtension();
            $job_image->move('images/PostJob',$imagename);
            $PostJob->job_image = $imagename;
        }

        $PostJob->title = $request->title;
        $PostJob->department = $request->department;
        $PostJob->job_link = $request->job_link;
        $PostJob->details = $request->details;
        $PostJob->status = 1;


        try{
            $PostJob->save();
            Session::flash('success', 'Job Post Successful!');
            return redirect()->route('admin.post-job.index');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $PostJob = PostJob::find($id);
        return view('admin.post-job.edit', compact('PostJob'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required',
          'department' => 'required'
        ]);

        $PostJob = PostJob::find($id);

        $job_image = $request->file('job_image');
        $slug = str_slug($request->title);
        if (isset($job_image)){
            // if (file_exists('images/PostJob/'.$PostJob->image)){
            //     unlink('images/PostJob/'.$PostJob->image);
            // }
            $imagename = $slug.'-'.uniqid().'.'.$job_image->getClientOriginalExtension();
            $job_image->move('images/PostJob',$imagename);
            $PostJob->job_image = $imagename;
        }

        $PostJob->title = $request->title;
        $PostJob->department = $request->department;
        $PostJob->job_link = $request->job_link;
        $PostJob->details = $request->details;
        $PostJob->status = 1;


        try{
            $PostJob->save();
            Session::flash('success', 'Job Update Successful!');
            return redirect()->route('admin.post-job.index');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }

    }

    public function destroy($id)
    {
      $PostJob = PostJob::find($id);
      if (file_exists('images/PostJob/'.$PostJob->job_image)){
        unlink('images/PostJob/'.$PostJob->job_image);
      }
      $PostJob->delete();
      Session::flash('success', 'Posted Job Delete Successful!');
      return back();
    }
}
