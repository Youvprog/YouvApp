<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employe;
use App\Models\embauche;


class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index($id)
    {
        $data=employe::find($id);
        return view('modifierE',['datas'=>$data]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //Save New Employé
    public function store(Request $request)
    {
        $employe = new employe;
        
        

        $employe->Nom=$request->NomEp;
        $employe->Prénom=$request->PrénomEp;
        $employe->Matricule=$request->MatriculeEp;
        $employe->Situ_fami=$request->SF;
        $employe->Date_naiss=$request->dateCEp;
        $employe->Lieu_naiss=$request->LieuDN;
        $employe->Nationnalité=$request->countries;
        $employe->nbrEnfantC=$request->enfantEN;
        $employe->numActNaiss=$request->ActN;
        $employe->CIN_N=$request->CIN;
        $employe->PassportN=$request->Npass;
        $employe->TéléphoneE=$request->telEp;
        $employe->Email=$request->emailEp;
        $employe->Groupage=$request->sang;

        
        
        $employe->save();
        
        

        return redirect('listemployé')->with('message','Employé ajouter avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Show liste Employé
    public function show()
    {
       $data = employe::all();
       return view('listemployé',['employes' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Update Employé
    public function update(Request $request)
    {
        $data = employe::find($request->id);
    
        $data->Nom=$request->NomEp;
        $data->Prénom=$request->PrénomEp;
        $data->Matricule=$request->MatriculeEp;
        $data->Situ_fami=$request->SF;
        $data->Date_naiss=$request->dateCEp;
        $data->Lieu_naiss=$request->LieuDN;
        $data->Nationnalité=$request->countries;
        $data->nbrEnfantC=$request->enfantEN;
        $data->numActNaiss=$request->ActN;
        $data->CIN_N=$request->CIN;
        $data->PassportN=$request->Npass;
        $data->TéléphoneE=$request->telEp;
        $data->Email=$request->emailEp;
        $data->Groupage=$request->sang;
         
       


        $data->save();
        return redirect('listemployé')->with('message','La mise a jour a était faite avec succès');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Delete Employé
    public function destroy($id)
    {
        $data=employe::find($id);
        $data->delete();
        return redirect('listemployé')->with('message','Employé supprimer!');
       
    }

    public function showTrait()
    {
        $testEmp = employe::all();
        return view('traitementPaie',['chicks' =>$testEmp]);
    }

    
}
