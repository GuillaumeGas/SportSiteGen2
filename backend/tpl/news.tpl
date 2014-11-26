<div>
    <ul>
        {foreach $ListNews as $news}
            <li>{$news.id} - {$news.author} : {$news.text}</li>
        {/foreach}
    </ul>
</div>