

<div id="wrapper">
    <h1 class="epiTitle">EPISODES</h1>
    {foreach from=$episodes_list item=episodes}

    <div class="episodeAll">
<div class="postImg">
    <div class="post_img" style="background-image: url('{$episodes.backgroundIMG}') "></div>
    <div class="textOver">
    <h3 style="text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black; margin: 0;">{$episodes.epiNumber}</h3>
        <h1 style="text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;">{$episodes.epiTitle}</h1>
    </div><div class="textOverDate">
        <h2 style="text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;">{$episodes.epiDate}</h2>
        </div>
    </div>
    </div>
    {/foreach}
    </div>

