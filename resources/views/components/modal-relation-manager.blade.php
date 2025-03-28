@props([
    'ownerRecord',
    'relationManager',
    'shouldHideRelationManagerHeading' => true,
    'fixIconPaddingLeft',
    'isModalSlideOver',
    'pageClass'
])

<div @class([
    "-mx-6 [&_.fi-ta-ctn]:![box-shadow:none]",
    "-ms-[5.25rem]" => $fixIconPaddingLeft && !$isModalSlideOver,
    "[&_.fi-ta-header-heading]:hidden" => $shouldHideRelationManagerHeading,
])>
    @livewire($relationManager, ['ownerRecord' => $ownerRecord, 'pageClass' => $pageClass])
</div>
