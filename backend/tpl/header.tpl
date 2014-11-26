<html>
    <header>
        <title>SportSiteGen</title>
    </header>
    <body>

    <div>
        <h1 align="center">HEADER</h1>
    </div>

<div>
{if isset($Message)}
    {if $TypeMessage == "info"}
        <p style="color:green;">{$Message}</p>
    {else}
        <p style="color:red;">{$Message}</p>
    {/if}
{/if}
</div>