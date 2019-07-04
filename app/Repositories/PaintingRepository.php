<?php

namespace App\Repositories;

use App\Models\ {
    Painting
};
use App\Services\Thumb;

class PaintingRepository
{

    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Create a new PicturesRepository instance.
     *
     * @param  \App\Models\Painting $painting
     */
    public function __construct(Painting $painting)
    {
        $this->model = $painting;
    }

    /**
     * Get all paintings collection paginated.
     *
     * @param  int  $nbrPages
     * @param  array  $parameters
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll($nbrPages, $parameters)
    {
        return $this->model->orderBy ($parameters['order'], $parameters['direction'])
            ->when ($parameters['active'], function ($query) {
                $query->whereActive (true);
            })->paginate ($nbrPages);
    }

    /**
     * Get paintings for the top page.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPresent()
    {
        return Painting::limit(10)->get();
    }

    /**
     * Get painting by slug.
     *
     * @param  string  $slug
     * @return array
     */
    public function getPaintingBySlug($slug)
    {
        $painting = $this->model->whereSlug($slug)->firstOrFail();
        return compact('painting');
    }

    /**
     * Update painting.
     *
     * @param \App\Models\Painting  $painting
     * @param \App\Http\Requests\PaintingRequest  $request
     * 
     * @return void
     */
    public function update($painting, $request)
    {
        $request->merge(['active' => $request->has('active')]);

        $painting->update($request->all());
    }

    /**
     * Store painting.
     *
     * @param  \App\Http\Requests\PaintingRequest  $request
     * @return void
     */
    public function store($request)
    {
        $request->merge(['active' => $request->has('active')]);

        $painting = Painting::create($request->all());
    }
}
