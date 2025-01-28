<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
                Hearing Dates
            </h2>
            <div>
                &nbsp;
            </div>
        </template>

        <div class="basis-3/4">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                    <hearing-list-firm
                        :customers="outFirm"
                        :sixmoago="sixmoago"
                        :sevendaysago="sevendaysago"
                    />
                </div>
            </div>

            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>
                        <hearing-date :hearingdates="outstandingHearingDates"
                                      :sevendaysago="sevendaysago"
                                      :customers="outFirm"/>
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
import { useRemember } from "@inertiajs/vue3";
import OutstandingFirm from "@/Pages/Dashboard/OutstandingFirm.vue";
import hearingListFirm from "@/Pages/Dashboard/HearingListFirm.vue";
import hearingDate from "@/Pages/Firm/HearingDate.vue";

export default {
    name: "Hearing-Date",
    components: {
        OutstandingInvoices,
        OutstandingFirm,
        hearingListFirm,
        hearingDate,
        RightNav,
        RightNav2,
        AppLayout,

    },
    props: {
        outInvoices: Object,
        outFirm: Object,
        outHearing: Object,
        customers: Object,
        hearingdates: Object,
        outstandingHearingDates: Object,
        sixmoago: String,
        sevendaysago: String,
        customer: Object,
        invoices: Object,
    },
    remember: { data: ["tab"], key: "Hearing-Date" },
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
