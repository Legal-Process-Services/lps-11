<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mb-5 pl-5 font-light text-gray-600">
                    Your Account Balance
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <!--                    <div-->
                    <!--                        v-if="invoices.length === 0"-->
                    <!--                        class="shadow bg-white h-16 flex items-center justify-center text-gray-500"-->
                    <!--                    >-->
                    <!--                        You have no account balance.-->
                    <!--                    </div>-->

                    <div
                        v-for="invoice in invoices"
                        class="shadow bg-white p-5 grid grid-cols-2"
                        v-on:click="clickRow(invoice.id)"
                    >
                        <div>
                            <div class="">
                                <Link
                                    class="text-blue-500 hover:text-blue-600 underline text-sm font-medium"
                                    :href="route('invoice.detail', invoice.id)"
                                    >#{{ invoice.id }}
                                </Link>
                            </div>
                            <div class="text-xs text-gray-500">
                                Date: {{ invoice.DateServed }}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-right">
                                <div class="text-lg">
                                    {{ formatCurrency(invoice.total) }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-900 mt-4">
                                {{ invoice.InvoiceFaxRemarks }}
                            </div>
                        </div>
                    </div>

<!--                    <pagination-->
<!--                        class="mt-6"-->
<!--                        :links="(links, attemptDetail)"-->
<!--                        :current-page="currentPage"-->
<!--                        v-on:clicked="clickPagination"-->
<!--                    />-->
                </div>

                <!-- Table Desktop Table -->
                <div class="sm:block -my-2 sm:-mx-6 lg:-mx-8 sm:gap-4 sm:px-0">
                    <div
                        class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8 pl-3.5"
                    >
                        <div
                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg pt-4 p-4 pb-5 mb-2.5 bg-white"
                        >
                            <div
                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer pt-2"
                            >
                                <a
                                    href="https://www.lpsnv.com/webstatements/ajjr.pdf"
                                    class="underline"
                                    target="_blank"
                                >
                                    View Statement Dated:</a
                                >&nbsp; 9/10/2024
                            </div>
                            <div
                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer pt-2"
                            >
                                <a
                                    href="https://www.lpsnv.com/webstatements/ajjr.pdf"
                                    class="underline"
                                >
                                    Total Current Balance for AJJR:</a
                                >&nbsp; $113.12
                            </div>
                            <div
                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer pt-2"
                            >
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-1"
                                    onclick="alert('Need js to UNcheck all')"
                                >
                                    <a href="invoice_print_selected">
                                    View Invoices Selected
                                </a>
                                </button>
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-1 ml-1"
                                    >
                                    <a href="pymt-stub-check">
                                    Print Payment Stub
                                    </a>
                                </button>
                                <a href="spreadsheet">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-1 ml-1"
                                >
                                    Spreadsheet
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<style scoped>
.lds-ring {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
}
.lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 64px;
    height: 64px;
    margin: 8px;
    border: 8px solid #2f98cc;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #2f98cc transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
}
@keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>

<script>
//import Pagination from "@/Pages/Components/Pagination.vue";
import attemptDetail from "@/Pages/Attempt/AttemptDetail.vue";
import { attempt } from "lodash";
import { Link } from '@inertiajs/vue3';
import {link} from "@inertiajs/inertia-vue3/src";

export default {
    name: "statement",
    computed: {
        attemptDetail() {
            return attemptDetail;
        },
    },
    // components: { Pagination },
    props: {},
    remember: {
        data: ["currentPage", "invoices", "loading", "links"],
        key: "AccountBalance",
    },
    methods: {
        attempt,
        clickRow(id) {
            let url = route("invoice.detail", id);
            this.$inertia.get(url);
            Ï;
        },
        // clickPagination(page) {
        //     this.getInvoices(page);
        // },
        getInvoices(page) {
            this.loading = true;
            if (page === "Next &raquo;") {
                page = this.currentPage + 1;
            } else if (page === "&laquo; Previous") {
                page = this.currentPage - 1;
            }
            this.currentPage = parseInt(page);
            axios
                .get(route("account-balance"), {
                    params: { page: page },
                })
                .then((response) => {
                    if (response.data) {
                        this.invoices = response.data.data;
                        this.links = response.data.links;
                    }
                    this.loading = false;
                });
        },
    },
    async created() {
        // initialize on page 1
        if (this.loading) {
            this.getInvoices(this.currentPage);
        }
    },
    data() {
        return {
            loading: true,
            invoices: Array,
            links: Array,
            currentPage: 1,
        };
    },
};
</script>

<style scoped></style>
