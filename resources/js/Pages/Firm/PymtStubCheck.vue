<template>
    <div class="flex flex-col bg-white">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div class="text-lg mt-5 mb-5 pl-5 font-light text-gray-600">
                    <a href="account-balance">
                        <button
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded  print:!hidden"
                        >
                            Return to List
                        </button></a>
                    <a href="account-balance" onclick="window.print();return false;" >
                        <button
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-4 print:!hidden"
                        >
                            Print this Page
                        </button></a>
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

                <div class="sm:block -my-2 sm:-mx-6 lg:-mx-8 sm:gap-4 sm:px-0 ">
                    <div
                        class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8 pl-3.5"
                    >
<!--                        <div-->
<!--                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg pt-4 p-4 pb-10 mb-2.5 bg-white"-->
<!--                        >-->

                            <div
                                class="flex items-center pt-2"
                            >
                                <TABLE WIDTH="751" BORDER="0" ALIGN="center" CELLPADDING="0" CELLSPACING="0" BORDERCOLOR="#F4F4F4">
                                    <TR>
                                        <TD width="751" VALIGN="top" BORDERCOLOR="#CCCFC8">
                                            <TABLE WIDTH="697" BORDER="0" CELLSPACING="0" CELLPADDING="0">
                                                <TR>
                                                    <TD WIDTH="168" VALIGN="top">
                                                        <DIV ALIGN="left" STYLE="padding-left:0px;padding-top:10px;">
                                                            <DIV ALIGN="left"><IMG
                                                                SRC="https://www.lpsnv.com/members/images/logo2017-90.png"
                                                                WIDTH="90"
                                                                HEIGHT="95"/><BR/>
                                                            </DIV>
                                                        </DIV>
                                                    </TD>
                                                    <TD WIDTH="313">
                                                        <DIV ALIGN="center" STYLE="padding-top:10px;"><FONT
                                                            FACE="Arial"><B><SPAN CLASS="style12">Legal
          Process Service</SPAN><BR/>
                                                        </B><SPAN CLASS="style10">Professional Service Since 1982<BR/>
                724 So. Eighth Street * Las Vegas * Nevada 89101<BR/>
                (702) 471-7255 * FAX (702) 471-7248</SPAN></FONT><BR/>
                                                            <SPAN CLASS="style15">Tax ID - 88-0293775</SPAN><BR/>
                                                            <SPAN CLASS="style21"><SPAN
                                                                CLASS="style19">www.lpsnv.com</SPAN> | <SPAN
                                                                CLASS="style19">&#99;on&#116;act&#64;lpsnv&#46;&#99;om</SPAN></SPAN>
                                                        </DIV>
                                                    </TD>
                                                    <TD WIDTH="216" VALIGN="bottom">
                                                        <DIV ALIGN="right" CLASS="style13"></DIV>
                                                    </TD>
                                                </TR>

                                                <TD CLASS="style13">&nbsp;</TD>
                                                <TD CLASS="style13">&nbsp;</TD>
                                                <TD CLASS="style13">&nbsp;</TD>
                                            </TABLE> </TD></tr>
                                </TABLE>
                                    <TR>
                                                <TD CLASS="style13"><SPAN CLASS="style22"></SPAN></TD>
                                                <TD CLASS="style13">&nbsp;</TD>
                                                <TD CLASS="style13" STYLE="padding-left:7px;">&nbsp;</TD>
                                            </TR>
