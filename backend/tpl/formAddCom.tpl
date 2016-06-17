<div style="margin-bottom: 40px;">
    <h1 class="page-header" style="display: inline;">NEWS - Add Com</h1>
</div>
<div>
    {if !isset($MissingId)}
        <form method="POST" action="index.php?page=news&id={$NewsId}&action=addCom">
            Text : <input type="text" name="text"/><br>
            <input type="submit" value="Ok"/>
            <input type="hidden" name="id_news" value="{$NewsId}"/>
        </form>
    {/if}
</div>