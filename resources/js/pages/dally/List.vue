<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'DallyHub',
        href: '/dally',
    },
];
</script>

<template>
    <Head title="Dally" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col">
            <div class="w-full text-center">
                <!-- <PlaceholderPattern /> -->
                display button?<br></br>
                <button class="btn right">New</button>
            </div>
            <div class="relative flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                <PlaceholderPattern />
                这里显示点啥？
            </div>
            <div class="relative flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                <PlaceholderPattern />
                这里显示点啥？111
            </div>
        </div>
    </AppLayout>
</template>
