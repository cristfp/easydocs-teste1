<?php
namespace App\Http\Controllers;

use App\Comprovantes;
use App\CustomLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComprovantesController extends Controller{

    // protected $comprovante;
    public $custom_log;

    public function __construct(CustomLog $custom_log)
    {
       // $this->comprovante = $comprovante;
        $this->custom_log = $custom_log;
    }

    public function index(){
    
     //   $this->custom_log->create(['content'=> "alteracao",
       //                             'operation' => 'edit']);
    $custom_log = CustomLog::all();    

    $comprovantes = Comprovantes::all();

    return view('comprovantes.index', compact('comprovantes', 'custom_log'));
    }

    public function create()
    {

        return view('comprovantes.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $sobrenome = $request->sobrenome;
        $email = $request->email;
        $rua = $request->rua;
        $bairro = $request->bairro;
        $numero = $request->numero;
        $complemento = $request->complemento;
        $cidade = $request->cidade;
        $estado = $request->estado;
        $status = $request->status;
        $observacoes = $request->observacoes;
        $imagem = $request->imagem;
        $comprovante= Comprovantes::create([
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'rua' => $rua,
            'bairro' => $bairro,
            'numero' => $numero,
            'complemento' => $complemento,
            'cidade' => $cidade,
            'estado' => $estado,
            'status' => $status,
            'observacoes' => $observacoes,
            'imagem' => $imagem
        ]);
        return redirect('/comprovantes');
    }

    public function destroy (Request $request)

        {

            Comprovantes::destroy($request->id);
          

            return redirect('/comprovantes');

        }

        public function edit($id)
        {
            $comprovantes = Comprovantes::findOrFail($id);
            return view('comprovantes.edit',['comprovantes'=>$comprovantes]);
        }

        
    public function update(Request $request)

    {

        Comprovantes::findOrFail($request->id)->update($request->all());
      

        return redirect('/comprovantes');

    }
}
