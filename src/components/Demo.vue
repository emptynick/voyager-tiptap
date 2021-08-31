<template>
    <tiptap
        :bubbleMenu="bubbleMenu"
        :maxChars="maxChars"
        v-model="content"
        :disabled="disabled"
        :bold="bold"
        :italic="italic"
        :strike="strike"
        :underline="underline"
        :code="code"
        :codeBlock="codeBlock"
        :blockquote="blockquote"
        :bulletList="bulletList"
        :orderedList="orderedList"
        :taskList="taskList"
        :heading="heading"
        :textAlign="textAlign"
        :horizontalRule="horizontalRule"
        :undoRedo="undoRedo"

        class="mb-2"
    />
    <collapsible title="Options">
        <div class="flex space-x-2">
            <div class="input-group">
                <label for="bubble" class="label">Bubble menu</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="bubbleMenu" id="bubble" />
                </div>
            </div>
            <div class="input-group">
                <label for="maxChars" class="label">Max characters (0 = infinite)</label>
                <div class="mt-1">
                    <input type="number" class="input" v-model.number="maxChars" min="0" id="maxChars" />
                </div>
            </div>
            <div class="input-group">
                <label for="disabled" class="label">Disabled</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="disabled" id="disabled" />
                </div>
            </div>
        </div>
        <div class="flex flex-wrap space-x-2 mt-4">
            <div class="input-group">
                <label for="bold" class="label">{{ __('tiptap::tiptap.bold') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="bold" id="bold" />
                </div>
            </div>
            <div class="input-group">
                <label for="italic" class="label">{{ __('tiptap::tiptap.italic') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="italic" id="italic" />
                </div>
            </div>
            <div class="input-group">
                <label for="strike" class="label">{{ __('tiptap::tiptap.strike') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="strike" id="strike" />
                </div>
            </div>
            <div class="input-group">
                <label for="underline" class="label">{{ __('tiptap::tiptap.underline') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="underline" id="underline" />
                </div>
            </div>
            <div class="input-group">
                <label for="code" class="label">{{ __('tiptap::tiptap.code') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="code" id="code" />
                </div>
            </div>
            <div class="input-group">
                <label for="codeBlock" class="label">{{ __('tiptap::tiptap.code_block') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="codeBlock" id="codeBlock" />
                </div>
            </div>
            <div class="input-group">
                <label for="blockquote" class="label">{{ __('tiptap::tiptap.blockquote') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="blockquote" id="blockquote" />
                </div>
            </div>
            <div class="input-group">
                <label for="bulletList" class="label">{{ __('tiptap::tiptap.bullet_list') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="bulletList" id="bulletList" />
                </div>
            </div>
            <div class="input-group">
                <label for="orderedList" class="label">{{ __('tiptap::tiptap.ordered_list') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="orderedList" id="orderedList" />
                </div>
            </div>
            <div class="input-group">
                <label for="taskList" class="label">{{ __('tiptap::tiptap.task_list') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="taskList" id="taskList" />
                </div>
            </div>
            <div class="input-group">
                <label for="heading" class="label">{{ __('tiptap::tiptap.heading') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="heading" id="heading" />
                </div>
            </div>
            <div class="input-group">
                <label for="textAlign" class="label">{{ __('tiptap::tiptap.text_align') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="textAlign" id="textAlign" />
                </div>
            </div>
            <div class="input-group">
                <label for="horizontalRule" class="label">{{ __('tiptap::tiptap.horizontal_rule') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="horizontalRule" id="horizontalRule" />
                </div>
            </div>
            <div class="input-group">
                <label for="undoRedo" class="label">{{ __('tiptap::tiptap.undo') }}/{{ __('tiptap::tiptap.redo') }}</label>
                <div class="mt-1">
                    <input type="checkbox" class="input" v-model="undoRedo" id="undoRedo" />
                </div>
            </div>
        </div>
    </collapsible>

    <collapsible title="HTML Output">
        <textarea class="input w-full min-h-64" v-model="content"></textarea>
    </collapsible>
</template>

<script>
import Tiptap from './Tiptap.vue';

export default {
    components: { Tiptap },
    data() {
        return {
            bubbleMenu: false,
            maxChars: 280,
            content: '<p>This is <strong>tiptap 2</strong> in <strong>Voyager II</strong> using <strong>Vue 3</strong> 🎉</p>',
            disabled: false,
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
    }
};
</script>