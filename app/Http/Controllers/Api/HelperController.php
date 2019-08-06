<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PaintingRepository;
use App\Models\Painting;

use Illuminate\Http\Request;

class HelperController extends Controller
{

    public function __construct(PaintingRepository $repository)
    {
        $this->repository = $repository;
        $this->table = 'paintings';
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request)
    {
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('files'), $imageName);

        return response()->json(['ok' => true, 'response' => ['file' => url('/files/' . $imageName)]]);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->store($request);

        return response()->json(['ok' => true, 'response' => 'success']);
    }
}
