<template>
    <print-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
                Hearing Dates Print
            </h2>
            <div>
                &nbsp;
            </div>
        </template>

        <div class="basis-3/4">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <hearing-list-firm-print
                        :customers="outFirm"
                        :sixmoago="sixmoago"
                        :sevendaysago="sevendaysago"
                    />
                </div>
            </div>

            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                        <hearing-date-print :hearingdates="outstandingHearingDates"
                                      :sevendaysago="sevendaysago"
                                      :customers="outFirm"/>
                </div>
            </div>
        </div>

    </print-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import PrintLayout from "@/Layouts/PrintLayout.vue";
import OutstandingInvoices from "@/Pages/Dashboard/OutstandingInvoices.vue";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import { useRemember } from "@inertiajs/vue3";
import OutstandingFirm from "@/Pages/Dashboard/OutstandingFirm.vue";
import hearingListFirm from "@/Pages/Dashboard/HearingListFirm.vue";
import hearingListFirmPrint from "@/Pages/Dashboard/HearingListFirmPrint.vue";
import hearingDate from "@/Pages/Firm/HearingDate.vue";
import hearingDatePrint from "@/Pages/Firm/HearingDatePrint.vue";

export default {
    name: "Hearing-Date-Print",
    components: {
        OutstandingInvoices,
        OutstandingFirm,
        hearingListFirm,
        hearingListFirmPrint,
        hearingDate,
        hearingDatePrint,
        RightNav,
        RightNav2,
        AppLayout,
        PrintLayout,

    },
    props: {
        outInvoices: Object,
        outFirm: Object,
        outHearing: Object,
        customers: Object,
        hearingdates: Object,
        hearingdatesprint: Object,
        outstandingHearingDates: Object,
        outstandingHearingDatesPrint: Object,
        sixmoago: String,
        sevendaysago: String,
        customer: Object,
        invoices: Object,
    },
    remember: { data: ["tab"], key: "Hearing-Date-Print" },
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
