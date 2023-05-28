<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobPostRequest;
use App\Models\JobPost;
use Illuminate\Support\Facades\Storage;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPosts = JobPost::all();

        return view('admin.job-posts.index', ['jobPosts' => $jobPosts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.job-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobPostRequest $req)
    {
        $jobPost = new JobPost();
        $jobPost->fill($this->prepare($req, $jobPost->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $jobPost->image_url = '/storage/images/' . $imageName;
        }

        $jobPost->save();

        return redirect()->route('job-posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPost $jobPost)
    {
        if (Storage::exists(str_replace('storage', 'public', $jobPost->image_url))) {
            Storage::delete(str_replace('storage', 'public', $jobPost->image_url));
        }

        $jobPost->delete();

        return response('İş ilanı başarıyla silindi.');
    }
}