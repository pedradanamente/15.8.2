
    <div style="clear:both;">
		<form class="navbar-form navbar-left" role="search" action="<?php echo $caminho; ?>index.php?p=pesquisar&subp=produtos&seek=">
			<div class="form-group">
				<input style="display:none;" name="p" type="text" class="form-control" placeholder="Search" value="pesquisar" />
				<input style="display:none;" name="subp" type="text" class="form-control" placeholder="Search" value="produtos" />
			</div>
			<div class="form-group">
				<input name="seek" type="text" class="formInputSearch form-control" placeholder="Search" value="<?php if (isset($seek)) { echo $seek; } ?>" id="pesquisa" onmouseover="document.getElementById('pesquisa').focus();" autofocus>
			</div>
			<button type="submit" class="btn btn-default">Enviar pesquisa</button>
		</form>
	</div>
    <div style="clear:both;"></div>