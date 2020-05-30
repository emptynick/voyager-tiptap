<?php

namespace Emptynick\Tiptap;

use Voyager\Admin\Classes\Formfield;

class TiptapFormfield extends Formfield
{
    public function type(): string
    {
        return 'tiptap';
    }

    public function name(): string
    {
        return 'Tiptap';
    }

    public function listOptions(): array
    {
        return [];
    }

    public function viewOptions(): array
    {
        return [];
    }
}