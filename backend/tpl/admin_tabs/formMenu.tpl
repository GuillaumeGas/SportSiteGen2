<div class="col-lg-12">
    <h1>Menu</h1>
</div>

<div class="col-lg-12">
    <form method="POST" action="index.php?page=administration&tab=menu&action=addMenu">
        <table class="table table-striped table-hover ">
           <tr>
               <td>Title : </td><td><input type="text" class="form-control" name="title"/></td>
               <td>Fonctionnality name : </td><td><input type="text" class="form-control" name="name"/></td>
               <td>Position :</td><td>
                   <select name="position" class="form-control" >
                    {foreach $Positions as $pos}
                        <option>{$pos}</option>
                    {/foreach}
                   </select>
               </td>
           </tr>
        </table>
    </form>
    <table class="table table-striped table-hover ">
        {foreach $Menu as $elem}
            <tr>
                <td>{$elem.position}</td>
                <th>{$elem.name}</th>
                <td>{$elem.url}</td>
                <td width="12%">
                    {if $elem.disabled == 1}
                        <a href="index.php?page=administration&tab=menu&action=setMenu&disabled=1&id={$elem.id}" class="btn btn-danger btn-xs">disabled</a>
                    {else}
                        <a href="index.php?page=administration&tab=menu&action=setMenu&disabled=0&id={$elem.id}" class="btn btn-success btn-xs">enabled</a>
                    {/if}
                </td>
                <td width="12%">
                    <a href="index.php?page=administration&tab=menu&action=setMenu&up=1&id={$elem.id}" class="btn btn-primary btn-xs">Up</a> -
                    <a href="index.php?page=administration&tab=menu&action=setMenu&down=1&id={$elem.id}" class="btn btn-primary btn-xs">Down</a>
                </td>
                <td width="12%">
                    <a href="index.php?page=administration&tab=menu&action=setMenu&delete=1&id={$elem.id}" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>
        {/foreach}
    </table>
</div>