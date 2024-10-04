<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Authorized Client
            </h2>
        </template>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="my-5"></div>
                <outstanding-firm :invoices="outFirm" />
            </div>
        </div>

        <!--        <div class="py-4">-->
        <!--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
        <!--                <div class="my-5"></div>-->
        <!--                <paid-firm :invoices="outFirm" />-->
        <!--            </div>-->
        <!--        </div>-->
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import OutstandingInvoices from "@/Pages/Dashboard/OutstandingInvoices.vue";
import OutstandingFirm from "@/Pages/Dashboard/OutstandingFirm.vue";
import PaidInvoices from "@/Pages/Dashboard/PaidInvoices.vue";
import { useRemember } from "@inertiajs/vue3";

export default {
    name: "Firm",
    components: {
        PaidInvoices,
        OutstandingInvoices,
        OutstandingFirm,
        getThisFirm,
        AppLayout,
        Welcome,
    },
    props: {
        outInvoices: Object,
        outFirm: Object,
        authClient: Object,
    },
    remember: { data: ["tab"], key: "AuthClient" },
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
