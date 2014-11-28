<div class="row">
    <ul class="nav nav-tabs" style="margin-left: 15px;">
        <li {if $CurrentTab == "menu"} class="active" {/if}><a href="index.php?page=administration&tab=menu" {if $CurrentTab == "menu"} data-toggle="tab" {/if}>Menu</a></li>
        <li {if $CurrentTab == "template"} class="active" {/if}><a href="index.php?page=administration&tab=template" {if $CurrentTab == "template"} data-toggle="tab" {/if}>Template</a></li>
    </ul>
</div>

{$ContentTab}