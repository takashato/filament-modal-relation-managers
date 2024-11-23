@props([
    'ownerRecord',
    'relationManager',
    'shouldHideRelationManagerHeading' => true,
    'fixIconPaddingLeft',
])

<div @class([
    "-mx-6 [&_.fi-ta-ctn]:![box-shadow:none]",
    "-ml-[5.2rem]" => $fixIconPaddingLeft,
    "[&_.fi-ta-header-heading]:hidden" => $shouldHideRelationManagerHeading,
])>
    @livewire($relationManager, ['ownerRecord' => $ownerRecord])
</div>
