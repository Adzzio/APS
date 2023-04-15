<div class="inner" id="videosList" style="width: 100%;">
    <div style="display: flex; flex-wrap: wrap; width:100%; flex-direction: row">
        {foreach from=$allVideos item=video}
            <div class="inner-wrap"
                 style="border: 1px solid black; flex: 33%; padding: 15px; background-image: linear-gradient(to bottom right, #450564, #9a33cb);">
                <p>Tytuł filmu: {$video.Tytul}<p>
                <p>Obsada:</p>
                <p>Imię: {$video.obsada.Imie}</p>
                <p>Nazwisko: {$video.obsada.Nazwisko}</p>
                <p>Data urodzenia: {$video.obsada.Data_Urodzenia}</p>
                <p>Imię: {$video.obsada.Imie}</p>
                <p>Nazwisko: {$video.obsada.Nazwisko}</p>
                <p>Data urodzenia: {$video.obsada.Data_Urodzenia}</p>
                <p>Rezyser: </p>
                <p>Imie rezysera: {$video.rezyser.Imie}</p>
                <p>Nazwisko rezysera: {$video.rezyser.Nazwisko}</p>
                <p>Wiek rezysera: {$video.rezyser.Wiek}</p>
                <a href="film?id={$video.ID_Film}"> Zobacz mnie </a>
            </div>
        {/foreach}
    </div>
</div>