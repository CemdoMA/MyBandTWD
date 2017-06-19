<div id="wrapper">
    <h1 style="color: white;">PHOTO'S | CAST</h1>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="1" style="background-image: url('images/rick.jpg')" onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary" style="padding: 0 2.5% 0 5%;">
        <div class="Imagegalary_img" id="2" style="background-image: url('images/Glenn.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary" style="padding: 0 5% 0 2.5%;">
        <div class="Imagegalary_img" id="3" style="background-image: url('images/daryl.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="4" style="background-image: url('images/maggie.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="5" style="background-image: url('images/carl.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary" style="padding: 0 2.5% 0 5%;">
        <div class="Imagegalary_img" id="6" style="background-image: url('images/michonne.jpg')" onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary"  style="padding: 0 5% 0 2.5%;">
        <div class="Imagegalary_img" id="7" style="background-image: url('images/morgan.jpg') " onclick="modaal(this.id)"></div>
    </div>
    <div class="Imagegalary">
        <div class="Imagegalary_img" id="8" style="background-image: url('images/carol.jpg') " onclick="modaal(this.id)"></div>
    </div>
<br style="clear: left;"/>


    <div id="berichtenAll">
        <h1>ARTICLES</h1>
        {foreach from=$result_list item=article}

        <div class="textBuiten1">
            <h5 class="datum"><strong>Posted on: </strong>{$article.date}</h5>
            <h2 class="title">{$article.title}</h2>

            <img src="{$article.image}" class="textFoto1">
            <div class="textBericht">
                <p>
                    {$article.content}
                    <a href="{$article.link}" class="links"><strong>{$article.linkTekst}</strong></a>
                </p>
            </div>
        </div>
        {/foreach}


    </div>

    {*<p id="pagenumber">Page {$page}</p>*}
    {*<table id="pagechanger">*}
        {*<tr>*}
            {*<td id="left">*}
                {*{if $page gt 1}*}
                    {*<a href="?url=home&page={$page-1}">Previous</a>*}
                {*{/if}*}
            {*</td>*}
            {*<td id="right">*}
                {*{if $page lt $number_of_pages}*}
                    {*<a href="?url=home&page={$page+1}">Next</a>*}
                {*{/if}*}

            {*</td>*}
        {*</tr>*}
    {*</table>*}

</div>





