<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateGuest;
use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    private $repository;

    public function __construct(Guest $guest)
    {
        $this->repository = $guest;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = $this->repository->latest()->paginate();

        return view('admin.pages.guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.guests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateGuest $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('guests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$guest = $this->repository->where('id', $id)->first())
            return redirect()->back();

        return view('admin.pages.guests.show', compact('guest'));
    }

    /**
     * Generate QrCode Table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function qrcode($id)
    {
        if(!$guest = $this->repository->where('id', $id)->first())
            return redirect()->back();

        $uri = env('URI_CLIENT') . "/{$guest->name}" ;

        return view('admin.pages.guests.qrcode', compact('uri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$guest = $this->repository->where('id', $id)->first())
            return redirect()->back();

        return view('admin.pages.guests.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateGuest $request, $id)
    {
        if(!$guest = $this->repository->where('id', $id)->first())
            return redirect()->back();

        // dd($request->all());
        $guest->update($request->all());

        return redirect()->route('guests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$guest = $this->repository->where('id', $id)->first())
            return redirect()->back();

        // return view('admin.pages.plans.show', [
        //     'plan' => $plan
        // ]);
        $guest->delete();

        return redirect()->route('guests.index');
    }

    public function teste()
    {
        $guests = $this->repository->latest()->paginate();
        return view('admin.pages.guests.teste', compact('guests'));
    }
}
