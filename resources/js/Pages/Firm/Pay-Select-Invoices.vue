<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
                Pay Select Invoices
            </h2>
            <div>
                &nbsp;
            </div>
        </template>

        <div class="basis-3/4">
            <!--            <div class="py-2">-->
            <!--                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">-->
            <!--                    <div class="my-5"></div>-->
            <!--                    <acct-bal-->
            <!--                        :customers="outFirm"-->
            <!--                        :sixmoago="sixmoago"-->
            <!--                    />-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <select-invoices :invoices="outInvoices"/>
                    <pay-select :invoices="openInvoices" />
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
import AccountBalance from "@/Pages/Firm/AccountBalance.vue";
import {useRemember} from "@inertiajs/vue3";
import OutstandingFirm from "@/Pages/Dashboard/OutstandingFirm.vue";
import AcctBal from "@/Pages/Firm/Acct-Bal.vue";
import SelectInvoices from "@/Pages/Firm/Select-Invoices.vue";
import PaySelect from "@/Pages/Firm/PaySelect.vue";

export default {
    name: "Pay-Select-Invoices",
    components: {
        SelectInvoices,
        AcctBal,
        PaidInvoices,
        PaySelect,
        AccountBalance,
        OutstandingInvoices,
        OutstandingFirm,
        RightNav,
        RightNav2,
        AppLayout,

    },
    props: {
        outInvoices: Object,
        openInvoices: Object,
        outFirm: Object,
        customers: Object,
        sixmoago: String,
        invoices: Object,
        customer: Object,
    },
    remember: {data: ["tab"], key: "Pay-Select-Invoices"},
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
