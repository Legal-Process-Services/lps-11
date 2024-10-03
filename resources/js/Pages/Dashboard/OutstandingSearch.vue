<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mb-5 pl-5 font-light text-gray-600">
                    Search Details
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-if="searches.length === 0"
                        class="shadow bg-white h-16 flex items-center justify-center text-gray-500"
                    >
                        You have no Work Orders.
                    </div>

                    <div
                        v-for="search in searches"
                        class="shadow bg-white p-5 grid grid-cols-2"
                        v-on:click="clickRow(search.id)"
                    >
                        <div>
                            <div class="">
                                <inertia-link
                                    class="text-blue-500 hover:text-blue-600 underline text-sm font-medium"
                                    :href="route('search.detail', search.id)"
                                    >#{{ search.id }}
                                </inertia-link>
                            </div>
                            <div class="text-xs text-gray-500">
                                Date: {{ search.date }}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-right">
                                <div class="text-lg">
                                    {{ search.Attorney_ID }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-900 mt-4">
                                {{ search.summary }} TEST1
                            </div>
                        </div>
                        <div>
                            <div class="text-right text-sm font-medium mt-5">
                                <inertia-link
                                    :href="route('search.pay', search.id)"
                                    @click.stop=""
                                    class="px-3 py-2 inline-flex leading-5 font-semibold rounded-md bg-green-500 text-white"
                                >
                                    Pay Now
                                </inertia-link>
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
                                        v-if="searches.length === 0"
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
                                        v-for="search in searches"
                                        class="cursor-pointer"
                                        v-on:click="clickRow(search.id)"
                                    >
                                        <td
                                            class="pl-4 md:px-6 py-4 whitespace-nowrap"
                                            colspan="5"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-sm font-medium"
                                                >
                                                    <inertia-link
                                                        class="text-blue-500 underline"
                                                        :href="
                                                            route(
                                                                'search.detail',
                                                                search.id,
                                                            )
                                                        "
                                                        >{{
                                                            search.id
                                                        }}</inertia-link
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                        >
                                            <div class="text-sm text-gray-900">
                                                {{ search.date }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                        >
                                            {{ search.summary }} TEST3
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-right"
                                        >
                                            <div>{{ search.total }}</div>
                                        </td>
                                        <td
                                            class="pr-4 md:pr-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                        >
                                            {{ search.paid_on }}
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
export default {
    name: "OutstandingInvoices",
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
