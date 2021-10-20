<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUser;
use Illuminate\Http\Request;
use App\User;
use App\Models\{
        Vehicle,
        Complement,
        Phone
    };

class UserController extends Controller
{
    protected $repository;

    public function __construct(User $user)
    {
        $this->repository = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->paginate();

        return view('admin.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function member()
    {
        return view('admin.pages.users.member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateUser  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateUser $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);  //  encrypt password

        // $this->repository->create($data);
        $user = User::create($data);

        $user->phone()->create($request->only('number'));       //  desta forma ok
        $user->vehicle()->create($request->only('vehicle'));       //  desta forma ok
        $user->complement()->create($request->only('complement', 'type', 'occupants'));       //  desta forma ok
        // $phone = $user->phone()->create($data);              //  desta forma ok

        // $user = $this->repository->where('name', $data['name']);
        // dd($user->id);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$user = $this->repository->find($id)){
            return redirect()->back();
        }

        return view('admin.pages.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$user = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.users.edit',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateUser  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateuser $request, $id)
    {
        if(!$user = $this->repository->find($id))
            return redirect()->back();

        $data = $request->only(['name', 'email', 'number', 'vehicle', 'complement']);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        /** inicio da modificação */
        if (Phone::where('user_id', $id)->first()) {
            $user->phone()->update([
                'user_id' => $id,
                'number' => $data['number'],
            ]);
        }else{
            $user->phone()->create($request->only('number'));
        }
        /** fim */
        /** inicio da modificação */
        if (Vehicle::where('user_id', $id)->first()) {
            $user->vehicle()->update([
                'user_id' => $id,
                'vehicle' => $data['vehicle'],
            ]);
        }else{
            $user->vehicle()->create($request->only('vehicle'));
        }
        /** fim */
        /** inicio da modificação */
        if (Complement::where('user_id', $id)->first()) {
            $user->complement()->update([
                'user_id' => $id,
                'complement' => $data['complement'],
                'type' => $data['type'],
                'occupants' => $data['occupants'],
            ]);
        }else{
            $user->complement()->create($request->only('complement', 'type', 'occupants'));
        }
        /** fim */
        //  $user->update($data);   trecho original
        return redirect()->route('users.index')->with('message', 'Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->repository->where('id', $id)->first();

        if(!$user)
            return redirect()->back();

        // return view('admin.pages.users.show', [
        //     'user' => $user
        // ]);
        $user->delete();

        return redirect()->route('users.index');
    }

    /**
     * Search results
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    // public function search(Request $request)
    // {
    //     $filters = $request->only('filter');

    //     $users = $this->repository
    //                             ->where(function($query) use ($request){
    //                                 if($request->filter){
    //                                     $query->orWhere('name', 'LIKE', "%{$request->filter}%");
    //                                     $query->orWhere('email', $request->filter);
    //                                 }
    //                             })
    //                             ->paginate();

    //     return view('admin.pages.users.index', compact('users', 'filters'));
    // }
}
