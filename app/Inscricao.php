<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'usuarioId',
        'tipo',
        'editalId',
        'declaracaoDeVinculo',
        'historicoEscolar',
        'programaDasDisciplinas',
        'curriculo',
        'enem',
        'diploma',
        'comprovante',
        'curso',
        'polo',
        'turno',
		    'cursoDeOrigem',
        'instituicaoDeOrigem',
		    'naturezaDaIes',
        'endereco',
        'num',
        'bairro',
        'cidade',
        'uf',
        'homologado',
        'motivoRejeicao',
        'homologadoDrca',
        'coeficienteDeRendimento',
        'totalDisciplinas',
        'classificacao',
        'declaracaoDeVeracidade',
        'rg',
        'cpf',
        'quitacaoEleitoral',
        'reservista',
        'certidaoNascimento',
        'historicoEnsinoMedio',
        'declaracaoENADE',
        'declaracao_veracidade',
        'escola_em',
        'natureza_em',
        'endereco_em',
        'num_em',
        'bairro_em',
        'cidade_em',
        'uf_em',
        'curso_segunda_opcao',
        'turno_segunda_opcao',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'usuarioId');
    }

    public function edital()
    {
        return $this->belongsTo('App\Edital', 'editalId');
    }

}
