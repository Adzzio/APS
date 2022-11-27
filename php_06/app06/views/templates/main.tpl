<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:'Opis domyślny'}">
	<title>{$page_title|default:"Tytuł domyślny"}</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">	
</head>
<body>

<div class="header">
	<h1>{$page_title|default:"Tytuł domyślny"}</h1>
	<h2>{$page_header|default:"Tytuł domyślny"}</h1>
	<p>
		{$page_description|default:"Opis domyślny"}
	</p>
		<div style="display: flex; align-content: center; margin: 0 auto; padding: 25px; color: whitesmoke">
			<a href="?action=home" style="padding: 15px">Strona glowa</a>
			<a href="?action=calc" style="padding: 15px">Kalkulator</a>
		</div>
</div>

<div class="content">
{block name=content} Domyślna treść zawartości .... {/block}
</div><!-- content -->

<div class="footer">
	<p>
{block name=footer} Domyślna treść stopki .... {/block}
	</p>
	<p>
		Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Przemysław Kudłacik)
	</p>
</div>

</body>
</html>