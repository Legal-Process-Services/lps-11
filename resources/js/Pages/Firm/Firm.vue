<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
               Your Firm jcz
            </h2>
        </template>

        <div class="basis-3/4">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <AccountBalance :invoices="outInvoices" />
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
import Dashboard from "@/Pages/Dashboard.vue";
import OutstandingFirm from "@/Pages/Dashboard/OutstandingFirm.vue";
import OutstandingInvoices from "@/Pages/Dashboard/OutstandingInvoices.vue";
import { useRemember } from "@inertiajs/vue3";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import PaidInvoices from "@/Pages/Dashboard/PaidInvoices.vue";
import AccountBalance from "@/Pages/Firm/AccountBalance.vue";
import ThisSearch from "@/Pages/Search/ThisSearch.vue";

export default {
    name: "Firm",
    components: {
        ThisSearch,
        AccountBalance,
        PaidInvoices,
        OutstandingInvoices,
        Dashboard,
        RightNav,
        RightNav2,
        OutstandingFirm,
        AppLayout,
        Welcome,
    },
    props: {
        outFirm: Object,
        outInvoices: Object,
        customers: Object,
    },
    remember: { data: ["tab"], key: "Firm" },
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
