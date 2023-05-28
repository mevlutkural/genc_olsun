<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TalentProgramRequest;
use App\Models\TalentProgram;
use Illuminate\Support\Facades\Storage;

class TalentProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $talentPrograms = TalentProgram::all();

        return view('admin.talent-programs.index', ['talentPrograms' => $talentPrograms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.talent-programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TalentProgramRequest $req)
    {
        $talentProgram = new TalentProgram();
        $talentProgram->fill($this->prepare($req, $talentProgram->getFillable()));

        $image = $req->file('image');

        if ($image) {
            $imageName = date('Y-m-d-H:i:s') . '-gencolsun.' .  $image->getClientOriginalExtension();

            $image->storeAs('/public/images', $imageName);

            $talentProgram->image_url = '/storage/images/' . $imageName;
        }

        $talentProgram->save();

        return redirect()->route('talent-programs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TalentProgram $talentProgram)
    {
        if (Storage::exists(str_replace('storage', 'public', $talentProgram->image_url))) {
            Storage::delete(str_replace('storage', 'public', $talentProgram->image_url));
        }

        $talentProgram->delete();

        return response('İş ilanı başarıyla silindi.');
    }
}