{extends file="../templates/main.tpl"}

{block name= content}

<section>
    <h4> Kalkulator Kredytowy </h4>
    <form method = "post" action = "#">
        <div class = "row uniform 50%">
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "amount" value = "" placeholder = "Wysokość Kredytu"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "percentage" value = "" placeholder = "Oprocentowanie"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "years" value = "" placeholder = "Na ile lat"/>
            </div>
            <div class = "12u$">
				<ul class = "actions">
                    <input type = "submit" class = "button special big" value = "Oblicz"/>
                </ul>
            </div>
        </div>
    </form>
<section>

<section>
    {if isset($messages)}
        {if ! empty($messages)}
            <h4> Wystąpiły błędy: </h4>
            <div calss = "row">
                <div class = "12u$">
                    <ul class = "alt">
                        {foreach $messages as $msg}
                            <li> {$msg} </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
    {/if}
</section>

<section>
    {if isset($infos)}
        {if ! empty($infos)}
            <h4> Informacje: </h4>
            <div calss = "row">
                <div class = "12u$">
                    <ul class = "alt">
                        {foreach $infos as $inf}
                            <li> {$inf} </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
    {/if}
</section> 
            
<section>
    {if isset($result)}
        <h5> Wynik: </h5>
        {$result}
    {/if}
</section>

{/block}