<table>
                                            <TR>
                                                <TD COLSPAN="3" CLASS="style13"><P><SPAN CLASS="style22"></SPAN><SPAN CLASS="style22"></SPAN>
                                                </P>
                                                  </TD>
                                                        </TR></table>
                            </div>

                                <div
                                    class="flex items-center hover:text-indigo-500 hover:font-weight-bolder pt-5"
                                >

                                    <TABLE WIDTH="90%" BORDER="0" ALIGN="center" CELLPADDING="0" CELLSPACING="0" >
                                        <TR>
                                            <TD ROWSPAN="9" VALIGN="top"></TD>
                                            <TD ROWSPAN="9" ALIGN="left" VALIGN="middle" nowrap CLASS="style13">
                                                <TABLE WIDTH="90%" BORDER="0" CLASS="style29" style="margin-bottom:60px;">
                                                    <TR>
                                                        <TD WIDTH="65" ALIGN="left"  class="style19">Invoice #</TD>
                                                        <TD WIDTH="80" ALIGN="left"  class="style19">Inv. Date </TD>
                                                        <TD WIDTH="110" ALIGN="left"  class="style19">Case #</TD>
                                                        <TD WIDTH="299" ALIGN="left" CLASS="style19">Served To</TD>
                                                        <TD WIDTH="100" ALIGN="right" CLASS="style19">Amt Due</TD>
                                                    </TR>
                                                    <TR>
                                                        <TD WIDTH="64" ALIGN="left" CLASS="style19">2004197</TD>
                                                        <TD WIDTH="95" ALIGN="left" CLASS="style19">5/21/2020</TD>
                                                        <TD WIDTH="121" ALIGN="left" CLASS="style19"></TD>
                                                        <TD WIDTH="223" ALIGN="left" CLASS="style19"></TD>
                                                        <TD WIDTH="217" ALIGN="right" CLASS="style19">&nbsp;$45.98</TD>
                                                    </TR>
                                                    <TR>
                                                        <TD WIDTH="64" ALIGN="left"  class="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="81" ALIGN="left"  class="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="110" ALIGN="left"  class="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="247" ALIGN="left" CLASS="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="218" ALIGN="right" CLASS="style19"><STRONG>Total Amount Due:&nbsp;<SPAN CLASS="style22">&nbsp;$113.22</SPAN></STRONG></TD>
                                                    </TR>
                                                    <tr ROWSPAN="9" ALIGN="left" VALIGN="middle" nowrap CLASS="style13">
                                                        <div style="text-align: center; column-span: all;">Keep this portion for your records
                                                        </div>
                                                    </tr>
                                                </TABLE>
                                                <hr>
                                                <TABLE WIDTH="90%" BORDER="0" CLASS="style29" style="margin-top:60px;">
                                                    <tr><td><DIV align="center" STYLE="padding-top:10px;">Please return this portion
                                                        your payment. Make checks payable to Legal Process Service</DIV></td></tr>
                                                    <TR>
                                                        <TD WIDTH="65" ALIGN="left"  class="style19">Invoice #</TD>
                                                        <TD WIDTH="80" ALIGN="left"  class="style19">Inv. Date </TD>
                                                        <TD WIDTH="110" ALIGN="left"  class="style19">Case #</TD>
                                                        <TD WIDTH="299" ALIGN="left" CLASS="style19">Served To</TD>
                                                        <TD WIDTH="100" ALIGN="right" CLASS="style19">Amt Due</TD>
                                                    </TR>
                                                    <TR>
                                                        <TD WIDTH="64" ALIGN="left" CLASS="style19">2004197</TD>
                                                        <TD WIDTH="95" ALIGN="left" CLASS="style19">5/21/2020</TD>
                                                        <TD WIDTH="121" ALIGN="left" CLASS="style19"></TD>
                                                        <TD WIDTH="223" ALIGN="left" CLASS="style19"></TD>
                                                        <TD WIDTH="217" ALIGN="right" CLASS="style19">&nbsp;$45.98</TD>
                                                    </TR>
                                                    <TR>
                                                        <TD WIDTH="64" ALIGN="left"  class="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="81" ALIGN="left"  class="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="110" ALIGN="left"  class="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="247" ALIGN="left" CLASS="style19">&nbsp;&nbsp;</TD>
                                                        <TD WIDTH="218" ALIGN="right" CLASS="style19"><STRONG>Total Amount Due:&nbsp;<SPAN CLASS="style22">&nbsp;$113.22</SPAN></STRONG></TD>
                                                    </TR>
                                                </TABLE>
                                            </td>
                                        </TR>
                                    </TABLE>




                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<!--    </div>-->
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
import { Link } from '@inertiajs/vue3'

export default {
    name: "PymtStubCheck",
    computed: {
        attemptDetail() {
            return attemptDetail;
        },
    },
    // components: { Pagination },
    props: {},
    remember: {
        data: ["currentPage", "invoices", "loading", "links"],
        key: "PymtStubCheck",
    },
    methods: {
        attempt,
        clickRow(id) {
            let url = route("invoice.detail", id);
            this.$inertia.get(url);
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
                .get(route("pymt-stub-check"), {
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
