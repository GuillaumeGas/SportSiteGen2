<div>
    <form method="POST" action="index.php?page=news&id={$News.id}&action=addNews">
        Author : <input type="text" name="author" value="{$News.author}"/><br>
        Title : <input type="text" name="title" value="{$News.title}"/><br>
        Text : <input type="text" name="text" value="{$News.text}"/><br>
        Id photo : <input type="number" name="id_photo" value="{$News.photo}"/><br>
        <input type="submit" value="Ok"/>
        <input type="hidden" name="id" value="{$News.id}"/>
    </form>
</div>