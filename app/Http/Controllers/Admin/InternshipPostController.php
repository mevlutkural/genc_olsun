<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InternshipPostRequest;
use App\Models\InternshipPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InternshipPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internshipPosts = InternshipPost::all();

        return view('admin.internship-posts.index', ['internshipPosts' => $internshipPosts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.internship-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InternshipPostRequest $req)
    {
        $internshipPost = new InternshipPost();
        $internshipPost->fill($this->prepare($req, $internshipPost->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $internshipPost->image_url = '/storage/images/' . $imageName;
        }

        $internshipPost->save();

        return redirect()->route('internship-posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternshipPost $internshipPost)
    {
        if (Storage::exists(str_replace('storage', 'public', $internshipPost->image_url))) {
            Storage::delete(str_replace('storage', 'public', $internshipPost->image_url));
        }

        $internshipPost->delete();

        return response('Staj ilanı başarıyla silindi.');
    }
}