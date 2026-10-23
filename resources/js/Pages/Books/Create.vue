<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { useForm, Link } from '@inertiajs/vue3'

const form = useForm({
    kode_buku: '',
    judul: '',
    pengarang: '',
    penerbit: '',
    tahun: '',
    stok: 0,
})

function submit() {
    form.post(route('books.store'))
}
</script>

<template>
    <AuthenticatedLayout>
        <div class="p-6">
            <h1 class="mb-4 text-2xl font-bold">Tambah Buku</h1>

            <form
                @submit.prevent="submit"
                class="max-w-xl space-y-4"
            >
                <div>
                    <label class="mb-1 block">Kode Buku</label>
                    <input
                        v-model="form.kode_buku"
                        type="text"
                        class="w-full rounded border border-gray-300 p-2"
                        required
                    />
                    <span
                        v-if="form.errors.kode_buku"
                        class="text-sm text-red-600"
                    >
                        {{ form.errors.kode_buku }}
                    </span>
                </div>

                <div>
                    <label class="mb-1 block">Judul</label>
                    <input
                        v-model="form.judul"
                        type="text"
                        class="w-full rounded border border-gray-300 p-2"
                        required
                    />
                    <span
                        v-if="form.errors.judul"
                        class="text-sm text-red-600"
                    >
                        {{ form.errors.judul }}
                    </span>
                </div>

                <div>
                    <label class="mb-1 block">Pengarang</label>
                    <input
                        v-model="form.pengarang"
                        type="text"
                        class="w-full rounded border border-gray-300 p-2"
                        required
                    />
                    <span
                        v-if="form.errors.pengarang"
                        class="text-sm text-red-600"
                    >
                        {{ form.errors.pengarang }}
                    </span>
                </div>

                <div>
                    <label class="mb-1 block">Penerbit</label>
                    <input
                        v-model="form.penerbit"
                        type="text"
                        class="w-full rounded border border-gray-300 p-2"
                    />
                    <span
                        v-if="form.errors.penerbit"
                        class="text-sm text-red-600"
                    >
                        {{ form.errors.penerbit }}
                    </span>
                </div>

                <div>
                    <label class="mb-1 block">Tahun</label>
                    <input
                        v-model="form.tahun"
                        type="text"
                        class="w-full rounded border border-gray-300 p-2"
                        placeholder="Contoh: 2024"
                    />
                    <span
                        v-if="form.errors.tahun"
                        class="text-sm text-red-600"
                    >
                        {{ form.errors.tahun }}
                    </span>
                </div>

                <div>
                    <label class="mb-1 block">Stok</label>
                    <input
                        v-model="form.stok"
                        type="number"
                        min="0"
                        step="1"
                        class="w-full rounded border border-gray-300 p-2"
                        required
                    />
                    <span
                        v-if="form.errors.stok"
                        class="text-sm text-red-600"
                    >
                        {{ form.errors.stok }}
                    </span>
                </div>

                <div class="flex gap-3 pt-2">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 disabled:opacity-50"
                    >
                        {{ form.processing ? 'Menyimpan...' : 'Simpan' }}
                    </button>

                    <Link
                        href="/books"
                        class="rounded border border-gray-300 px-4 py-2 hover:bg-gray-100"
                    >
                        Kembali
                    </Link>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
