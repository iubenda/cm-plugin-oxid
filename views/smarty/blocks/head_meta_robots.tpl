[{if $oxcmp_shop->oxshops__cmconsentmanagerpid->value}]
    [{if $oxcmp_shop->oxshops__cmconsentmanagercustomhtml->value}][{$oxcmp_shop->oxshops__cmconsentmanagercustomhtml->getRawValue()}][{/if}]
    [{if $oxcmp_shop->oxshops__cmconsentmanagerblockingmode->value == 0}]
        <script type="text/javascript" data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autoblocking/[{$oxcmp_shop->oxshops__cmconsentmanagerpid->value}].js" data-cmp-host="a.delivery.consentmanager.net" data-cmp-cdn="cdn.consentmanager.net" data-cmp-codesrc="1"></script>
    [{/if}]
[{/if}]
[{$smarty.block.parent}]