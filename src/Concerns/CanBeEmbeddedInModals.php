<?php

namespace Guava\FilamentModalRelationManagers\Concerns;

trait CanBeEmbeddedInModals
{
    public function getPageClass(): string
    {
        if (! $this->pageClass) {
            return '';
        }

        return parent::getPageClass();
    }
}
