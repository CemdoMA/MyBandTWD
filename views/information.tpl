
{foreach from=$information_list item=information}}
<div id="wrapper">
<div id="InfoBuiten">
    <h1>{$information.title}</h1>
    <iframe width="560" height="315" src="{$information.video1}" frameborder="0" allowfullscreen class="vid1"></iframe>
    <p class="textInformation">{$information.tekst}</p>
</div>
    <div class="DrieVideos">
    <iframe width="460" height="259" src="{$information.video2}" frameborder="0" allowfullscreen class="vid2"></iframe>
    <iframe width="460" height="259" src="{$information.video3}" frameborder="0" allowfullscreen class="vid3"></iframe>
    <iframe width="460" height="259" src="{$information.video4}" frameborder="0" allowfullscreen class="vid2"></iframe>
    </div>
</div>
{/foreach}
