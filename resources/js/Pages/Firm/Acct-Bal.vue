<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mb-5 pl-5 font-light text-gray-600">
                    Your Account Balance
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-for="customer in customers"
                        class="shadow bg-white p-5 grid grid-cols-1"
                    >
                        <div>
                            <div class="">
                                <span class="text-xs"> CLIENT ID:</span>
                                {{ customer.AttnyID }}
                            </div>
                            <div class="text-s text-gray-900">
                                <span class="text-xs"> FIRM: </span
                                >{{ customer.FirmName }}
                            </div>
                            <div class="text-s text-gray-900">
                                <span class="text-xs">
                                    SHOWING PROCESSES SINCE:</span
                                >
                                {{ sixmoago }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Desktop Table -->
                <div class="hidden sm:block -my-2 sm:-mx-6 lg:-mx-4">
                    <div
                        class="py-2 align-middle inline-block w-full sm:px-6 lg:px-4"
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
                                            Client ID
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Firm
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Showing Processes Since
                                        </th>
                                    </tr>
                                </thead>

                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr v-for="customer in customers">
                                        <td
                                            class="pl-2 md:px-4 py-2 whitespace-nowrap"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-md font-medium"
                                                >
                                                    {{ customer.AttnyID }}
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-med text-gray-900"
                                        >
                                            <div class="text-md font-medium">
                                                {{ customer.FirmName }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-med text-gray-900"
                                        >
                                            <div class="text-md font-medium">
                                                {{ sixmoago }}
                                            </div>
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
import { assertTSUnknownKeyword } from "@babel/types";

export default {
    name: "Acct-Bal",
    props: {
        customers: Object,
        sixmoago: String,
    },
    methods: {
        assertTSUnknownKeyword,
        clickRow: function (customer_id) {
            let url = route("customer.detail", customer_id);
            this.$inertia.get(url);
        },
    },
};
</script>

<style scoped></style>
