<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\YoungUniversityRequest;
use App\Models\YoungUniversity;
use Illuminate\Support\Facades\Storage;

class YoungUniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $youngUniversity = YoungUniversity::all();

        return view('admin.young-university.index', ['youngUniversity' => $youngUniversity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.young-university.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(YoungUniversityRequest $req)
    {
        $activitiesPost = new YoungUniversity();
        $activitiesPost->fill($this->prepare($req, $activitiesPost->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $activitiesPost->image_url = '/storage/images/' . $imageName;
        }

        $activitiesPost->save();

        return redirect()->route('young-university.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(YoungUniversity $activitiesPost)
    {
        if (Storage::exists(str_replace('storage', 'public', $activitiesPost->image_url))) {
            Storage::delete(str_replace('storage', 'public', $activitiesPost->image_url));
        }

        $activitiesPost->delete();

        return response('Etkinlik başarıyla silindi.');
    }
}