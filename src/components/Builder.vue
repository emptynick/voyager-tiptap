<template>
    <div v-if="action == 'list-options'">
        <label for="length" class="label">{{ __('voyager::generic.display_length') }}</label>
        <input
            type="number"
            id="length"
            class="input w-full"
            v-model.number="options.display_length"
        > 
    </div>
    <div v-else-if="action == 'view-options'">
        <div class="mt-2">
            <label for="maxChars" class="label">{{ __('tiptap::tiptap.max_characters') }}</label>
            <input type="number" class="input w-full" v-model.number="options.maxChars" min="0" id="maxChars" />
        </div>
        <div class="grid grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-2 mt-2">
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.bubbleMenu" id="bubble" />
                <label for="bubble" class="label">{{ __('tiptap::tiptap.bubble_menu') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.bold" id="bold" />
                <label for="bold" class="label">{{ __('tiptap::tiptap.bold') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.italic" id="italic" />
                <label for="italic" class="label">{{ __('tiptap::tiptap.italic') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.strike" id="strike" />
                <label for="strike" class="label">{{ __('tiptap::tiptap.strike') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.underline" id="underline" />
                <label for="underline" class="label">{{ __('tiptap::tiptap.underline') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.code" id="code" />
                <label for="code" class="label">{{ __('tiptap::tiptap.code') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.codeBlock" id="codeBlock" />
                <label for="codeBlock" class="label">{{ __('tiptap::tiptap.code_block') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.blockquote" id="blockquote" />
                <label for="blockquote" class="label">{{ __('tiptap::tiptap.blockquote') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.bulletList" id="bulletList" />
                <label for="bulletList" class="label">{{ __('tiptap::tiptap.bullet_list') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.orderedList" id="orderedList" />
                <label for="orderedList" class="label">{{ __('tiptap::tiptap.ordered_list') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.taskList" id="taskList" />
                <label for="taskList" class="label">{{ __('tiptap::tiptap.task_list') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.heading" id="heading" />
                <label for="heading" class="label">{{ __('tiptap::tiptap.heading') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.textAlign" id="textAlign" />
                <label for="textAlign" class="label">{{ __('tiptap::tiptap.text_align') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.horizontalRule" id="horizontalRule" />
                <label for="horizontalRule" class="label">{{ __('tiptap::tiptap.horizontal_rule') }}</label>
            </div>
            <div class="flex items-center space-x-1">
                <input type="checkbox" class="input" v-model="options.undoRedo" id="undoRedo" />
                <label for="undoRedo" class="label">{{ __('tiptap::tiptap.undo') }}/{{ __('tiptap::tiptap.redo') }}</label>
            </div>
        </div>
    </div>
    <div v-else-if="action == 'view'">
        <tiptap
            :bubbleMenu="options.bubbleMenu"
            :maxChars="options.maxChars"
            value="''"
            :bold="options.bold"
            :italic="options.italic"
            :strike="options.strike"
            :underline="options.underline"
            :code="options.code"
            :codeBlock="options.codeBlock"
            :blockquote="options.blockquote"
            :bulletList="options.bulletList"
            :orderedList="options.orderedList"
            :taskList="options.taskList"
            :heading="options.heading"
            :textAlign="options.textAlign"
            :horizontalRule="options.horizontalRule"
            :undoRedo="options.undoRedo"
        />
    </div>
</template>

<script>
export default {
    mixins: [voyager.formfieldBuilderMixin],
    computed: {
        defaultListOptions() {
            return {
                display_length: 150,
            };
        },
        defaultViewOptions() {
            return {
                bubbleMenu: false,
                maxChars: 0,
                bold: true,
                italic: true,
                strike: true,
                underline: true,
                code: true,
                codeBlock: true,
                blockquote: true,
                bulletList: true,
                orderedList: true,
                taskList: true,
                heading: true,
                textAlign: true,
                horizontalRule: true,
                undoRedo: true,
            };
        },
    }
};
</script>