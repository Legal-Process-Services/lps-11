<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">

                <div class='flex flex-col items-left print:hidden'>
                    <a href="javascript:window.print()"
                       class="btn bg-blue-500 border border-blue-700 border-solid rounded text-white text-center"
                       style="width:170px; margin-top:10px; height:50px; margin-bottom:10px;  padding-top:12px;">
                        Pay Select Invoice(s)</a>
                    <a href="javascript:window.location='https://www.lpsnv.com/members/spreadsheet_excel.asp?sort_by=WorkOrderNo&show_fields=DateSentToAttny, WorkOrderNo, Docket_ID, DateRecdfromAttnys, TotalAmountDueTABLE, Contact, CombAttnyFirstLastTitle, Dept_No, Defendant_Respondent'"
                       class="btn bg-blue-500 border border-blue-700 border-solid rounded text-white text-center"
                       style="width:170px; margin-top:10px; height:50px; margin-bottom:10px;  padding-top:12px;">
                        Export to Excel</a>

                    <a href="javascript:history.back()"
                       class="btn bg-blue-500 border border-blue-700 border-solid rounded text-white text-center"
                       style="width:170px; margin-top:10px; height:50px; padding-top:12px;">
                        Return to List</a>

                    <a href="javascript:window.print()"
                       class="btn bg-blue-500 border border-blue-700 border-solid rounded text-white text-center"
                       style="width:170px; margin-top:10px; height:50px; margin-bottom:20px;  padding-top:12px;">
                        Print this page</a>
                </div>
                <div class="text-sm mb-5 pl-5 font-light text-gray-600" style="width: 100%; vertical-align: top;">
                    <div style="display: inline-block; width: 30%;  vertical-align: top;">
                    </div>

                    <div style="display: inline-block; width: 30%; vertical-align: top; text-align: center; line-height: 16px;">
                       <span class="font-bold text-gray-900 text-lg">Legal Process Service</span><br>
                        Professional Service Since 1982<br>
                        724 So. Eight Street * Las Vegas * Nevada 89101<br>
                        (702) 471-7255 * FAX (702) 471-7248<br>
                        Tax ID - 88-0293775<br>
                        www.lpsnv.com
                    </div>
                    <div style="display: inline-block; width: 30%;  vertical-align: top;">
                       &nbsp;
                    </div>


                </DIV>
            </div>
        </div>
    </div>
</template>

<script>
import { assertTSUnknownKeyword } from "@babel/types";

export default {
    name: "Spreadsheet_header",
    props: {   },
    methods: {
        assertTSUnknownKeyword,
        clickRow: function (customer_id) {
            let url = route("customer.detail", customer_id);
            this.$inertia.get(url);
        },
    },
};
</script>

<style scoped></style>
