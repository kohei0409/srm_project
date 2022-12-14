<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersListRequest;
use App\Http\Requests\UpdateUsersListRequest;
use App\Models\UsersList;

class UsersListController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreUsersListRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\UsersList $usersList
     * @return \Illuminate\Http\Response
     */
    public function show(UsersList $usersList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\UsersList $usersList
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersList $usersList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateUsersListRequest $request
     * @param \App\Models\UsersList $usersList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersListRequest $request, UsersList $usersList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\UsersList $usersList
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersList $usersList)
    {
        //
    }
}
