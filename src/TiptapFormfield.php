<?php

namespace Emptynick\Tiptap;

use Voyager\Admin\Contracts\Formfields\Formfield;
use Voyager\Admin\Contracts\Formfields\Features\ManipulateData\Browse;

class TiptapFormfield implements Formfield, Browse
{
    public function type(): string
    {
        return 'tiptap';
    }

    public function name(): string
    {
        return 'Tiptap';
    }

    public function browse($input)
    {
        return substr(strip_tags($input), 0, $this->options->display_length ?? 150);
    }

    public function getComponentName(): string {
        return 'tiptap-formfield';
    }

    public function getBuilderComponentName(): string {
        return 'tiptap-builder';
    }
}