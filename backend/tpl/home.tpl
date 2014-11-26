<div>
    Home !<br>
    News :
    <ul>
    {foreach $News as $n}
        <li>{$n.id} : {$n.title}</li>
    {/foreach}
    </ul>

    <br>
    <b>{$New2.title}</b>
</div>