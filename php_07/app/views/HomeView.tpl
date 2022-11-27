{extends file="main.tpl"}

{block name=content}

    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="{$conf->action_url}home"  class="pure-menu-heading pure-menu-link">Strona glowna</a>
        <a href="{$conf->action_url}calcShow"  class="pure-menu-heading pure-menu-link">Kalukator</a>
        <a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
        <span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
    </div>

    <div>
        <h1>Pozdrawiam</h1>
    </div>

{/block}