<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; /**se usa para trabajar fechas*/
use App\Http\Requests\CreateMessageRequest;
use DB;

class MessagesController extends Controller
{
    public function __construct(){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // $messages = $this->messages->getPaginated();
    $messages=DB::table('messages')->get();
    return view('messages.index',compact('messages'));
    // return $this->view->make('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { return view('messages.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMessageRequest $request)
        {
        $data=$request->validated();
        DB::table('messages')->insert([
        "nombre"=>$request ->input('nombre'),
        "email"=>$request ->input('email'),
        "mensaje"=>$request ->input('mensaje'),
        "created_at"=>Carbon::now(),
        "update_at"=>Carbon::now(),       
        
        
        ]);
        return redirect() ->route('messages.index') ->whit('info', 'Tu mensaje fue creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
