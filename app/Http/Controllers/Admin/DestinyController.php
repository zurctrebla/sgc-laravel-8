<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destiny;
use Illuminate\Http\Request;

class DestinyController extends Controller
{
    private $repository;

    public function __construct(destiny $destiny)
    {
        $this->repository = $destiny;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinies = $this->repository->latest()->paginate();

        return view('admin.pages.destinies.index', compact('destinies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.destinies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->repository->create($request->all());

        return redirect()->route('destinies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$destiny = $this->repository->where('id', $id)->first())
            return redirect()->back();

        return view('admin.pages.destinies.show', compact('destiny'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$destiny = $this->repository->where('id', $id)->first())
            return redirect()->back();

        return view('admin.pages.destinies.edit', compact('destiny'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$destiny = $this->repository->find($id))
            return redirect()->back();

        // dd($request->all());
        $destiny->update($request->all());

        return redirect()->route('destinies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Search results
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $destinies = $this->repository
                                ->where(function($query) use ($request){
                                    if($request->filter){
                                        $query->orWhere('name', 'LIKE', "%{$request->filter}%");
                                    }
                                })
                                ->paginate();

        return view('admin.pages.destinies.index', compact('destinies', 'filters'));
    }

}
