[{if $smarty.now|date_format:"%m|%d" eq $oxcmp_user->oxuser__oxbirthdate->value|date_format:"%m|%d"}]
    [{assign var=oConfig value=$oViewConf->getConfig()}]
    <li>[{$oConfig->getConfigParam('greetingsStranger')}]</li>
    [{/if}]


[{$smarty.block.parent}]