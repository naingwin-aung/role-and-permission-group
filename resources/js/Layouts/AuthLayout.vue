<script setup>
import NavLinkItem from "@/Components/NavLinkItem.vue";
import { ref } from "vue";

const menus = ref([
    {
        name: "Dashboard",
        href: "/dashboard",
    },
    {
        name: "Users",
        href: "/users",
    }
]);
</script>
<template>
    <section class="min-h-screen w-full flex">
        <div
            class="hidden md:block w-[222px] h-screen bg-[#363636] px-[8px] text-white"
        >
            <div class="text-center mt-[20px]">Logo</div>
            <ul class="mt-5 flex flex-col gap-3">
                <template v-for="menu in menus">
                    <NavLinkItem :href="menu.href">
                        {{ menu.name }}
                    </NavLinkItem>
                </template>
            </ul>
        </div>
        <div class="flex-1">
            <div class="bg-[#f7f7f7] h-[60px] px-7 py-5">
                Header
            </div>
            <div class="p-7">
                <slot></slot>
            </div>
        </div>
    </section>
</template>
