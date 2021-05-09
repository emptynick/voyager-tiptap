<template>
    <div>
        <div>
            <component
                :is="bubbleMenu ? 'bubble-menu' : 'div'"
                v-if="editor"
                :editor="editor"
                class="flex-wrap space-x-1"
                :class="bubbleMenu ? 'bg-gray-600 rounded dark p-1' : 'mb-2'"
            >
                <button
                    v-if="bold"
                    v-tooltip="__('tiptap::tiptap.bold')"
                    @click="editor.chain().focus().toggleBold().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('bold') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />
                        <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                    </svg>
                </button>
            <button
                v-if="italic"
                v-tooltip="__('tiptap::tiptap.italic')"
                @click="editor.chain().focus().toggleItalic().run()"
                class="button"
                :class="{ 'accent': editor.isActive('italic') }"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="11" y1="5" x2="17" y2="5" />
                    <line x1="7" y1="19" x2="13" y2="19" />
                    <line x1="14" y1="5" x2="10" y2="19" />
                </svg>
            </button>
                <button
                    v-if="strike"
                    v-tooltip="__('tiptap::tiptap.strike')"
                    @click="editor.chain().focus().toggleStrike().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('strike') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 5v9a5 5 0 0 0 10 0v-9" />
                        <path d="M4 12h16" />
                    </svg>
                </button>
                <button
                    v-if="underline"
                    v-tooltip="__('tiptap::tiptap.underline')"
                    @click="editor.chain().focus().toggleUnderline().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('underline') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                        <path d="M5 19h14" />
                    </svg>
                </button>
                <button
                    v-if="code"
                    v-tooltip="__('tiptap::tiptap.code')"
                    @click="editor.chain().focus().toggleCode().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('code') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="7 8 3 12 7 16" />
                        <polyline points="17 8 21 12 17 16" />
                        <line x1="14" y1="4" x2="10" y2="20" />
                    </svg>
                </button>
                <button
                    v-if="codeBlock"
                    v-tooltip="__('tiptap::tiptap.code_block')"
                    @click="editor.chain().focus().toggleCodeBlock().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('codeBlock') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M10 13l-1 2l1 2" />
                        <path d="M14 13l1 2l-1 2" />
                    </svg>
                </button>
                <button
                    v-if="blockquote"
                    v-tooltip="__('tiptap::tiptap.blockquote')"
                    @click="editor.chain().focus().toggleBlockquote().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('blockquote') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 15h15" />
                        <path d="M21 19h-15" />
                        <path d="M15 11h6" />
                        <path d="M21 7h-6" />
                        <path d="M9 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2" />
                        <path d="M3 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2" />
                    </svg>
                </button>
                <button
                    v-if="bulletList"
                    v-tooltip="__('tiptap::tiptap.bullet_list')"
                    @click="editor.chain().focus().toggleBulletList().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('bulletList') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="9" y1="6" x2="20" y2="6" />
                        <line x1="9" y1="12" x2="20" y2="12" />
                        <line x1="9" y1="18" x2="20" y2="18" />
                        <line x1="5" y1="6" x2="5" y2="6.01" />
                        <line x1="5" y1="12" x2="5" y2="12.01" />
                        <line x1="5" y1="18" x2="5" y2="18.01" />
                    </svg>
                </button>
                <button
                    v-if="orderedList"
                    v-tooltip="__('tiptap::tiptap.ordered_list')"
                    @click="editor.chain().focus().toggleOrderedList().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('orderedList') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M11 6h9" />
                        <path d="M11 12h9" />
                        <path d="M12 18h8" />
                        <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4" />
                        <path d="M6 10v-6l-2 2" />
                    </svg>
                </button>
                <button
                    v-if="taskList"
                    v-tooltip="__('tiptap::tiptap.task_list')"
                    @click="editor.chain().focus().toggleTaskList().run()"
                    class="button"
                    :class="{ 'accent': editor.isActive('taskList') }"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                        <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                        <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                        <line x1="11" y1="6" x2="20" y2="6" />
                        <line x1="11" y1="12" x2="20" y2="12" />
                        <line x1="11" y1="18" x2="20" y2="18" />
                    </svg>
                </button>

                <span v-if="heading">
                    <button class="button" @click="headingOpen = !headingOpen; alignOpen = false;" :class="{ 'accent': editor.isActive('heading') }" v-tooltip="__('tiptap::tiptap.heading')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 12h10" />
                            <path d="M7 4v16" />
                            <path d="M17 4v16" />
                            <path d="M15 20h4" />
                            <path d="M15 4h4" />
                            <path d="M5 20h4" />
                            <path d="M5 4h4" />
                        </svg>
                    </button>
                    <collapse-x-transition>
                        <div v-if="headingOpen" class="inline-flex">
                            <button
                                class="button"
                                v-tooltip="`${__('tiptap::tiptap.heading')} 1`"
                                @click="editor.chain().focus().toggleHeading({ level: 1 }).run()"
                                :class="{ 'accent': editor.isActive('heading', { level: 1 }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M19 18v-8l-2 2" />
                                    <path d="M4 6v12" />
                                    <path d="M12 6v12" />
                                    <path d="M11 18h2" />
                                    <path d="M3 18h2" />
                                    <path d="M4 12h8" />
                                    <path d="M3 6h2" />
                                    <path d="M11 6h2" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="`${__('tiptap::tiptap.heading')} 2`"
                                @click="editor.chain().focus().toggleHeading({ level: 2 }).run()"
                                :class="{ 'accent': editor.isActive('heading', { level: 2 }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M17 12a2 2 0 1 1 4 0c0 .591 -.417 1.318 -.816 1.858l-3.184 4.143l4 -.001" />
                                    <path d="M4 6v12" />
                                    <path d="M12 6v12" />
                                    <path d="M11 18h2" />
                                    <path d="M3 18h2" />
                                    <path d="M4 12h8" />
                                    <path d="M3 6h2" />
                                    <path d="M11 6h2" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="`${__('tiptap::tiptap.heading')} 3`"
                                @click="editor.chain().focus().toggleHeading({ level: 3 }).run()"
                                :class="{ 'accent': editor.isActive('heading', { level: 3 }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M19 14a2 2 0 1 0 -2 -2" />
                                    <path d="M17 16a2 2 0 1 0 2 -2" />
                                    <path d="M4 6v12" />
                                    <path d="M12 6v12" />
                                    <path d="M11 18h2" />
                                    <path d="M3 18h2" />
                                    <path d="M4 12h8" />
                                    <path d="M3 6h2" />
                                    <path d="M11 6h2" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="`${__('tiptap::tiptap.heading')} 4`"
                                @click="editor.chain().focus().toggleHeading({ level: 4 }).run()"
                                :class="{ 'accent': editor.isActive('heading', { level: 4 }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M20 18v-8l-4 6h5" />
                                    <path d="M4 6v12" />
                                    <path d="M12 6v12" />
                                    <path d="M11 18h2" />
                                    <path d="M3 18h2" />
                                    <path d="M4 12h8" />
                                    <path d="M3 6h2" />
                                    <path d="M11 6h2" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="`${__('tiptap::tiptap.heading')} 5`"
                                @click="editor.chain().focus().toggleHeading({ level: 5 }).run()"
                                :class="{ 'accent': editor.isActive('heading', { level: 5 }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M17 18h2a2 2 0 1 0 0 -4h-2v-4h4" />
                                    <path d="M4 6v12" />
                                    <path d="M12 6v12" />
                                    <path d="M11 18h2" />
                                    <path d="M3 18h2" />
                                    <path d="M4 12h8" />
                                    <path d="M3 6h2" />
                                    <path d="M11 6h2" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="`${__('tiptap::tiptap.heading')} 6`"
                                @click="editor.chain().focus().toggleHeading({ level: 6 }).run()"
                                :class="{ 'accent': editor.isActive('heading', { level: 6 }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle transform="rotate(180 19 16)" cx="19" cy="16" r="2" />
                                    <path d="M21 12a2 2 0 1 0 -4 0v4" />
                                    <path d="M4 6v12" />
                                    <path d="M12 6v12" />
                                    <path d="M11 18h2" />
                                    <path d="M3 18h2" />
                                    <path d="M4 12h8" />
                                    <path d="M3 6h2" />
                                    <path d="M11 6h2" />
                                </svg>
                            </button>
                        </div>
                    </collapse-x-transition>
                </span>

                <span v-if="textAlign">
                    <button class="button" @click="alignOpen = !alignOpen; headingOpen = false" :class="{ 'accent': hasTextAlign }" v-tooltip="__('tiptap::tiptap.text_align')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="8" y1="12" x2="16" y2="12" />
                            <line x1="6" y1="18" x2="18" y2="18" />
                        </svg>
                    </button>
                    <collapse-x-transition>
                        <div v-if="alignOpen" class="inline-flex">
                            <button
                                class="button"
                                v-tooltip="__('tiptap::tiptap.left')"
                                @click="editor.chain().focus().setTextAlign('left').run()"
                                :class="{ 'accent': editor.isActive({ textAlign: 'left' }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="6" x2="20" y2="6" />
                                    <line x1="4" y1="12" x2="14" y2="12" />
                                    <line x1="4" y1="18" x2="18" y2="18" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="__('tiptap::tiptap.center')"
                                @click="editor.chain().focus().setTextAlign('center').run()"
                                :class="{ 'accent': editor.isActive({ textAlign: 'center' }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="6" x2="20" y2="6" />
                                    <line x1="8" y1="12" x2="16" y2="12" />
                                    <line x1="6" y1="18" x2="18" y2="18" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="__('tiptap::tiptap.right')"
                                @click="editor.chain().focus().setTextAlign('right').run()"
                                :class="{ 'accent': editor.isActive({ textAlign: 'right' }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="6" x2="20" y2="6" />
                                    <line x1="10" y1="12" x2="20" y2="12" />
                                    <line x1="6" y1="18" x2="20" y2="18" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="__('tiptap::tiptap.justify')"
                                @click="editor.chain().focus().setTextAlign('justify').run()"
                                :class="{ 'accent': editor.isActive({ textAlign: 'justify' }) }"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="6" x2="20" y2="6" />
                                    <line x1="4" y1="12" x2="20" y2="12" />
                                    <line x1="4" y1="18" x2="16" y2="18" />
                                </svg>
                            </button>
                            <button
                                class="button"
                                v-tooltip="__('tiptap::tiptap.clear')"
                                @click="editor.chain().focus().unsetTextAlign().run()"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="7" x2="20" y2="7" />
                                    <line x1="10" y1="11" x2="10" y2="17" />
                                    <line x1="14" y1="11" x2="14" y2="17" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                        </div>
                    </collapse-x-transition>
                </span>

                <button
                    v-if="horizontalRule"
                    v-tooltip="__('tiptap::tiptap.horizontal_rule')"
                    @click="editor.chain().focus().setHorizontalRule().run()"
                    class="button"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="4" x2="4" y2="4.01" />
                        <line x1="8" y1="4" x2="8" y2="4.01" />
                        <line x1="12" y1="4" x2="12" y2="4.01" />
                        <line x1="16" y1="4" x2="16" y2="4.01" />
                        <line x1="20" y1="4" x2="20" y2="4.01" />
                        <line x1="4" y1="8" x2="4" y2="8.01" />
                        <line x1="12" y1="8" x2="12" y2="8.01" />
                        <line x1="20" y1="8" x2="20" y2="8.01" />
                        <line x1="4" y1="16" x2="4" y2="16.01" />
                        <line x1="12" y1="16" x2="12" y2="16.01" />
                        <line x1="20" y1="16" x2="20" y2="16.01" />
                        <line x1="4" y1="20" x2="4" y2="20.01" />
                        <line x1="8" y1="20" x2="8" y2="20.01" />
                        <line x1="12" y1="20" x2="12" y2="20.01" />
                        <line x1="16" y1="20" x2="16" y2="20.01" />
                        <line x1="20" y1="20" x2="20" y2="20.01" />
                    </svg>
                </button>

                <button
                    v-if="undoRedo"
                    v-tooltip="__('tiptap::tiptap.undo')"
                    @click="editor.chain().focus().undo().run()"
                    class="button"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                    </svg>
                </button>
                <button
                    v-if="undoRedo"
                    v-tooltip="__('tiptap::tiptap.redo')"
                    @click="editor.chain().focus().redo().run()"
                    class="button"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15 13l4 -4l-4 -4m4 4h-11a4 4 0 0 0 0 8h1" />
                    </svg>
                </button>
            </component>
        </div>
        <editor-content
            :editor="editor"
            class="min-h-64 h-64"
            @click="headingOpen = false; alignOpen = false;"
        />
        <div v-if="editor && maxChars > 0" class="w-full" :class="charPercentage > 90 ? 'text-red-500' : (charPercentage > 75 ? 'text-yellow-500' : null)">
            {{ __('tiptap::tiptap.character_count', { chars: editor.getCharacterCount(), max: maxChars }) }}
        </div>
    </div>
