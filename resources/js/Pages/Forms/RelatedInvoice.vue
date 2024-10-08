
<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mb-5 pl-5 font-light text-gray-600">
                    Your Update Regarding this Work Order
                </div>
                <!--                 Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-for="outResponse in outResponseWO"
                        class="shadow bg-white p-5 grid grid-cols-1"
                    >
                        <div>
                            <div class="">
                                <span class="text-xs"> WORK ORDER #: </span
                                >{{ outResponse.id }}
                            </div>
                            <div class="text-s text-gray-900">
                                <span class="text-xs"> STATUS: </span
                                >{{ outResponse.total }}
                            </div>
                            <div class="text-s text-gray-900">
                                <span class="text-xs"> SERVED ON: </span
                                >{{ outResponse.DateServed }}
                            </div>
                        </div>
                        <div class=""></div>
                        <div>
                            <div class="text-s text-gray-900 mt-2">
                                <span class="text-xs"> UPDATE(S): </span
                                >{{ outResponse.InvoiceFaxRemarks }}
                            </div>
                        </div>
                        <div class=""></div>
                        <div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> FILE NAME: </span
                                >{{ outResponse.Docket_ID }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> CASE NO: </span
                                >{{ outResponse.Case_No }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> ENTERED: </span
                                >{{ outResponse.N1010C_Date }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> RECEIVED: </span
                                >{{ outResponse.DateRecdfromAttnys }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> SERVE TO: </span
                                >{{ outResponse.Serve_To }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> CLIENT/INSURED: </span
                                >{{ outResponse.Insured }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2 underline">
                                <Link
                                    :href="
                                        route('invoice.detail', outResponse.id)
                                    "
                                    @click.stop=""
                                    class="px-2 py-1"
                                >
                                    Worksheet
                                </Link>
                            </div>
                            <div class="text-sm text-gray-900 mt-2 underline">
                                <Link
                                    :href="
                                        route('attempt.detail', outResponse.id)
                                    "
                                    @click.stop=""
                                    class="px-2 py-1"
                                >
                                    Attempt History
                                </Link>
                            </div>
                            <div class="text-sm text-gray-900 mt-2 underline">
                                <Link
                                    :href="
                                        route('client-response', outResponse.id)
                                    "
                                    class="px-2 py-1"
                                >Email LPS about this service</Link
                                >
                            </div>
                        </div>
                    </div>
                    <div class="container"></div>
                </div>

                <!-- Table Desktop Table -->
                <div
                    class="hidden sm:block -my-2 sm:-mx-6 lg:-mx-8 sm:gap-4 sm:px-0"
                >
                    <div
                        class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8"
                    >
                        <div
                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                        >
                            <table
                                class="w-full divide-y divide-gray-200 table-auto"
                            >
                                <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="pl-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider width: 200px;"
                                    >
                                        Work Order
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        &nbsp;
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        &nbsp;
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        &nbsp;
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        &nbsp;
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Status
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Serve To
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 md:px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        &nbsp;
                                    </th>
                                </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                <tr v-for="invoice in outResponseWO">
                                    <td
                                        class="pl-3 md:px-6 py-4 flex-wrap"
                                        colspan="5"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="text-md font-medium"
                                            >
                                                <b>{{ invoice.id }}</b>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                                    >
                                        <div class="">
                                            {{ invoice.total }}
                                        </div>
                                    </td>
                                    <td
                                        class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                                    >
                                        {{ invoice.Serve_To }}
                                    </td>
                                    <td
                                        class="px-3 md:px-6 py-4 whitespace-normal align-text-top"
                                    ></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container"></div>
                        <div
                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-5"
                        >
                            <table
                                class="w-full divide-y divide-gray-200 table-auto"
                            >
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                <tr>
                                    <td
                                        class="pl-3 md:px-6 py-4 flex-wrap"
                                        colspan="1"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="text-md font-medium mt-10 ml-10"
                                            >
                                                <form

                                                >
                                                    Your Email Address:
                                                    <br />
                                                    <input
                                                        v-model="form.email"
                                                        type="text"
                                                        class="border border-gray-300 border-solid rounded mr-2.5 w-96 mb-5"
                                                        name="Email"
                                                        placeholder="Email"
                                                    /><br />Your Message:<br />
                                                    <input
                                                        v-model="form.message"
                                                        type="text"
                                                        class="border border-gray-300 border-solid rounded mr-2.5 h-96 w-96 mb-1"
                                                        name="Message"
                                                    /><br />

                                                    <button
                                                        @click.prevent="sendResponse"
                                                        type="submit"
                                                        className="btn bg-blue-500 border border-blue-700 border-solid rounded text-white mt-10"
                                                    >
                                                        &nbsp;&nbsp;Submit&nbsp;&nbsp;
                                                    </button>
                                                </form>
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
// import Pagination from "@/Pages/Components/Pagination";
import attemptDetail from "@/Pages/Attempt/AttemptDetail.vue";
import { attempt } from "lodash";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';
export default {
    name: "RelatedInvoice",
    computed: {
        attemptDetail() {
            return attemptDetail;
        },
    },
    components: { RightNav2, RightNav, Link },
    props: {
        outResponseWO: {
            type: [Object, Array],
        },
        id:{
            type:Number
        }

    },
    remember: {
        data: ["currentPage", "invoices", "links"],
        key: "PaidInvoices",
    },
    methods: {
        attempt,
        clickRow(id) {
            let url = route("invoice.detail", id);
            this.$inertia.get(url);
            Ï;
        },
        clickPagination(page) {
            this.getInvoices(page);
        },
        sendResponse(){
            this.form.post(route("invoice.client-response", this.id))
        }
    },
    async created() {
        // initialize on page 1
    },
    data() {
        return {
            invoices: Array,
            links: Array,
            currentPage: 1,
            form: useForm({
                email: null,
                message: null,
            }),
        };
    },
};
</script>

<style scoped></style>
