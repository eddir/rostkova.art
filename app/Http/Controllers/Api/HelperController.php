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
        $imageName = time();
        $imageFullName = $imageName . '.' . $request->image->getClientOriginalExtension();
        $imageMinName = $imageName . '.' . "min.jpg";
        $request->image->move(public_path('files'), $imageFullName);

        $img = \Image::make(public_path() . '/files/' . $imageFullName);
        $img->resize(round($img->width() / 3), round($img->height() / 3));
        $img->save(public_path() . '/files/' . $imageName . ".min.jpg", 80, 'jpg');

        return response()->json(['ok' => true, 'response' => ['file' => url('/files/' . $imageFullName)]]);
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
