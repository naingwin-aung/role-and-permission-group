<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
});

const submitHandler = () => {
    form.post(route("users.store"));
};
</script>
<template>
    <AuthLayout>
        <div class="text-xl font-semibold">Create</div>
        <form class="mt-5" @submit.prevent="submitHandler">
            <div class="mb-4">
                <label for="">Name</label>
                <input
                    type="text"
                    v-model="form.name"
                    class="w-full outline-none rounded-md border border-[#d7d7d7] mt-2 focus:outline-none focus:ring-0 focus:border-[#d7d7d7]"
                />
            </div>
            <div class="mb-4">
                <label for="">Email</label>
                <input
                    type="text"
                    v-model="form.email"
                    class="w-full outline-none rounded-md border border-[#d7d7d7] mt-2 focus:outline-none focus:ring-0 focus:border-[#d7d7d7]"
                />
            </div>
            <div class="mb-4">
                <label for="">Password</label>
                <input
                    type="password"
                    v-model="form.password"
                    class="w-full outline-none rounded-md border border-[#d7d7d7] mt-2 focus:outline-none focus:ring-0 focus:border-[#d7d7d7]"
                />
            </div>
            <button class="bg-black text-white px-3 py-1 rounded-lg">
                Create
            </button>
        </form>
    </AuthLayout>
</template>
