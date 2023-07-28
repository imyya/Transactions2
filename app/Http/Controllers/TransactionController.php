<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TransactionController extends Controller
{
    public function store(Request $request){
        switch($request->type){
            case 1://si c un transfert
                if($request->fournisseur!=='wari'){//cas ou c pas wari
                    Compte::findOrfail($request->compte_id);//rechercher si le client a un compte 
                    $recipient = Compte::where('numero', $request->recipient)->first();

                    if(!$request->code && !$recipient){ //ya pas de code ni de destinataire so..
                       return response()->json(['error'=>"Destinataire sans compte et aucun code recu"]);
        
                    }
                    //ya destinataire but client et dest dont have the same the same fournisseur
                    elseif($recipient && $request->fournisseur!== $recipient->fournisseur){
                        return response()->json(['error'=>'Le destinataire na pas ce fournisseur']);
                    }
                    $transaction=Transaction::create(['type'=>$request->type,"date"=>Carbon::now()->format('Y-m-d'),
                        'montant'=>$request->montant,'compte_id'=>$request->compte_id]);
                        return response()->json($transaction);
            
                };
                break;
        }

       
        case 0://cas depot





       



         
    }
}