</template>

<script>
import { Editor, EditorContent, BubbleMenu } from '@tiptap/vue-3';
import CodeBlock from '@tiptap/extension-code-block';
import Underline from '@tiptap/extension-underline';
import CharacterCount from '@tiptap/extension-character-count';
import TextAlign from '@tiptap/extension-text-align';
import HorizontalRule from '@tiptap/extension-horizontal-rule';
import Image from '@tiptap/extension-image';
import BulletList from '@tiptap/extension-bullet-list';
import OrderedList from '@tiptap/extension-ordered-list';
import TaskList from '@tiptap/extension-task-list';
import TaskItem from '@tiptap/extension-task-item';

import StarterKit from '@tiptap/starter-kit'

export default {
    components: {
        EditorContent,
        BubbleMenu,
    },
    props: {
        modelValue: {
            type: String,
            default: '',
        },
        maxChars: {
            type: Number,
            default: 0,
        },
        bubbleMenu: {
            type: Boolean,
            default: false,
        },
        disabled: {
            type: Boolean,
            default: false,
        },
        bold: {
            type: Boolean,
            default: true,
        },
        italic: {
            type: Boolean,
            default: true,
        },
        strike: {
            type: Boolean,
            default: true,
        },
        underline: {
            type: Boolean,
            default: true,
        },
        code: {
            type: Boolean,
            default: true,
        },
        codeBlock: {
            type: Boolean,
            default: true,
        },
        blockquote: {
            type: Boolean,
            default: true,
        },
        bulletList: {
            type: Boolean,
            default: true,
        },
        orderedList: {
            type: Boolean,
            default: true,
        },
        taskList: {
            type: Boolean,
            default: true,
        },
        heading: {
            type: Boolean,
            default: true,
        },
        textAlign: {
            type: Boolean,
            default: true,
        },
        horizontalRule: {
            type: Boolean,
            default: true,
        },
        undoRedo: {
            type: Boolean,
            default: true,
        },
    },
    data() {
        return {
            editor: null,
            headingOpen: false,
            alignOpen: false,
        }
    },
    watch: {
        modelValue(value) {
            if (this.editor.getHTML() !== value) {
                this.editor.commands.setContent(this.modelValue, false);
            }
        },
        disabled(value) {
            if (this.editor) {
                this.editor.setEditable(!value);
            }
        }
    },
    methods: {
        insertImageFromURL(url) {
            this.editor.chain().focus().setImage({ src: url }, false).run(); // Seconds arg: inline
        }
    },
    computed: {
        extensions() {
            let extensions = [
                StarterKit,
                Underline,
                TextAlign,
                CodeBlock,
                OrderedList.configure({
                    class: 'inline-flex'
                }),
                BulletList.configure({
                    class: 'inline-flex'
                }),
                CharacterCount.configure({
                    limit: this.maxChars,
                }),
                TaskList,
                TaskItem,
            ];

            return extensions;
        },
        hasTextAlign() {
            return this.editor.isActive({ textAlign: 'left' }) ||
                this.editor.isActive({ textAlign: 'right' }) ||
                this.editor.isActive({ textAlign: 'center' }) ||
                this.editor.isActive({ textAlign: 'justify' });
        },
        charPercentage() {
            return Math.round((100 / this.maxChars) * this.editor.getCharacterCount())
        },
    },
    mounted() {
        this.editor = new Editor({
            content: this.modelValue,
            extensions: this.extensions,
            editorProps: {
                attributes: {
                    class: "h-full overflow-y-auto input"
                }
            },
            editable: !this.disabled,
        }).on('update', ({ editor }) => {
            this.$emit('update:modelValue', editor.getHTML());
        });
    },
    beforeUnmount() {
        this.editor.destroy()
    },
}
</script>

<style lang="scss">
.ProseMirror {
    li > p:first-child, div {
        display: inline;
    }
}

ul[data-type="taskList"] {
    list-style: none;
    padding: 0;

    li {
        display: flex;
        align-items: center;

        > label {
            flex: 0 0 auto;
            margin-right: 0.5rem;
        }
    }
}
</style>