
<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <aside
        class="min-h-screen w-64 flex-shrink-0 bg-indigo-900 p-4 text-white"
    >
        <h2 class="mb-4 text-lg font-bold">
            Perpustakaan Mini
        </h2>

        <nav class="space-y-2">
            <Link
                href="/dashboard"
                class="block rounded px-3 py-2 hover:bg-indigo-800"
            >
                Dashboard
            </Link>

            <Link
                href="/"
                class="block rounded px-3 py-2 hover:bg-indigo-800"
            >
                Beranda
            </Link>

            <Link
                href="/"
                class="block rounded px-3 py-2 hover:bg-indigo-800"
            >
                Data Buku
            </Link>

            <Link
                href="/"
                class="block rounded px-3 py-2 hover:bg-indigo-800"
            >
                Data Anggota
            </Link>
        </nav>
    </aside>
</template>
