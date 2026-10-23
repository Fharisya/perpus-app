<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
    books: Object,
    flash: Object,
})
</script>

<template>
    <AuthenticatedLayout>
        <div class="p-6">
            <h1 class="mb-4 text-2xl font-bold">Data Buku</h1>

            <div
                v-if="flash && flash.success"
                class="mb-4 rounded bg-green-100 p-3 text-green-800"
            >
                {{ flash.success }}
            </div>

            <Link
                href="/books/create"
                class="mb-4 inline-block rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
            >
                + Tambah Buku
            </Link>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 p-2">Kode</th>
                            <th class="border border-gray-300 p-2">Judul</th>
                            <th class="border border-gray-300 p-2">Pengarang</th>
                            <th class="border border-gray-300 p-2">Tahun</th>
                            <th class="border border-gray-300 p-2">Stok</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr
                            v-for="book in books.data"
                            :key="book.id"
                        >
                            <td class="border border-gray-300 p-2">
                                {{ book.kode_buku }}
                            </td>

                            <td class="border border-gray-300 p-2">
                                {{ book.judul }}
                            </td>

                            <td class="border border-gray-300 p-2">
                                {{ book.pengarang }}
                            </td>

                            <td class="border border-gray-300 p-2">
                                {{ book.tahun || '-' }}
                            </td>

                            <td class="border border-gray-300 p-2">
                                {{ book.stok }}
                            </td>
                        </tr>

                        <tr v-if="books.data.length === 0">
                            <td
                                colspan="5"
                                class="border border-gray-300 p-4 text-center"
                            >
                                Belum ada data buku.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex flex-wrap gap-2">
                <template
                    v-for="(link, index) in books.links"
                    :key="index"
                >
                    <Link
                        v-if="link.url"
                        :href="link.url"
                        v-html="link.label"
                        class="rounded border px-3 py-2"
                        :class="{
                            'bg-blue-600 text-white': link.active,
                            'bg-white text-gray-700': !link.active
                        }"
                    />

                    <span
                        v-else
                        v-html="link.label"
                        class="rounded border px-3 py-2 text-gray-400"
                    />
                </template>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
