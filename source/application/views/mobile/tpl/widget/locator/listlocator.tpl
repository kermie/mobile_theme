[{include file="widget/locator/attributes.tpl"}]
<div class="refineParams clear[{if $place eq "bottom"}] bottomParams[{/if}]">
    [{if $locator && $place eq "bottom"}]
        [{include file="widget/locator/paging.tpl" pages=$locator place=$place}]
    [{/if}]
    [{if $sort }]
        [{include file="widget/locator/sort.tpl"}]
    [{/if}]
    [{if $listDisplayType }]
        [{include file="widget/locator/listdisplaytype.tpl"}]
    [{/if}]
</div>
