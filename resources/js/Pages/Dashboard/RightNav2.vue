<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div
                    class="text-lg mb-5 pl-5 font-light text-gray-600 sm:hidden pt-5"
                >
                    Your Account
                </div>
                <div
                    class="text-lg mb-5 pl-5 font-light text-gray-600 hidden sm:block pt-5"
                >
                    Your Account
                </div>
                <!-- Table Mobile -->

                <div class="grid gap-y-4 sm:hidden ml-2">
                    <div class="shadow bg-white p-5">
                        <div>
                            <div class="text-xs">
                                <a href="account-balance"
                                >Account Balance</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a href="search">Search</a>
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a href="reports">Report</a>
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a href="hearing-date"
                                >Hearing Date Report</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a
                                    href="mailto:%63on%74ac%74@lp%73nv%2E%63om"
                                    target="_blank"
                                >Email Us</a
                                >
                            </div>

                        </div>

                        <div></div>
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
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a href="account-balance"
                                                        >Account Balance</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a href="search">Search</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a href="reports">Report</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a href="hearing-date"
                                                        >Hearing Date Report</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        href="mailto:%63on%74ac%74@lp%73nv%2E%63om"
                                                        target="_blank"
                                                        >Email Us</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
    name: "RightNav2",
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
