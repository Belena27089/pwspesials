<div class="slider">
	<ul class="bxslider">
		{foreach from=$xml item=home_link name=links}
		<li>
		<a href='{$home_link->url}'>
            <img src="{$link->getPageLink('index.php')}modules/pwspesials/{$home_link->img}" alt="{$home_link->field1}" />
        </a>
        </li>
        {/foreach}
	</ul>							
</div> 
