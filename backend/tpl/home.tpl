<div>
    Home !<br>
    Coms :
    <ul>
    {foreach $Coms as $n}
        <li>{$n.id} : {$n.text}</li>
    {/foreach}
    </ul>

</div>