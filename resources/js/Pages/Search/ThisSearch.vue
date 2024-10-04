<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div
                    class="text-lg mb-5 pl-5 font-light text-gray-600 hidden sm:block"
                >
                    Your Search Request
                </div>
                <!-- Table Mobile -->
                <div
                    class="lg:hidden md:hidden sm:block -my-2 sm:-mx-6 lg:-mx-8 sm:gap-4 sm:px-0"
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
                                            colspan="4"
                                        >
                                            You may search by Work Order #, Case
                                            #, Served To, Status, or Your
                                            Reference #
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
                                            or by Invoice Date
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        ></th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr>
                                        <td
                                            class="pl-3 md:px-6 py-4 flex-wrap"
                                            colspan="4"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-md font-medium"
                                                >
                                                    <form
                                                        action="search"
                                                        method="GET"
                                                    >
                                                        <input
                                                            type="text"
                                                            class="border border-gray-300 border-solid rounded mr-2.5 w-44 mb-1"
                                                            name="search"
                                                            placeholder="Search Value"
                                                        />
                                                        <button
                                                            @click="getSearches"
                                                            type="submit"
                                                            className="btn bg-blue-500 border border-blue-700 border-solid rounded text-white"
                                                        >
                                                            &nbsp;&nbsp;Search&nbsp;&nbsp;
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="pl-3 md:px-6 py-4 flex-wrap"
                                            colspan="4"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-md font-medium"
                                                >
                                                    <form
                                                        action="search"
                                                        method="GET"
                                                    >
                                                        <input
                                                            type="date"
                                                            class="border border-gray-300 border-solid rounded mr-2.5 w-36 mb-1"
                                                            name="invdate1"
                                                            placeholder="From"
                                                        />

                                                        <input
                                                            type="date"
                                                            class="border border-gray-300 border-solid rounded mr-2.5 w-36 mb-1"
                                                            name="invdate2"
                                                            placeholder="To"
                                                        />

                                                        <button
                                                            @click="getSearches"
                                                            type="submit"
                                                            className="btn bg-blue-500 border border-blue-700 border-solid rounded text-white"
                                                        >
                                                            &nbsp;&nbsp;Search&nbsp;&nbsp;
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container">&nbsp;</div>
                    </div>
                </div>
                <div
                    class="hidden sm:block text-lg mb-5 pl-5 font-light text-gray-600 sm:hidden"
                >
                    Your Search Results
                </div>
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-if="searches.length === 0"
                        class="shadow bg-white h-16 flex items-center justify-center text-gray-500"
                    >
                        You have no results
                    </div>

                    <div
                        v-for="search in searches.data"
                        class="shadow bg-white p-5 grid grid-cols-2"
                    >
                        <div>
                            <div class="">
                                <!--                                <Link-->
                                <!--                                    class="text-blue-500 hover:text-blue-600 underline text-sm font-medium"-->
                                <!--                                    :href="route('invoice.detail', search.id)"-->
                                <!--                                    >#{{ search.id }}-->
                                <!--                                </Link>-->
                            </div>
                            <div class="">
                                <span class="text-xs"> WORK ORDER #: </span
                                >{{ search.id }}
                            </div>
                            <div class="text-s text-gray-900">
                                <span class="text-xs"> STATUS: </span
                                >{{ search.total }}
                            </div>
                            <div class="text-s text-gray-900">
                                <span class="text-xs"> SERVED ON: </span
                                >{{ search.DateServed }}
                            </div>
                        </div>
                        <div class=""></div>
                        <div>
                            <div class="text-s text-gray-900 mt-2">
                                <span class="text-xs"> UPDATE(S): </span
                                >{{ search.InvoiceFaxRemarks }}
                            </div>
                        </div>
                        <div class=""></div>
                        <div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> FILE NAME: </span
                                >{{ search.Docket_ID }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> CASE NO: </span
                                >{{ search.Case_No }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> ENTERED: </span
                                >{{ search.N1010C_Date }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> RECEIVED: </span
                                >{{ search.DateRecdfromAttnys }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> SERVE TO: </span
                                >{{ search.Serve_To }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> CLIENT/INSURED: </span
                                >{{ search.Insured }}
                            </div>
                            <div class="text-sm text-gray-900 mt-2 underline">
                                <Link
                                    :href="route('invoice.detail', search.id)"
                                    @click.stop=""
                                    class="px-2 py-1"
                                >
                                    Worksheet
                                </Link>
                            </div>
                            <div class="text-sm text-gray-900 mt-2 underline">
                                <Link
                                    :href="route('attempt.detail', search.id)"
                                    @click.stop=""
                                    class="px-2 py-1"
                                >
                                    Attempt History
                                </Link>
                            </div>
                            <div class="text-sm text-gray-900 mt-2 underline">
                                <Link
                                    :href="route('client-response', search.id)"
                                    class="px-2 py-1"
                                    >Email LPS about this service</Link
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Desktop Table -->
                <div
                    class="sm:block -my-2 sm:-mx-6 lg:-mx-8 sm:gap-4 sm:px-0 hidden"
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
                                            colspan="4"
                                        >
                                            You may search by Work Order #, Case
                                            #,<br />
                                            Served To, Status, or Your Reference
                                            #.
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
                                            Invoice Date
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        ></th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <!--                                    <tr v-if="loading">-->
                                    <!--                                        <td-->
                                    <!--                                            colspan="8"-->
                                    <!--                                            class="text-center py-24 bg-gray-100"-->
                                    <!--                                        >-->
                                    <!--                                            <div class="lds-ring">-->
                                    <!--                                                <div></div>-->
                                    <!--                                                <div></div>-->
                                    <!--                                                <div></div>-->
                                    <!--                                                <div></div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </td>-->
                                    <!--                                    </tr>-->

                                    <tr>
                                        <td
                                            class="pl-3 md:px-6 py-4 flex-wrap"
                                            colspan="4"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-md font-medium"
                                                >
                                                    <form
                                                        action="search"
                                                        method="GET"
                                                    >
                                                        <input
                                                            type="text"
                                                            class="border border-gray-300 border-solid rounded mr-2.5 w-64"
                                                            name="search"
                                                            placeholder="Search Value"
                                                        />
                                                        <button
                                                            @click="getSearches"
                                                            type="submit"
                                                            className="btn bg-blue-500 border border-blue-700 border-solid rounded text-white"
                                                        >
                                                            &nbsp;&nbsp;Search&nbsp;&nbsp;
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="pl-3 md:px-6 py-4 flex-wrap"
                                            colspan="4"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-md font-medium"
                                                >
                                                    <form
                                                        action="search"
                                                        method="GET"
                                                    >
                                                        <input
                                                            type="date"
                                                            class="border border-gray-300 border-solid rounded mr-2.5 w-40"
                                                            name="invdate1"
                                                            placeholder="From"
                                                        />

                                                        <input
                                                            type="date"
                                                            class="border border-gray-300 border-solid rounded mr-2.5 w-40"
                                                            name="invdate2"
                                                            placeholder="To"
                                                        />

                                                        <button
                                                            @click="getSearches"
                                                            type="submit"
                                                            className="btn bg-blue-500 border border-blue-700 border-solid rounded text-white"
                                                        >
                                                            &nbsp;&nbsp;Search&nbsp;&nbsp;
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div
                    class="hidden lg:block text-lg mb-5 pl-5 font-light text-gray-600"
                >
                    Your Search Results
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden">
                    <div
                        v-if="searches.length === 0"
                        class="shadow bg-white h-16 flex items-center justify-center text-gray-500"
                    >
                        You have no results matching this query
                    </div>

                    <pagination
                        class="mt-6"
                        :links="links"
                        :current-page="currentPage"
                        v-on:clicked="clickPagination"
                    />
                </div>

                <!-- Table Desktop Table -->
                <div
                    class="sm:block hidden -my-2 sm:-mx-6 lg:-mx-8 sm:gap-4 sm:px-0"
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
                                            Invoice Date
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Served On
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 md:px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider"
                                        >
                                            Update(s)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr v-if="loading">
                                        <td
                                            colspan="5"
                                            class="text-center py-24 bg-gray-100"
                                        >
                                            <div class="lds-ring">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        v-if="searches.length === 0 && !loading"
                                        class="shadow bg-white h-16 text-gray-500"
                                    >
                                        <td colspan="8" class="text-center">
                                            You have no results matching this
                                            query.
                                        </td>
                                    </tr>

                                    <tr
                                        v-for="search in searches.data"
                                        v-on:click="clickRow(search.id)"
                                    >
                                        <td
                                            class="pl-3 md:px-6 py-4 flex-wrap"
                                            colspan="5"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="text-md font-medium"
                                                >
                                                    <b>{{ search.id }}</b>
                                                    <br /><br />
                                                    File Name
                                                    <b>{{
                                                        search.Docket_ID
                                                    }}</b>
                                                    <br />Case No
                                                    <b>{{ search.Case_No }}</b>
                                                    <br />Entered
                                                    <b>{{
                                                        search.N1010C_Date
                                                    }}</b>
                                                    <br />Received
                                                    <b>
                                                        {{
                                                            search.DateRecdfromAttnys
                                                        }}</b
                                                    ><br />Serve To
                                                    <b>
                                                        {{ search.Serve_To }}</b
                                                    >
                                                    <br />Client/Insured
                                                    <b>{{ search.Insured }}</b>
                                                    <br /><Link
                                                        :href="
                                                            route(
                                                                'invoice.detail',
                                                                search.id,
                                                            )
                                                        "
                                                        @click.stop=""
                                                        class="px-2 py-1"
                                                    >
                                                        Worksheet </Link
                                                    >|<Link
                                                        :href="
                                                            route(
                                                                'attempt.detail',
                                                                search.id,
                                                            )
                                                        "
                                                        @click.stop=""
                                                        class="px-2 py-1"
                                                    >
                                                        Attempt History
                                                    </Link>
                                                    <br /><Link
                                                        :href="
                                                            route(
                                                                'client-response',
                                                                search.id,
                                                            )
                                                        "
                                                        @click.stop=""
                                                        class="px-2 py-1"
                                                        >Email LPS about this
                                                        service</Link
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                                        >
                                            <div class="">
                                                {{ search.InvoiceDate }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                                        >
                                            fdgdfg
                                        </td>
                                        <td
                                            class="px-3 md:px-6 py-4 whitespace-normal align-text-top"
                                        >
                                            <div>
                                                {{ search.InvoiceFaxRemarks }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container"></div>
                        <pagination
                            class="mt-6"
                            :links="links"
                            :current-page="currentPage"
                            v-on:clicked="clickPagination"
                        />
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
// import Pagination from "@/Pages/Components/Pagination.vue";
import { Link } from '@inertiajs/vue3';

export default {
    name: "ThisSearch",
    computed: {
        // getSearch() {
        //     return this.searches();
        // },
    },
     components: { Link },
    props: { searches: Object },
    remember: {
        data: ["currentPage", "invoices", "search", "loading", "links"],
        key: "ThisSearch",
    },
    methods: {
        clickRow(id) {
            let url = route("invoice.detail", id);
            this.$inertia.get(url);
        },
        clickPagination(page) {
            this.getSearches(page);
        },
        getSearches(page) {
            this.loading = true;

            this.currentPage = parseInt(page);
            axios
                .get(route("search"), {
                    params: { page: page },
                })
                .then((response) => {
                    if (response.data) {
                        // this.searches = response.data.data;
                        // this.links = response.data.links;
                    }
                    this.loading = false;
                });
        },
    },
    async created() {
        // initialize on page 1
        if (this.loading) {
            // this.getSearches(this.currentPage);
        }
    },
    data() {
        return {
            loading: false,
            invoices: Array,
            //   searches: Array,
            links: Array,
            currentPage: 1,
        };
    },
};
</script>

<style scoped></style>
