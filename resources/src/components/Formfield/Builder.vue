<template>
    <div>
        <div v-if="show == 'list-options'">
            <label for="length" class="label">{{ __('voyager::generic.display_length') }}</label>
            <input type="text" id="length" class="input w-full" v-model="options.display_length"> 
        </div>
        <div v-else-if="show == 'view-options'">
            <label class="label mt-4">Store JSON</label>
            <input type="checkbox" class="input" v-model="options.as_json">

            <label class="label mt-4">Unordered List</label>
            <input type="checkbox" class="input" v-model="options.ul">

            <label class="label mt-4">Heading</label>
            <input type="checkbox" class="input" v-model="options.heading">

            <label class="label mt-4">Horizontal Rule</label>
            <input type="checkbox" class="input" v-model="options.hr">

            <label class="label mt-4">Ordered List</label>
            <input type="checkbox" class="input" v-model="options.ol">

            <label class="label mt-4">Bold</label>
            <input type="checkbox" class="input" v-model="options.bold">

            <label class="label mt-4">Code</label>
            <input type="checkbox" class="input" v-model="options.code">

            <label class="label mt-4">Italic</label>
            <input type="checkbox" class="input" v-model="options.italic">

            <label class="label mt-4">Strike</label>
            <input type="checkbox" class="input" v-model="options.strike">

            <label class="label mt-4">Underline</label>
            <input type="checkbox" class="input" v-model="options.underline">

            <label class="label mt-4">History</label>
            <input type="checkbox" class="input" v-model="options.history">
        </div>
        <div v-else-if="show == 'view'">
            <tiptap
                :as-json="options.as_json"
                :ul="options.ul"
                :heading="options.heading"
                :hr="options.hr"
                :ol="options.ol"
                :bold="options.bold"
                :code="options.code"
                :italic="options.italic"
                :strike="options.strike"
                :underline="options.underline"
                :history="options.history" />
        </div>
    </div>
</template>

<script>
export default {
    props: ['options', 'column', 'show'],
};
</script>