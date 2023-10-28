<?php

namespace App\Http\Controllers;

use App\Models\DataBBBoys;
use App\Models\DataBBGirl;
use App\Models\DataTBBoys;
use App\Models\DataTBGirl;
use Illuminate\Http\Request;

class DataTbbbController extends Controller
{
    public function dataTBBB()
    {
        $tbboys = DataTBBoys::all();
        $bbboys = DataBBBoys::all();
        $tbgirl = DataTBGirl::all();
        $bbgirl = DataBBGirl::all();
        $combinedData = [
            'tbboys' => $tbboys,
            'bbboys' => $bbboys,
            'tbgirl' => $tbgirl,
            'bbgirl' => $bbgirl,
        ];
        return response()->json($combinedData);
    }
}
