<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goToSection = 'index';
        $itens = Permission::paginate(50); // limit de 3; Em blade: {{ $itens->links() }}

        // view() -> 'admin' é um diretório >>> views/admin/permissions.blade.php
        return view('admin.permissions', compact('itens'), compact('goToSection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $goToSection = 'create';

        return view('admin.permissions', compact('goToSection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission, $id)
    {
        // dd($role); // como a rota tem nome diferente do controller, essa função não funciona
        $goToSection = 'show';
        $record = Permission::find($id);

        // view() -> 'admin' é um diretório >>> views/admin/courses.blade.php
        return view('admin.permissions', compact('goToSection'), compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}