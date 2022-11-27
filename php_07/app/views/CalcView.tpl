{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}home"  class="pure-menu-heading pure-menu-link">Strona glowna</a>
	<a href="{$conf->action_url}calcShow"  class="pure-menu-heading pure-menu-link">Kalukator</a>
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

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

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}