<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ActivitesPostRequest;
use App\Models\ActivitiesPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivitiesPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activitiesPosts = ActivitiesPost::all();

        return view('admin.activities-posts.index', ['activitiesPosts' => $activitiesPosts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activities-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $activitiesPost = new ActivitiesPost();
        $activitiesPost->fill($this->prepare($req, $activitiesPost->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $activitiesPost->image_url = '/storage/images/' . $imageName;
        }

        $activitiesPost->save();

        return redirect()->route('activities-posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivitiesPost $activitiesPost)
    {
        if (Storage::exists(str_replace('storage', 'public', $activitiesPost->image_url))) {
            Storage::delete(str_replace('storage', 'public', $activitiesPost->image_url));
        }

        $activitiesPost->delete();

        return response('Etkinlik başarıyla silindi.');
    }
}