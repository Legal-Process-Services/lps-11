<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
                Status Update
            </h2>
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
    remember: {data: ["tab"], key: "ClientResponse"},
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
