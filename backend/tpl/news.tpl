<div>
    {if isset($ShowCom)}
        {$News.id} - {$News.author} : {$News.text}

        <br>
        Coms :
        <form method="POST" action="index.php?page=news&id={$News.id}&action=delCom">
            <ul>
            {foreach $ListComs as $com}
                <li><input type="checkbox" name="id_com[]" value="{$com.id}"/> {$com.id} - {$com.author} : {$com.text}</li>
            {/foreach}
            </ul>
            <input type="submit" value="ok"/>
        </form>
    {else}
        <form method="POST" action="index.php?page=news&action=delNews">
            <ul>
                {foreach $ListNews as $news}
                    <li><input type="checkbox" name="id_news[]" value="{$news.id}"/> <a href="index.php?page=news&id={$news.id}">{$news.id} - {$news.author}</a> : {$news.text}</li>
                {/foreach}
            </ul>
            <input type="submit" value="ok"/>
        </form>
    {/if}
</div>