<?php

namespace App\Http\Controllers;
use App\Models\Agence;
use App\Models\Agent;
use App\Models\Concessionnaires;
use App\Models\Historique;
use App\Models\LignePanne;
use App\Models\Maintenance;
use App\Models\Panne;
use App\Models\Produit;
use App\Models\Terminal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{

   /*  lister les category */
    public function Home()
    {
        $maintenances = Maintenance::where('status','en cours')->limit(5)->get();
        $agences = Agence::all();
        $terminals = Terminal::all();
        return view('maintenance.list.home',['maintenances'=>$maintenances,'agences'=>$agences,'terminals'=>$terminals] );
    }
    public function Profil()
    {
        return view('maintenance.list.home');
    }
    public function AgenceListe()
    {
        $agences = Agence::latest()->paginate(15);
        return view('maintenance.list.agenceList',compact('agences'));
    } public function AgentListe()
    {
        $agents = Agent::latest()->paginate(9);
        return view('maintenance.list.agentList',compact('agents'));
    }
    public function ProduitListe()
    {
        $produits = Produit::latest()->paginate(15);
        return view('maintenance.list.produitList',compact('produits'));
    }
    public function ConcessionnaireListe()
    {
        $concessionnaires = Concessionnaires::latest()->paginate(15);
        return view('maintenance.list.concessionnaireList',compact('concessionnaires'));
    }
    public function MaintenanceListe()
    {
        $maintenances = Maintenance::latest()->paginate(15);
        $agences = Agence::all();
        $terminals = Terminal::all();
        return view('maintenance.list.maintenanceList',['maintenances'=>$maintenances,'agences'=>$agences,'terminals'=>$terminals] );
    }
    public function TerminalListe()
    {
        $agences = Agence::all();
        $produits = Produit::all();
        $concessionnaires = Concessionnaires::all();
        $terminals = Terminal::latest()->paginate(15);
        return view('maintenance.list.terminalList',['terminals'=>$terminals,'agences'=>$agences,'produits'=>$produits,'concessionnaires'=>$concessionnaires]);
    }


// Page ajouter pour une categorie

    public function MaintenanceAdd(){
        $agences = Agence::all();
        $terminals = Terminal::all();
        return view('maintenance.add.maintenance',['agences'=>$agences,'terminals'=>$terminals] );
    }

    public function PanneAdd(int $index, int $index2){
        $maintenance = $index;
        $terminal = $index2;
        $pannes = Panne::all();
        return view('maintenance.add.panne',['pannes'=>$pannes,'terminal'=>$terminal,'maintenance'=>$maintenance] );
    }

    public function TerminalAdd(){
        $agents = Agent::all();
        $produits = Produit::all();
        $agences = Agence::all();
        $concessionnaires = Concessionnaires::all();
        return view('maintenance.add.terminal',['agences'=>$agences,'agents'=>$agents,'produits'=>$produits,'concessionnaires'=>$concessionnaires] );
    }


    public function AgenceAdd(){
        return view('maintenance.add.agence' );
    }


    public function CommentAdd(int $maintenance){
        $maintenances = Maintenance::where('id',$maintenance)->first();
        return view('maintenance.add.commentaire',['maintenances'=>$maintenances]);
    }



    // enregistrer une maintenance
    public function storeMaintenance(Request $request)
    {
       $data = $request->all(); 
       $rules =  [
        'nom_deposant'=>'required|string',
        'prenom_deposant'=>'required|string',
        'contact'=>'required|string',
        'status'=>'required|string',
        'observation'=>'required|string',
        'id_agence'=>'required|integer',
        'id_terminal'=>'required|integer'
    ];
    $messages = [
        'nom_deposant.required' => 'nom deposant est obligatoire',
        'prenom_deposant.required' => 'prenom deposant est obligatoire',
        'contact.required' => 'contact est obligatoire',
        'status.required' => 'status est obligatoire',
        'status.observation' => 'observation est obligatoire',
        'id_agence.required' => 'agence est obligatoire',
        'id_terminal.required' => 'terminal est obligatoire',
        'string' => 'Cette valeur doit etre une chaine de caractere'
    ];

    Validator::make($data, $rules, $messages)->validate();
    Maintenance::create($data);
    session()->flash('message',"Maintenance  Enregistré!");
    return redirect()->route('maintenance-list.path');
    }

public function storePanne($maintenance,Request $request)
    {
       $data = $request->all();
       //dd($data); 
       $rules =  [
        'description'=>'required|string',
        'gravite'=>'required|string',
        'status'=>'required|string',
        'id_terminal'=>'required|string',
        'id_panne'=>'required|string',
        
    ];
    $messages = [
        'description.required' => 'description est obligatoire',
        'gravite.required' => 'gravite est obligatoire',
        'status.required' => 'status est obligatoire',
        'id_terminal.required' => 'maintenance est obligatoire',
        'id_panne.required' => 'panne est obligatoire',
        'string' => 'Cette valeur doit etre une chaine de caractere'
    ];

    Validator::make($data, $rules, $messages)->validate();
    LignePanne::create($data);
    session()->flash('message',"Panne  Enregistré!");
    //return back();
    return redirect('/maintenance-voir/'.$request->maintenance);
    }


public function storeTerminal(Request $request)
    {
       $data = $request->all();
       //dd($data); 
       $rules =  [
        'code_guichet'=>'required|string',
        'marque'=>'required|string',
        'model'=>'required|string',
        'id_concessionnaire'=>'required|string',
        'id_agence'=>'required|string',
        'id_produit'=>'required|string',
        
        ];
        $messages = [
            'code_guichet.required' => 'code guichet est obligatoire',
            'marque.required' => 'marque est obligatoire',
            'model.required' => 'model est obligatoire',
            'id_concessionnaire.required' => 'id_concessionnaire est obligatoire',
            'id_agence.required' => 'id_agence est obligatoire',
            'id_produit.required' => 'id_produit est obligatoire',
            'string' => 'Cette valeur doit etre une chaine de caractere'
        ];

        Validator::make($data, $rules, $messages)->validate();
        Terminal::create($data);
        session()->flash('message',"Terminal  Enregistré!");
        return redirect()->route('terminal-list.path');
    
    }
public function storeAgence(Request $request)
    {
       $data = $request->all();
       //dd($data); 
       $rules =  [
        'code'=>'required|string',
        'nom'=>'required|string',
        'ville'=>'required|string',
        
        
        ];
        $messages = [
            'code.required' => 'code est obligatoire',
            'nom.required' => 'nom est obligatoire',
            'ville.required' => 'ville est obligatoire',
            'string' => 'Cette valeur doit etre une chaine de caractere'
        ];

        Validator::make($data, $rules, $messages)->validate();
        Agence::create($data);
        session()->flash('message',"Agence  Enregistré!");
        return redirect()->route('agence-list.path');
    }


public function storeAgent(Request $request)
    {
       $data = $request->all();
       //dd($data); 
       $rules =  [
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'contact'=>'required|string',
        ];
        $messages = [
            'nom.required' => 'nom est obligatoire',
            'prenom.required' => 'prenom est obligatoire',
            'contact.required' => 'contact est obligatoire',
            'string' => 'Cette valeur doit etre une chaine de caractere'
        ];

        Validator::make($data, $rules, $messages)->validate();
        Agent::create($data);
        session()->flash('message',"Agent  Enregistré!");
        return redirect()->route('agent-list.path');
    }

public function storeComment(Request $request)
    {
        
        $data = $request->all();
        $rules =  [
                    'commentaire'=>'required|string',
                  
                     ];
                     
        $messages = [
                'required' => 'Cette valeur est obligatoire',
                'string' => 'Cette valeur doit etre une chaine de caractere',
                
            ];

        $data['id_agent'] = auth()->user()->id;
        Validator::make($data, $rules, $messages)->validate();
        Historique::create($data);
        session()->flash('success',"Commentaire enregistré!");
        return redirect('/maintenance-voir/'.$request->id_maintenance);
    }



    // Editer categorie
    public function MaintenanceEdit($index){
        
        $maintenance = Maintenance::findOrFail($index);
        $terminals = Terminal::all();
        $agences = Agence::all();
        return view('maintenance.edit.maintenance',['maintenance'=>$maintenance,'agences'=>$agences,'terminals'=>$terminals] );
    }
     public function PanneEdit(int $index1,$index2){
        $maintenance=$index1;
        $lignepanne = LignePanne::findOrFail($index2);
        $pannes = Panne::all();
        return view('maintenance.edit.panne',['pannes'=>$pannes,'lignepanne'=>$lignepanne,'maintenance'=>$maintenance]);
    }

    public function TerminalEdit($index){
        $terminal = Terminal::findOrFail($index);
        $agents = Agent::all();
        $produits = Produit::all();
        $concessionnaires = Concessionnaires::all();
        return view('maintenance.edit.terminal',['terminal'=>$terminal,'agents'=>$agents,'produits'=>$produits,'concessionnaires'=>$concessionnaires] );
    }


    public function AgenceEdit($index){
        $agence = Agence::findOrFail($index);
        return view('maintenance.edit.agence', compact('agence'));
    }


    public function AgentEdit($index){
        $agent = Agent::findOrFail($index);
        return view('maintenance.edit.agent', ['agent'=>$agent]);
    }


    // voir categorie
    public function MaintenanceVoir($index)
    {
        $maintenance = Maintenance::findOrFail($index);
        $terminals = Terminal::all();
        $pannes = Panne::latest()->get();
        $agences = Agence::all();
        $listpannes = LignePanne::where('id_terminal',$maintenance->id_terminal)->get();
        $agents = Agent::all();
        $concessionnaires = Concessionnaires::all();
        $produits = Produit::all();
        $historiques = Historique::latest()->get();
        return view('maintenance.voir.maintenance',['maintenance'=>$maintenance,'agences'=>$agences,'terminals'=>$terminals,'agents'=>$agents,'produits'=>$produits,'concessionnaires'=>$concessionnaires,'listpannes'=>$listpannes,'pannes'=>$pannes,'historiques'=>$historiques] );
    }

     public function PanneVoir($index)
    {   
        $lignepanne = LignePanne::findOrFail($index);
        $pannes = Panne::all();
        return view('maintenance.voir.panne',['pannes'=>$pannes,'lignepanne'=>$lignepanne] );
    }

     public function HistoriqueVoir($index)
    {   
        $lignepanne = LignePanne::findOrFail($index);
        $pannes = Panne::all();
        return view('maintenance.voir.historique',['pannes'=>$pannes,'lignepanne'=>$lignepanne] );
    }


    public function TerminalVoir($index)
    {   
        
        $terminal = Terminal::findOrFail($index);
        $concessionnaires = Concessionnaires::all();
        $pannes = Panne::all();
        $agents = Agent::all();
        $listpannes = LignePanne::where('id_terminal',$terminal->id)->get();
        $agences = Agence::all();
        $produits = Produit::all();
        return view('maintenance.voir.terminal',['pannes'=>$pannes,'agences'=>$agences,'terminal'=>$terminal,'agents'=>$agents,'produits'=>$produits,'concessionnaires'=>$concessionnaires,'listpannes'=>$listpannes] );
    }

    

    //update categorie

    public function UpdateMaintenance(Request $request, Maintenance $maintenance){
        $request->validate([
        ]);
        $maintenance->update([
            'nom_deposant'=>$request->nom_deposant,
            'prenom_deposant'=>$request->prenom_deposant,
            'contact'=>$request->contact,
            'status'=>$request->status,
            'observation'=>$request->observation,
            'id_terminal'=>$request->id_terminal,
            'id_agence'=>$request->id_agence
        ]);

        session()->flash('message',"Maintenance Actualisé!");
        return redirect()->route('maintenance-list.path');

    }

    public function UpdatePanne(Request $request, LignePanne $panne){
            $request->validate([
        ]);
            //dd($request);
        $panne->update([
            'gravite'=>$request->gravite,
            'status'=>$request->status,
            'description'=>$request->description,
            'id_panne'=>$request->id_panne,
            'id_terminal'=>$request->id_terminal,
        ]);

        session()->flash('message',"Panne Actualisé!");
        return redirect('/maintenance-voir/'.$request->maintenance);

        }

     public function UpdateTerminal(Request $request, Terminal $terminal){
            $request->validate([
        ]);
        $terminal->update([
            'code_guichet'=>$request->code_guichet,
            'marque'=>$request->marque,
            'model'=>$request->model,
            'id_concessionnaire'=>$request->id_concessionnaire,
            'id_agence'=>$request->id_agence,
            'id_produit'=>$request->id_produit,
        ]);

        session()->flash('message',"Terminal Actualisé!");
        return redirect()->route('terminal-list.path');

        }

     public function UpdateAgence(Request $request, Agence $agence){
            $request->validate([
        ]);
        $agence->update([
            'code'=>$request->code,
            'nom'=>$request->nom,
            'ville'=>$request->ville,
        ]);

        session()->flash('message',"Agence Actualisé!");
        return redirect()->route('agence-list.path');
        }

    public function UpdateAgent(Request $request, Agent $agent){
            $request->validate([
        ]);
        $agent->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'contact'=>$request->contact,
        ]);

        session()->flash('message',"Agent Actualisé!");
        return redirect()->route('agent-list.path');
        }





    // delete categorie
    public function destroyPanne(int $panne)
        {
            LignePanne::findOrFail($panne)->delete();
            session()->flash('message',"Panne supprimé!");
            return back(); 
        }
    public function destroyMaintenance(int $maintenance)
        {
            Maintenance::findOrFail($maintenance)->delete();
            session()->flash('message',"Maintenance supprimé!");
            return back(); 
        }
        public function destroyTerminal(int $terminal)
        {
            Terminal::findOrFail($terminal)->delete();
            session()->flash('message',"Terminal supprimé!");
            return back(); 
        }
        public function destroyAgence(int $agence)
        {
            Agence::findOrFail($agence)->delete();
            session()->flash('message',"Agence supprimé!");
            return back(); 
        }
        public function destroyAgent(int $agent)
        {
            Agent::findOrFail($agent)->delete();
            session()->flash('message',"Agent supprimé!");
            return back(); 
        }



}
