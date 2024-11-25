@props([
    'ownerRecord',
    'relationManager',
    'shouldHideRelationManagerHeading' => true,
    'fixIconPaddingLeft',
])

<div @class([
    "-mx-6 [&_.fi-ta-ctn]:![box-shadow:none]",
    "-ms-[5.25rem]" => $fixIconPaddingLeft,
    "[&_.fi-ta-header-heading]:hidden" => $shouldHideRelationManagerHeading,
])>
    @livewire($relationManager, ['ownerRecord' => $ownerRecord])
</div>
