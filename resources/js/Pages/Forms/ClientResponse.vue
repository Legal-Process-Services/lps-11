<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
                Status Update
            </h2>
            <div
                class="hidden w-full md:block md:w-auto align-middle"
                id="navbar-default"
            >
                <ul
                    class="font-medium flex float-right flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                >
                    <li>
                        <a
                            href="/dashboard"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            >Process List</a
                        >
                    </li>
                    <li>
                        <a
                            href="/search"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            >Search</a
                        >
                    </li>
                    <li>
                        <a
                            href="/account-balance"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            >Account Balance</a
                        >
                    </li>
                    <li>
                        <a
                            href="mailto:%63on%74ac%74@lp%73nv%2E%63om"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            >Email Us</a
                        >
                    </li>
                </ul>
            </div>
        </template>

        <div class="basis-3/4">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <outstanding-firm
                        :customers="outFirm"
                        :sixmoago="sixmoago"
                    />
                </div>
            </div>

            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <related-invoice
                        :outResponseWO="outResponseWO"
                        :customers="outFirm"
                        :sixmoago="sixmoago"
                        :id="id"
                    />
                </div>
            </div>
        </div>

        <div class="basis-1/4">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <right-nav />
                    <right-nav2 />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import OutstandingInvoices from "@/Pages/Dashboard/OutstandingInvoices.vue";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import PaidInvoices from "@/Pages/Dashboard/PaidInvoices.vue";
import AccountBalance from "@/Pages/Dashboard/AccountBalance.vue";
import { useRemember } from "@inertiajs/vue3";
import OutstandingFirm from "@/Pages/Dashboard/OutstandingFirm.vue";
import RelatedInvoice from "@/Pages/Forms/RelatedInvoice.vue";

export default {
    name: "ClientResponse",
    components: {
        PaidInvoices,
        AccountBalance,
        OutstandingInvoices,
        OutstandingFirm,
        RelatedInvoice,
        RightNav,
        RightNav2,
        AppLayout,
    },
    props: {
        outResponseWO: Object,
        outFirm: Object,
        customers: Object,
        sixmoago: String,
        customer: Object,
        id: Number
    },
    remember: { data: ["tab"], key: "ClientResponse" },
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
