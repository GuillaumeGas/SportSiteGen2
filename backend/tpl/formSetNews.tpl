<div style="margin-bottom: 40px;">
    <h1 class="page-header" style="display: inline;">NEWS - Set News</h1>
</div>
<div class="col-md-12">
    {if !isset($MissingId)}
        <form method="POST" action="index.php?page=news&id={$News.Id}&action=setNews" class="form">
            <div class="form-group">
                <b>Author</b> <input type="text" name="author" value="{$News.auteur}" class="form-control input-sm"/>
            </div>
            <div class="form-group">
                <b>Title</b> <input type="text" name="title" value="{$News.titre}" class="form-control input-sm"/>
            </div>
            <div class="form-group">
                <b>Id photo</b>
                <select name="id_photo" value="{$News.IdPhoto}" class="form-control input-sm">
                    {foreach $Photos as $id}
                        <option {if $id == $News.IdPhoto}selected="true"{/if}>{$id}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <b>Text</b>
                <textarea id="editor" name="text" rows="10" cols="80">{$News.contenu}</textarea>
                <script>
                            CKEDITOR.replace( 'editor' );
                </script>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm btn-block">Ok</button>
            </div>
            <input type="hidden" name="id" value="{$News.Id}"/>
        </form>
    {/if}
</div>