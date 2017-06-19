


    {foreach from=$article_list item=article}}
            <div class="textBuiten1">
                    <h5 class="datum"><strong>Posted on: </strong>{$article.date}</h5>
                    <h2 class="title">{$article.title}</h2>

                    <img src="{$article.foto}" class="textFoto1">
                    <div class="textBericht">
                            <p>
                                {$article.content}
                                    <a href="{$article.link}" class="links" target="_blank"><strong>{$article.linkTekst}</strong></a>
                            </p>
                    </div>
            </div>
    {/foreach}




