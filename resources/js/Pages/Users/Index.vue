<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    data: Object,
});
</script>
<template>
    <AuthLayout>
        <div class="flex justify-between items-center mb-5">
            <h1 class="text-2xl">Users</h1>
            <Link :href="route('users.create')" class="bg-black text-white px-3 py-1 rounded-lg">
                Add User
            </Link>
        </div>

        <div class="w-full border p-3 rounded-lg">
            <table class="w-full table-auto">
                <thead>
                    <tr class="border-b">
                        <th class="lg:w-[500px] text-left pb-4">Name</th>
                        <th class="text-left pb-4">Email</th>
                        <th class="text-left pb-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="d in data.data"
                        :key="d.id"
                        class="border-b last:border-b-0"
                    >
                        <td class="py-3">
                            {{ d?.name }}
                        </td>
                        <td class="py-3">{{ d?.email }}</td>
                        <td class="py-3">
                            <Link :href="route('users.edit', d.id)"
                                class="bg-blue-500 text-white px-3 py-1 rounded-lg"
                            >
                                Edit
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthLayout>
</template>
