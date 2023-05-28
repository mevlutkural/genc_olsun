<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentClubRequest;
use App\Models\StudentClub;
use Illuminate\Support\Facades\Storage;

class StudentClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentClubs = StudentClub::all();

        return view('admin.student-clubs.index', ['studentClubs' => $studentClubs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student-clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentClubRequest $req)
    {
        $studentClub = new StudentClub();
        $studentClub->fill($this->prepare($req, $studentClub->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $studentClub->image_url = '/storage/images/' . $imageName;
        }

        $studentClub->save();

        return redirect()->route('student-clubs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentClub $studentClub)
    {
        if (Storage::exists(str_replace('storage', 'public', $studentClub->image_url))) {
            Storage::delete(str_replace('storage', 'public', $studentClub->image_url));
        }

        $studentClub->delete();

        return response('Öğrenci Klübü başarıyla silindi.');
    }
}