<div>
    <form method="POST" action="index.php?page=news&action=delNews">
    <ul>
        {foreach $ListNews as $news}
            <li><input type="checkbox" name="id_news[]" value="{$news.id}"/> {$news.id} - {$news.author} : {$news.text}</li>
        {/foreach}
    </ul>
    <input type="submit" value="ok"/>
    </form>
</div>