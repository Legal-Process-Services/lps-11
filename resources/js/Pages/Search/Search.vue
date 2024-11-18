<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight float-left"
            >
                Search
            </h2>

        </template>
        <div class="basis-3/4">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                    <div class="my-5"></div>

                    <ThisSearch :searches="outSearch" />
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
import OutstandingSearch from "@/Pages/Dashboard/OutstandingSearch.vue";
import AccountBalance from "@/Pages/Firm/AccountBalance.vue";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import PaidInvoices from "@/Pages/Dashboard/PaidInvoices.vue";
import ThisSearch from "@/Pages/Search/ThisSearch.vue";
import {useRemember} from "@inertiajs/vue3";

export default {
    name: "Search",
    components: {
        PaidInvoices,
        AccountBalance,
        OutstandingSearch,
        RightNav,
        RightNav2,
        AppLayout,
        ThisSearch,
    },
    props: {
        outSearch: Object,
        search: Object,
        outFirm: Object,
        customers: Object,
        sixmoago: String,
    },
    remember: { data: ["tab"], key: "Search" },
    data() {
        return {
            tab: 1,
        };
    },
    methods: {},
};
</script>
