<div class='row'>
	<div class="col-xs-12">
		<label class="form-label" for="">Nome:</label>
			<input type="text" class="form-control" name="nome" value="{{ isset($filiado->nome) ? $filiado->nome :'' }}" required>
	</div>

</div>
<div class="row">
	<div class="col-xs-12">
		<label class="form-label" for="">Filiação:</label>
			<input type="text" class="form-control " name="filiacao" value="{{ isset($filiado->filiacao) ? $filiado->filiacao :'' }}" required>
	</div>

</div>
<div class="row">
	<div class="col-xs-3">
		<label class="form-label" for="">Data de Nascimento:</label>
			<input type="text" class="form-control "  data-mask="date" name="dt_nascimento" required>
	</div>
	<div class="col-xs-3">
		<label class="form-label" for="">Matrícula:</label>
			<input type="text" class="form-control " name="matricula" required>
	</div>
	<div class="col-xs-3">
		<label class="form-label" for="">RG:</label>
			<input type="text" class="form-control " name="rg" required>

	</div>
	<div class="col-xs-3">
		<label class="form-label" for="">CPF:</label>
			<input type="text" class="form-control " data-mask="99999999999" name="cpf" id="cpf">
	</div>
</div>
<div class="row">
	<div class="col-xs-8">
		<label class="form-label" for="">Endereço:</label>
			<input type="text" class="form-control" name="endereco" required>
	</div>
	<div class="col-xs-4">
		<div class="form-group">
				<label class="form-label">Estado:</label>

				<select name="uf" class="select2" required>
						<option value="">Selecione um Estado</option>
						@foreach($estados as $estado)
								<option value="{{$estado->letter}}"
									@if(isset($filiado->uf))
										{{ $estado->letter == $filiado->uf ? 'selected="selected"' : '' }}
									@endif
									>{{$estado->title}}</option>
						@endforeach
				</select>


		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		<label class="form-label" for="">Cidade:</label>
			<input type="text" class="form-control" name="cidade" required>
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">CEP:</label>
			<input type="text" class="form-control " name="cep" data-mask="99.999-999" required>
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">Telefone Fixo:</label>
			<input type="text" class="form-control"  data-mask="(99) 999999999" name="tel_fixo">
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		<label class="form-label" for="">Celular:</label>
			<input type="text" class="form-control" data-mask="(99) 999999999" name="tel_celular">
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">Lotação:</label>
			<input type="text" class="form-control" name="lotacao" required>
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">Setor:</label>
			<input type="text" class="form-control" name="setor" required>
	</div>
</div>
<div class="row">
	<div class="col-xs-8">
		<label class="form-label" for="">Email:</label>
			<input type="text" class="form-control " name="email">
	</div>
	<div class="col-xs-4" style="margin-top:32px">
		<label class="form-label" for="">Cargo:</label>
		<label class="icheck-label form-label" for="TPPG">TPPG</label>
		<input tabindex="5" type="radio" id="TPPG" class="icheck-minimal-purple" name="tp_cargo" value="TPPG" checked>
		<label class="icheck-label form-label" for="APPGG">APPGG</label>
		<input tabindex="5" type="radio" id="APPGG" class="icheck-minimal-purple" name="tp_cargo" value="APPGG">
		<label class="icheck-label form-label" for="GPPGG">GPPGG</label>
		<input tabindex="5" type="radio" id="GPPGG" class="icheck-minimal-purple" name="tp_cargo" value="GPPGG">

	</div>
</div>
<div class="row">
	<div class="col-xs-4" style="margin-top:32px">
		<label class="form-label" for="">Status:</label>
		<label class="icheck-label form-label" for="filiado">Filiado</label>
		<input tabindex="5" type="radio"  class="icheck-minimal-purple" name="status" value="1" checked>
		<label class="icheck-label form-label" for="desfiliado">Desfiliado</label>
		<input tabindex="5" type="radio" class="icheck-minimal-purple" name="status" value="0">
	</div>
	<div class="col-xs-4" style="margin-top:32px">
		<label class="icheck-label form-label" for="filiado">Ação Judicial: </label>
		<input tabindex="5" type="checkbox"  class="icheck-minimal-purple" name="acao_judicial" value="1">
	</div>
</div>
