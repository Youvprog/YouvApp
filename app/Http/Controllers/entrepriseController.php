<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\entreprise;
use App\Models\embauche;



class entrepriseController extends Controller
{
    function addData(Request $req){

        $enp= new entreprise;

        
       
        $enp->Nom=$req->Nom;
        $enp->Matricule=$req->Matricule;
        $enp->DateCréation=$req->dateC;
        $enp->NumAdCnas=$req->Ncnas;
        $enp->Email=$req->email;
        $enp->NomGérant=$req->NomG;
        $enp->PrénomGérant=$req->PrénomG;
        $enp->Téléphone=$req->tel;

        

        $enp->save();
        
        

        return redirect('comptabledash');
     
    }

}


