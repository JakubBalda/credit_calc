{if $msgs->isError()}  
    Błędnie uzupełniony formularz!!! <br />
    {foreach $msgs->getErrors() as $msg} 
        {strip}
            <li>{$msg}</li>
        {/strip}
    {/foreach}
{/if}