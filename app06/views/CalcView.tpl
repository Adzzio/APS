{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<h3>Prosty kalkulator</h2>

	<form action="{$conf->action_root}calcCompute" method="post">
		<!--    <div class="form-group">-->
		<!--        <label for="id_x">Kwota</label>-->
		<!--        <input type="text" class="form-control" value="--><?php //print($x ?? ' '); ?>
		<!--"id="id_x" placeholder="Password">-->
		<!--    </div>-->
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" name="x" value=""/><br/>
		<label for="id_y">Lata: </label>
		<input id="id_y" type="text" name="y" value=""/><br/>
		<label for="id_z">Oprocentowanie: </label>
		<input id="id_z" type="text" name="z" value=""/><br/>
		<input type="submit" class="btn btn-success" value="Oblicz"/>
	</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}