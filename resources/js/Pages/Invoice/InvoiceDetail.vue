<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Work Order #{{ invoice.id }}
            </h2>
        </template>

        <div class="my-10 print:my-0"></div>

        <div class="mx-auto max-w-5xl">
            <div class="justify-end flex my-5 gap-4 print:hidden mx-5 sm:mx-0">
                <jet-secondary-button
                    onclick="window.history.go(-1);return false;"
                    >Back</jet-secondary-button
                >
                <jet-secondary-button onclick="window.print();return false;"
                    >Print</jet-secondary-button
                >
                <Link
                    v-if="!invoice.paid_on"
                    :href="route('invoice.pay', invoice.id)"
                >
                    <jet-button>View</jet-button>
                </Link>
            </div>

            <div
                class="shadow print:shadow-none overflow-hidden border-b print:border-none border-gray-200 sm:rounded-lg bg-white sm:p-5"
            >
                <div class="h-24 items-center mb-8 mt-2 print:mt-0">
                    <img class="float-right h-24" src="/img/LPS-Logo.jpg" />
                    <div class="pt-20">
                        <div class="text-2xl font-weight-bolder">
                            Process Summary
                        </div>
                    </div>
                </div>
                <div class="left text-left text-med text-gray-500 pb-2">
                    <div class="">Please include form with the documents</div>
                </div>
                <div>
                    <hr />
                    <div style="width: 1024px">Customer Information</div>
                    <hr />
                </div>

                <table class="table-auto min-w-full">
                    <thead class="text-gray-500 text-med">
                        <tr>
                            <td class="py-1 pt-3">
                                <b> Work Order Number:</b> {{ invoice.id }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Client ID:</b> {{ customer.AttnyID }}
                                <b> Firm Name:</b> {{ customer.FirmName }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Legal Asst:</b>
                                {{ invoice.CombAttnyFirstLastTitle }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Client/Insured:</b> {{ invoice.Insured }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> File Name/No:</b> {{ invoice.Docket_ID }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Purchase Order:</b>
                                {{ invoice.PurchaseOrder }}
                            </td>
                        </tr>
                    </thead>
                    <div class="pt-6">
                        <hr />
                        <div>Process Information</div>
                        <hr />
                    </div>
                    <thead class="text-gray-500 text-med">
                        <tr>
                            <td class="py-1 pt-3">
                                <b> Service Handling:</b> {{ invoice.Service }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Documents to be Served:</b>
                                {{ invoice.DocumentsToBeServed }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Serve To:</b> {{ invoice.Serve_To }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Serve To Address 1:</b>
                                {{ invoice.Serve_To_Address1 }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Is Witness Friendly?</b>
                                {{ invoice.FriendlyWitness }}
                                <b style="padding-left: 20px">
                                    OK to SubServe:</b
                                >
                                {{ invoice.OKtoSubServe }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Witness Check Included:</b>
                                {{ invoice.CutCheck }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Special Instructions/Additional Info:</b>
                                {{ invoice.SpecialInstructions }}
                            </td>
                        </tr>
                    </thead>
                    <div class="pt-6">
                        <hr />
                        <div>Service Request</div>
                        <hr />
                    </div>
                    <thead class="text-gray-500 text-med">
                        <tr>
                            <td class="py-1 pt-3">
                                <b> Submitted Date:</b>
                                {{ invoice.N1010C_Date }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <b> Sending Documents to LPS by:</b>
                                {{ invoice.WebSendBy }}
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="py-5 print:hidden"></div>
        </div>
    </app-layout>
</template>

<script>
import JetButton from "@/Jetstream/Button";
import AppLayout from "@/Layouts/AppLayout";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import { Link } from '@inertiajs/vue3';

export default {
    name: "InvoiceDetail",
    components: { JetSecondaryButton, AppLayout, JetButton, Link },
    props: {
        invoice: Object,
        lineItems: Array,
        customer: Object,
        hasTax: Boolean,
        company: Object,
        companyAddress: String,
    },
};
</script>

<style scoped></style>
