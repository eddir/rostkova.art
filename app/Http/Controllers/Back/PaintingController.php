<?php

namespace App\Http\Controllers\Back;

use App\ {
    Models\Painting,
    Http\Controllers\Controller,
    Http\Requests\PaintingRequest,
    Repositories\PaintingRepository,
};
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    use Indexable;

    public function __construct(PaintingRepository $repository)
    {
        $this->repository = $repository;
        $this->table = 'paintings';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.paintings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaintingRequest $request)
    {
        $this->repository->store($request);
        return redirect(route('paintings.index'))->with('painting-ok', __('The painting has been successfully created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function show(Painting $painting)
    {
        return view('back.paintings.show', compact('painting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function edit(Painting $painting)
    {
        return view('back.paintings.edit', compact('painting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function update(PaintingRequest $request, Painting $painting)
    {
        $this->repository->update($painting, $request);
        return back()->with('painting-ok', __('The painting has been successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
      $painting->delete ();
      return response ()->json ();
    }
}
