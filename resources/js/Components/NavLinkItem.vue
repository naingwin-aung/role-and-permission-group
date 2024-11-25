<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    href: String,
});
</script>
<template>
    <Link :href="href">
        <li
            class="p-2 rounded-lg text-white"
            :class="{
                'bg-[#949494]':
                    $page.url === href || $page.url.startsWith(href),
            }"
        >
            <slot></slot>
        </li>
    </Link>
</template>
