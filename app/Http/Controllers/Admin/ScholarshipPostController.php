<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScholarshipPostRequest;
use App\Models\ScholarshipPost;
use Illuminate\Support\Facades\Storage;

class ScholarshipPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scholarshipPosts = ScholarshipPost::all();

        return view('admin.scholarship-posts.index', ['scholarshipPosts' => $scholarshipPosts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.scholarship-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ScholarshipPostRequest $req)
    {
        $scholarshipPost = new ScholarshipPost();
        $scholarshipPost->fill($this->prepare($req, $scholarshipPost->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $scholarshipPost->image_url = '/storage/images/' . $imageName;
        }

        $scholarshipPost->save();


        return redirect()->route('scholarship-posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScholarshipPost $scholarshipPost)
    {
        if (Storage::exists(str_replace('storage', 'public', $scholarshipPost->image_url))) {
            Storage::delete(str_replace('storage', 'public', $scholarshipPost->image_url));
        }

        $scholarshipPost->delete();

        return response('Burs ilanı başarıyla silindi.');
    }
}