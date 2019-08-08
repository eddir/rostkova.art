<?php

namespace App\Http\Controllers\Front;

use App\ {
    Http\Controllers\Controller,
    Repositories\PaintingRepository,
    Models\Painting
};
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    /**
     * The PaintingRepository instance.
     *
     * @var \App\Repositories\PaintingRepository
     */
    protected $PaintingRepository;

    /**
     * Create a new PaintingController instance.
     *
     * @param  \App\Repositories\PaintingRepository $PaintingRepository
     * @return void
    */
    public function __construct(PaintingRepository $PaintingRepository)
    {
        $this->PaintingRepository = $PaintingRepository;
    }

    /**
     * Display index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Paintings = $this->PaintingRepository->getPresent();

        return view('front.index', compact('Paintings'));
    }

    /**
     * Display a listing of the Paintings.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $Paintings = $this->PaintingRepository->getPresent();

        return view('front.gallery.index', compact('Paintings'));
    }

    /**
     * Display the specified post by slug.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $painting = Painting::findOrFail($request->id);
        return view('front.gallery.painting', compact('painting'));
    }

}