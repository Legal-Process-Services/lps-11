<template>
  <div class="flex flex-col">
    <div class="-my-2 sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
        <div class="text-lg mb-5 pl-5 font-light text-gray-600">
          Your Process List
        </div>
        <!--                 Table Mobile -->
        <div class="grid gap-y-4 sm:hidden">
          <div
              v-if="invoices.length === 0"
              class="shadow bg-white h-16 flex items-center justify-center text-gray-500"
          >
            You have no Work Orders in the past 6 months.
          </div>

          <div
              v-for="invoice in invoices"
              class="shadow bg-white p-5 grid grid-cols-1"
          >
            <div>
              <div class="">
                                <span class="text-xs"> WORK ORDER #: </span
                                >{{ invoice.id }}
              </div>
              <div class="text-s text-gray-900">
                                <span class="text-xs"> STATUS: </span
                                >{{ invoice.total }}
              </div>
              <div class="text-s text-gray-900">
                                <span class="text-xs"> SERVED ON: </span
                                >{{ invoice.DateServed }}
              </div>
            </div>
            <div class=""></div>
            <div>
              <div class="text-s text-gray-900 mt-2">
                                <span class="text-xs"> UPDATE(S): </span
                                >{{ invoice.InvoiceFaxRemarks }}
              </div>
            </div>
            <div class=""></div>
            <div>
              <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> FILE NAME: </span
                                >{{ invoice.Docket_ID }}
              </div>
              <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> CASE NO: </span
                                >{{ invoice.Case_No }}
              </div>
              <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> ENTERED: </span
                                >{{ invoice.N1010C_Date }}
              </div>
              <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> RECEIVED: </span
                                >{{ invoice.DateRecdfromAttnys }}
              </div>
              <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> SERVE TO: </span
                                >{{ invoice.Serve_To }}
              </div>
              <div class="text-sm text-gray-900 mt-2">
                                <span class="text-xs"> CLIENT/INSURED: </span
                                >{{ invoice.Insured }}
              </div>
              <div class="text-sm text-gray-900 mt-2 underline">
                <Link
                    :href="route('invoice.detail', invoice.id)"
                    @click.stop=""
                    class="px-2 py-1"
                >
                  Worksheet
                </Link>
              </div>
              <div class="text-sm text-gray-900 mt-2 underline">
                <Link
                    :href="route('attempt.detail', invoice.id)"
                    @click.stop=""
                    class="px-2 py-1"
                >
                  Attempt History
                </Link>
              </div>
              <div class="text-sm text-gray-900 mt-2 underline">
                <Link
                    :href="route('client-response', invoice.id)"
                    class="px-2 py-1"
                >Email LPS about this service</Link
                >
              </div>
            </div>
          </div>
          <div class="container"></div>
          <!--                    <pagination-->
          <!--                        class="mt-6"-->
          <!--                        :links="links"-->
          <!--                        :current-page="currentPage"-->
          <!--                        v-on:clicked="clickPagination"-->
          <!--                    />-->
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
                    Serve To
                  </th>
                  <th
                      scope="col"
                      class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Date
                  </th>
                  <th
                      scope="col"
                      class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Time
                  </th>
                  <th
                      scope="col"
                      class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Court
                  </th>
                  <th
                      scope="col"
                      class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                   County
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
                    v-if="invoices.length === 0 && !loading"
                    class="shadow bg-white h-16 text-gray-500"
                >
                  <td colspan="5" class="text-center">
                    You have no Work Orders in the past
                    6 months.
                  </td>
                </tr>

                <tr
                    v-if="!loading"
                    v-for="invoice in invoices"
                    v-on:click="clickRow(invoice.id)"
                >
                  <td
                      class="pl-3 md:px-6 py-4 flex-wrap"
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
                      {{
                        invoice.Serve_To
                      }}
                    </div>
                  </td>
                  <td
                      class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                  >
                    <div class="">
                      {{ invoice.DateofHearing }}
                      <br/>
                      Hearing Status: {{ invoice.HearingStatus }}
                    </div>
                  </td>
                  <td
                      class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                  >
                    <div class="">
                      {{ invoice.TimeofHearing }}
                    </div>
                  </td>
                  <td
                      class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                  >
                    {{
                      invoice.Court
                    }}
                  </td>
                  <td
                      class="px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top"
                      colspan="2"
                  >
                    <div  style="overflow-y:hidden; overflow-x: hidden; width:70px; ">
                    {{ invoice.County }}
                    </div>
                  </td>

                </tr>
                </tbody>
              </table>
            </div>
            <div class="container"></div>
            <!--                        <pagination-->
            <!--                            class="mt-6"-->
            <!--                            :links="links"-->
            <!--                            :current-page="currentPage"-->
            <!--                            v-on:clicked="clickPagination"-->
            <!--                        />-->
          </div>
        </div>
      </div>
    </div>

    <div class='flex flex-col items-left'>
    <a href="hearing-date-print"
       class="btn bg-blue-500 border border-blue-700 border-solid rounded text-white text-center"
       style="width:170px; margin-top:50px; height:50px; margin-top:20px; padding-top:12px;">
     Printer Friendly</a>
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
//import Pagination from "@/Pages/Components/Pagination";
import attemptDetail from "@/Pages/Attempt/AttemptDetail.vue";
import {attempt} from "lodash";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import {Link} from '@inertiajs/vue3';

export default {
  name: "HearingDate",
  computed: {
    attemptDetail() {
      return attemptDetail;
    },
  },
  components: {RightNav2, RightNav, Link},
  props: {},
  remember: {
    data: ["currentPage", "invoices", "loading", "links"],
    key: "HearingDate",
  },
  methods: {
    clickPagination(page) {
      this.getPrintable(page);
    },
    getPrintable(page) {
      this.loading = true;

      this.currentPage = parseInt(page);
      axios
          .get(route("hearing-date-print"), {
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
          .get(route("dashboard-paid-invoices"), {
            params: {page: page},
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
