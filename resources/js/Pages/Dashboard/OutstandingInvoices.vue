<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mb-5 pl-5 font-light text-gray-600">
                    Invoice Details
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-if="invoices.length === 0"
                        class="shadow bg-white h-16 flex items-center justify-center text-gray-500"
                    >
                        You have no Work Orders.
                    </div>

                    <div
                        v-for="invoice in invoices"
                        class="shadow bg-white p-5 grid grid-cols-2"
                    >
                        <div>
                            <div class="">Work Order #{{ invoice.id }}</div>
                            <div class="text-xs text-gray-500">
                                Update(s): {{ invoice.date }}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-right">
                                <div class="text-lg">
                                    {{ invoice.Attorney_ID }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-900 mt-4">
                                {{ invoice.summary }} TEST1
                            </div>
                        </div>
                        <div>
                            <div class="text-right text-sm font-medium mt-5">
                                <Link
                                    :href="route('invoice.pay', invoice.id)"
                                    @click.stop=""
                                    class="px-3 py-2 inline-flex leading-5 font-semibold rounded-md bg-green-500 text-white"
                                >
                                    Pay Now
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Desktop Table -->
                <div class="hidden sm:block -my-2 sm:-mx-6 lg:-mx-8">
                    <div
                        class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8"
                    >
                        <div
                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                        >
                            <table
                                class="w-full divide-y divide-gray-200 table-auto"
                            >
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="pl-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Work Order
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Status
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Served On
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Update(s)
                                        </th>
                                        <th
                                            scope="col"
                                            class="relative px-6 py-3"
                                        >
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr
                                        v-if="invoices.length === 0"
                                        class="shadow bg-white h-16 text-gray-500"
                                    >
                                        <td
                                            colspan="5"
                                            class="text-center pl-20"
                                        >
                                            You have no Work Orders.
                                        </td>
                                    </tr>
                                    <tr
                                        v-for="invoice in invoices"
                                        class="cursor-pointer"
                                        v-on:click="clickRow(invoice.id)"
                                    >
                                        <td
                                            class="pl-4 md:px-6 py-4 whitespace-nowrap"
                                            colspan="5"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-sm font-medium"
                                                >
                                                    <Link
                                                        class="text-blue-500 underline"
                                                        :href="
                                                            route(
                                                                'invoice.detail',
                                                                invoice.id,
                                                            )
                                                        "
                                                        >{{
                                                            invoice.id
                                                        }}</Link
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                        >
                                            <div class="text-sm text-gray-900">
                                                {{ invoice.date }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                        >
                                            {{ invoice.summary }} TEST3
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-right"
                                        >
                                            <div>{{ invoice.total }}</div>
                                        </td>
                                        <td
                                            class="pr-4 md:pr-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                        >
                                            {{ invoice.paid_on }}
                                        </td>
                                    </tr>

                                    <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { Link } from '@inertiajs/vue3';

export default {
    name: "OutstandingInvoices",
    components: {Link},
    props: {
        invoices: Object,
    },
    methods: {
        clickRow: function (id) {
            let url = route("invoice.detail", id);
            this.$inertia.get(url);
        },
    },
};
</script>

<style scoped></style>
