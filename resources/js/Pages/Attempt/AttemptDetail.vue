<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mb-5 pl-5 font-light text-gray-600">
                    Attempt History
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-if="attempts.length === 0"
                        class="shadow bg-white h-16 flex items-center justify-center text-gray-500"
                    >
                        You have no Work Orders.
                    </div>

                    <div
                        v-for="attempt in attempts"
                        class="shadow bg-white p-5 w-72"
                    >
                        <div>
                            <div class="text-xs text-gray-900 pb-2">
                                Work Order: {{ attempt.id }}
                            </div>
                            <div class="text-s text-gray-900">
                                Status: <b> {{ attempt.InsertType }}</b>
                            </div>
                            <div class="text-s text-gray-900">
                                Date: {{ attempt.DateAttempted }}
                            </div>
                            <div class="text-s text-gray-900">
                                Time: {{ attempt.Time_AttOrSvd }}
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
                                            colspan="3"
                                        >
                                            Status
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                            colspan="3"
                                        >
                                            Date
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"
                                            colspan="2"
                                        >
                                            Time
                                        </th>
                                        <th
                                            scope="col"
                                            class="relative px-6 py-3"
                                        ></th>
                                    </tr>
                                </thead>

                                <tbody
                                    class="bg-white divide-y divide-gray-400"
                                >
                                    <tr
                                        v-if="attempts.length === 0"
                                        class="h-16 flex items-center justify-center text-gray-500 pl-3.5 pr-10 w-fit"
                                    >
                                        <td style="display:block; box-sizing:border-box; clear:both " class="bg-white" colspan="7">
                                        You have no Attempt History for this
                                        Work Order
                                        </td>

                                    </tr>
                                    <tr
                                        v-for="attempt in attempts"
                                        class="cursor-pointer"
                                    >
                                        <td
                                            class="pl-4 md:px-6 py-4 bg-white whitespace-nowrap"
                                            colspan="1"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-sm font-medium"
                                                >
                                                    {{ attempt.id }}
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                            colspan="3"
                                        >
                                            <div class="text-sm text-gray-900">
                                                {{ attempt.InsertType }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                                            colspan="3"
                                        >
                                            {{ attempt.DateAttempted }}
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-right"
                                            colspan="2"
                                        >
                                            <div>
                                                {{ attempt.Time_AttOrSvd }}
                                            </div>
                                        </td>
                                        <td
                                            class="pr-4 md:pr-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                        ></td>
                                    </tr>

                                    <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                        <div class="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import Pagination from "@/Pages/Components/Pagination.vue";

export default {
    name: "AttemptDetail",
    // components: { Pagination },
    props: {
        attempts: Object,
        customer: Object,
    },
    remember: {
        data: ["currentPage", "invoices", "loading", "links"],
        key: "AttemptDetail",
    },
};
</script>

<style scoped></style>
