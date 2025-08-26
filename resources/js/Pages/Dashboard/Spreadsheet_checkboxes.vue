<template>
    <div class="flex flex-col">
       <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
               <div class="flex flex-col items-left">
                   <form name="spreadsheetform">
                       <table
                           class="w-1/2 divide-y divide-gray-200 table-auto"
                       >
                           <thead class="bg-gray-50">

                        <tr >
                        <td
                           class=px-3 md:px-6  whitespace-nowrap text-sm text-gray-900 align-text-top
                       >

                            <div>
                                <input type="checkbox" value="" checked>
                                Date of Hearing
                            </div>
                        </td>
                               <td
                                   class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                               >
                                   <div>
                                       <input type="checkbox" value="" >
                                       Court
                                   </div>
                               </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                   Dept No
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                    Firm Name
                                </div>
                            </td>
                   </tr><tr >
                            <td
                                class=px-3 md:px-6  whitespace-nowrap text-sm text-gray-900 align-text-top
                            >

                                <div>
                                    <input type="checkbox" value="" >
                                   Contact
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                    Total Due
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" checked>
                                    Serve To
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" checked>
                                    Date Served
                                </div>
                            </td>
                        </tr><tr >
                            <td
                                class=px-3 md:px-6  whitespace-nowrap text-sm text-gray-900 align-text-top
                            >

                                <div>
                                    <input type="checkbox" value="" checked>
                                    Date Received
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                    Docket ID
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                    Case No
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                    Workorder No
                                </div>
                            </td>
                        </tr><tr >
                            <td
                                class=px-3 md:px-6  whitespace-nowrap text-sm text-gray-900 align-text-top
                            >

                                <div>
                                    <input type="checkbox" value="" >
                                    Date Sent to Attorney
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" checked>
                                    Plaintiff
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>
                                    <input type="checkbox" value="" >
                                    Defendant
                                </div>
                            </td>
                            <td
                                class=px-3 md:px-6 py-4 whitespace-nowrap text-sm text-gray-900 align-text-top
                            >
                                <div>

                                </div>
                            </td>
                        </tr>
                           </THEAD>
                       </table>
                   </form>
                </div>
                </DIV>
            </div>
        </div>
</template>

<script>
import { assertTSUnknownKeyword } from "@babel/types";
import FormSection from "@/Components/FormSection.vue";
import attemptDetail from "@/Pages/Attempt/AttemptDetail.vue";
import RightNav2 from "@/Pages/Dashboard/RightNav2.vue";
import RightNav from "@/Pages/Dashboard/RightNav.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "Spreadsheet_checkboxes",
    components: { FormSection, RightNav2, RightNav,Link},
    props: {

    },
    remember: {
        data: ["currentPage", "customers", "customer", "here", "loading", "links"],
        key: "SpreadsheetCheckboxes",
    },
    data() {
        return {
            loading: true,
            customers: Object,
            customer: Object,
            heres: Object,
            invoices: Array,
            oneRow: Array,
            links: Array,
        };
    },
};
</script>

<style scoped></style>
