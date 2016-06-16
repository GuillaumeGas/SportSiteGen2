<div id="page-wrapper">
    <div class="row">
    {if isset($ShowCom)}
        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1>News</h1>
                </div>
                <div class="col-lg-12">
                    <table>
                        <tr>
                            <td><a href="index.php?page=formSetNews&id={$News.Id}"   class="btn btn-primary btn-xs" style="text-decoration: none;">Modify</a></td>
                            <td><a href="index.php?page=news&action=delNews&id_news={$News.Id}" class="btn btn-danger btn-xs" style="text-decoration: none;">Delete</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="index.php?page=news&action=read_news&id={$News.Id}"><u>{$News.titre}</u></a> - <i>{$News.date}</i></div>
                            <div class="panel-body">
                                {$News.contenu}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {foreach from=$ListComs item=com}
                <div class="row" id="com_{$com.Id}">
                    <div class="well">
                        <h4><u>{$com.utilisateur}</u></a> - <i>{$com.date}</i>
                            <a href="index.php?page=formSetCom&id={$com.Id}&id_news={$com.idNews}#com_{$com.Id}"   class="btn btn-primary btn-xs" style="text-decoration: none;">Modify</a>
                            <a href="index.php?page=news&id_news={$com.idNews}&action=delCom&id={$com.Id}" class="btn btn-danger btn-xs" style="text-decoration: none;">Delete</a></h4>
                        <form role="form">
                            <div class="form-group">
                                {$com.contenu}
                            </div>
                        </form>
                    </div>
                </div>
            {/foreach}
        </div>
    {else}
        <div class="col-lg-12">
            <h1>News</h1>
        </div>
        <div class="col-lg-12">
            <table>
                <tr>
                    <td><a href="index.php?page=formAddNews" class="btn btn-primary btn-xs" style="text-decoration: none;">Add a news</a></td>
                    <td><a href="#" onclick="document.getElementById('form_delete').submit();" class="btn btn-danger btn-xs" style="text-decoration: none;">Delete</a></td>
                </tr>
            </table>
        </div>
        <div class="col-lg-12">
            <form method="POST" id="form_delete" action="index.php?page=news&action=delNews">
                {foreach $ListNews as $news}
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading"><input type="checkbox" name="id_news[]" value="{$news.Id}"/> <a href="index.php?page=news&id={$news.Id}"><u>{$news.titre}</u></a> - <i>{$news.date}</i></div>
                            <div class="panel-body">
                                {$news.contenu}
                            </div>
                        </div>
                    </div>
                {/foreach}
            </form>
        </div>
    {/if}
    </div>
</div>
