<?php

namespace App\Http\Controllers;



use App\Annonce;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
          //  $dfg = DB::table('annonces');
           // var_dump($dfg);
            // $this->validate($request,[
            //     'titre'=>'required',
            //     'description'=>'required',
            //     'prix'=>'required',
            //     ]);
                $user = User::find(Auth::user()->id);
               // var_dump($user->id);
                Annonce::create([
                    'titre' => $request['titre'],
                    'description' => $request['description'],
                    'prix' => $request['prix'],
                   
                    ]);
                


                  
                    
                    // DB::table('annonces')
                    // ->where('id', $user->id)
                    // ->update(['titre' => $_POST['titre']], ['description' => $_POST['description']], ['prix' => $_POST['prix']]);
                    //var_dump($_POST['titre']);
                    return view('show');
                
                

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
      
          
                  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        //
    }
}
