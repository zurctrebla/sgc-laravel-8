<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateGuest;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Destiny;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    private $repository;

    public function __construct(Guest $guest /*, Destiny $destiny */)
    {
        $this->repository = $guest;
        // $this->repository = $destiny;
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
        // $destinies = /* Destiny::find()->all(); */  $this->repository->paginate();

        // dd($destinies);
        $destinies = Destiny::all();

        return view('admin.pages.guests.create', compact('destinies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teste()
    {
        return "ok";   //view('admin.pages.guests.create', compact('destinies'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateGuest $request)
    {
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('photo') && $request->photo->isValid()) {
            $data['photo'] = $request->photo->store('guests/photos');
        }

        $this->repository->create($data);

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

        $destinies = Destiny::all();

        return view('admin.pages.guests.edit', compact('guest', 'destinies'));
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
        if(!$guest = $this->repository->where('id', $id)->first()) {
            return redirect()->back();
        }

        // dd($request->all());
        // $guest->update($request->all());

        $data = $request->all();

        if ($request->hasFile('photo') && $request->photo->isValid()) {
            /** */
            // if (Storage::exist($guest->photo)) {
            //     Storage::delete($guest->photo);
            // }
            $data['photo'] = $request->photo->store('guests/photos');
        }

        $guest->update($data);

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

        // if (Storage::exist($guest->photo)) {
        //     Storage::delete($guest->photo);
        // }

        $guest->delete();

        return redirect()->route('guests.index');
    }

    // public function teste()
    // {
    //     $guests = $this->repository->latest()->paginate();
    //     return view('admin.pages.guests.teste', compact('guests'));
    // }

    /**
     * Search results
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $guests = $this->repository
                                ->where(function($query) use ($request){
                                    if($request->filter){
                                        $query->orWhere('name', 'LIKE', "%{$request->filter}%");
                                        $query->orWhere('person', $request->filter);
                                    }
                                })
                                ->paginate();

        return view('admin.pages.guests.index', compact('guests', 'filters'));
    }
}
