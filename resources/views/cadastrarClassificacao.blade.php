@extends('layouts.app')
@section('titulo','Classificar Inscrição')
@section('navbar')
    Home/Detalhes do edital/Classificar Inscrição/{{$inscricao->cpfCandidato}}
@endsection
@section('content')

<div class="container">
<div class="row justify-content-center">
  <form method="POST" action={{ route('cadastroClassificacao') }} enctype="multipart/form-data">
    @csrf
  <div class="col-md-8">
    <div class="card" style="width: 50rem">
      <div class="card-header">{{ __('Classificar Inscrição') }}</div>
      <div class="card-body">
        <div class="form-group row" >
          <table class="table table-ordered table-hover">
            <tr>
              <th>Requisito</th>
              <th>Dados</th>
            </tr>
            <tr <?php if($inscricao->declaracaoDeVinculo == ''){echo('style="display: none"');} ?> >
              <div class="form-group row" >
                  <td>
                    <label for="declaracaoDeVinculo" >{{ __('Declaração de Vinculo') }}</label>
                  </td>
                  <div class="col-md-6">
                      <td>
                        <a href="{{ route('download', ['file' => $inscricao->declaracaoDeVinculo])}}" target="_blank">Abrir arquivo</a>
                      </td>
                  </div>
              </div>
            </tr>
            <tr <?php if($inscricao->historicoEscolar == ''){echo('style="display: none"');} ?> >
              <div class="form-group row" >
                <td>
                  <label for="historicoEscolar" >{{ __('Historico Escolar') }}</label>
                </td>
                  <div class="col-md-6">
                    <td>
                      <a href="{{ route('download', ['file' => $inscricao->historicoEscolar])}}" target="_new">Abrir arquivo</a>
                    </td>
                  </div>
              </div>
            </tr>
            <tr <?php if($inscricao->programaDasDisciplinas == ''){echo('style="display: none"');} ?> >
              <div class="form-group row" >
                <td>
                  <label for="programaDasDisciplinas" >{{ __('Programa das Disciplinas') }}</label>
                </td>
                  <div class="col-md-6">
                    <td>
                      <a href="{{ route('download', ['file' => $inscricao->programaDasDisciplinas])}}" target="_blank">Abir arquivo</a>
                    </td>
                  </div>
              </div>
            </tr>
            <tr <?php if($inscricao->curriculo == ''){echo('style="display: none"');} ?> >
              <div class="form-group row" >
                <td>
                  <label for="curriculo" >{{ __('Curriculo') }}</label>
                </td>
                  <div class="col-md-6">
                    <td>
                      <a href="{{ route('download', ['file' => $inscricao->curriculo ])}}" target="_blank">Abrir arquivo</a>
                    </td>
                  </div>
              </div>
            </tr>
            <tr <?php if($inscricao->enem == ''){echo('style="display: none"');} ?> >
              <div class="form-group row" >
                <td>
                  <label for="enem" >{{ __('ENEM') }}</label>
                </td>
                  <div class="col-md-6">
                    <td>
                      <a href="{{ route('download', ['file' => $inscricao->enem ])}}" target="_blank">Abrir arquivo</a>
                    </td>
                  </div>
              </div>
            </tr >
          </table>
        </div>
        <div class="form-group row" >
          <div>
            <label for="coeficienteDeRendimento" class="field a-field a-field_a2 page__field">
                <input id="coeficienteDeRendimento" type="text" name="coeficienteDeRendimento" autofocus class="form-control @error('coeficienteDeRendimento') is-invalid @enderror field__input a-field__input" placeholder="Coeficiente de Rendimento"  value="{{ old('coeficienteDeRendimento') }}">
                <span class="a-field__label-wrap">
                  <span class="a-field__label">Coeficiente de Rendimento</span>
                </span>
            </label>
            @error('coeficienteDeRendimento')
            <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        <div>
          <label for="materias" class="field a-field a-field_a2 page__field" style="margin-left: 20px">
              <input id="materias" type="text" name="materias" autofocus class="form-control @error('materias') is-invalid @enderror field__input a-field__input" placeholder="Nº Disciplinas Obrigatórias"  value="{{ old('materias') }}">
              <span class="a-field__label-wrap">
                <span class="a-field__label">Nº Disciplinas Obrigatórias</span>
              </span>
          </label>
          @error('materias')
          <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div>
          <label for="completadas" class="field a-field a-field_a2 page__field" style="margin-left: 20px">
              <input id="completadas" type="text" name="completadas" autofocus class="form-control @error('completadas') is-invalid @enderror field__input a-field__input" placeholder="Nº Disciplinas Cursadas" value="{{ old('completadas') }}">
              <span class="a-field__label-wrap">
                <span class="a-field__label">Nº Disciplinas Cursadas</span>
              </span>
          </label>
          @error('completadas')
          <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        </div>

      </div>
    </div>
    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4" style="margin-top: 10px; margin-left: 20rem">
        <input type="hidden" name="inscricaoId" value="{{$inscricao->id}}">
        <button id="buttonFinalizar" type="submit" class="btn btn-primary btn-primary-lmts">
          {{ __('Finalizar') }}
        </button>

      </div>
    </div>
  </div>
  </form>
</div>


<script type="text/javascript" >
</script>
@endsection
