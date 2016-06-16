<div class="col-lg-12">
    <h1>Menu</h1>
</div>

<div class="col-lg-12">
    <form method="POST" action="index.php?page=administration&tab=template&action=setTemplate">
        <table class="table table-striped table-hover ">
            <tr>
                <td>Template : </td>
                <td>
                    <select name="templateName" class="form-control" >
                        {foreach $Templates as $template}
                            <option {if $template == $CurrentTemplate}selected="true"{/if}>{$template}</option>
                        {/foreach}
                    </select>
                </td>
                <td><button type="button" onclick="submit()" class="btn btn-primary">Update</button></td>
            </tr>
        </table>
    </form>
</div>