<?php if($_SESSION['id_user']) : ?>
<header>
	<h3>
		<strong>Despesas </strong><br>
		<small class="text-danger">Confira suas despesas.</small>
	</h3> 

	<h4 class="text-right text-danger">Despesa Total: R$ <?php echo $despesa->numRows() >0 ? number_format($despesa->getValorTotal(),2,",",".") : 0  ?></h4>
	<p class="bg-info">OBS: É recomendado que seja preenchido todos os campos.</p>
</header>

<form class="form-horizontal" method="POST">
	<input type="hidden" name="id" value="<?php echo !empty($id)? $id : null ?>">
	<div class="form-group">
		<div class="col-xs-12">
			<div class="input-group">
				<div class="input-group-addon">Descrição</div>
					<input type="text" class="form-control" name="tDescricao" 
					value="<?php echo !empty($descricao) ?  $descricao : null ?>">	
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<div class="input-group">
				<div class="input-group-addon">Data</div>
				<input type="date" name="tData" class="form-control" value="<?php echo !empty($data)? $data : date('Y-m-d') ?>" />
			</div>
		</div>
		<div class="col-xs-6">
			<div class="input-group">
				<div class="input-group-addon">Valor: R$</div>
				<input type="text" name="tValor" class="form-control" value="<?php echo !empty($valor) ? $valor : null ?>" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-12">
			<button type="submit" name="tEnviar" class="btn btn-default btn-block">Adicionar</button>
		</div>
	</div>
	
</form>
<?php else: header("Location: /home"); endif;?>