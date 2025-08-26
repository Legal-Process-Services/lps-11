<template>
    <div class="flex flex-col">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                <div
                    class="text-lg mb-5 pl-5 font-light text-gray-600 sm:hidden"
                >
                    Submit Request
                </div>
                <div
                    class="text-lg mb-5 pl-5 font-light text-gray-600 hidden sm:block"
                >
                    Submit Request
                </div>
                <!-- Table Mobile -->
                <div class="grid gap-y-4 sm:hidden ml-2">
                    <div class="shadow bg-white p-5">
                        <div>
                            <div class="text-xs">
                                <a
                                    :href="`https://platform.claris.com/form/430/23?Email307=${customer.Email}&ShortText305=${customer.FirmName}&ShortText304=${customer.AttnyID}#s=bXN0XzJacmhVdDNQUEdLcU1hZTVWSXQ4bEdZSnF6ZXlhY3hyOmNkYWUwYTM5Y2M4YWE0OTU4NDYzYjM2MTZiNDllYzU3MDFhMTYxZWI2MjViNDA2MGRkMDI2MTYzZjJkMWRiNzI=`"
                                    target="_blank"
                                    >New Service of Process</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a
                                    :href="`https://platform.claris.com/form/430/34?Email307=${customer.Email}&ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}#s=bXN0XzJjZVFuZmRlN3VaVkxXZHNicURqZ1YxeUpJY2VFamxHOjU4ZDQ1OWU2MDUyMWY4Nzc1ZWVmMmVkN2I3MTk3ZGRiYTUxZTI1ZGM4MjAxNmRjYTk0Y2IwYzQ0ZmU1YjFiNzY=`"
                                    target="_blank"
                                    >New Court Run</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a
                                    :href="`https://platform.claris.com/form/430/35?ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}&Email307=${customer.Email}#s=bXN0XzJkY0RPUEMxSXNNemxTQkVkWUVFcWRMZzdUaU9WdnQxOjg1ZDJjYTY5YmM4YjUwODhlMTNhOGQ3YzExY2I5NmM3NjJjYTk1NmE3NDE4NjBlNmQxMTI4NTIyMjZjNzZiYjI=`"
                                    target="_blank"
                                    >New Eviction Notice</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a
                                    :href="`https://platform.claris.com/form/430/36?ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}&Email307=${customer.Email}#s=bXN0XzJoQ0xFOWROaFVmNjlEbXBKTE1GTGVNSExabER1WUlGOjlhY2M1MmRiMWQ0ODJkZDJiZWZhMzc3OTZkNTc2ZDkyYjkxOGVhZDY0ZWRhMzI3MGZlZGNlN2VmNWRhYjdlMGM=`"
                                    target="_blank"
                                    >New Summary Eviction</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a
                                    :href="`https://platform.claris.com/form/430/37?ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}&Email307=${customer.Email}#s=bXN0XzJjZVpLZVVnRmhGSnpQcWpRMzFCdW15QWI5MGJpVnV6OmQ5ZWVhYjEyYWEyODc3Y2FhNjAxOWRjYjA0MWI0YTdiZTIyMGZlN2M4ZTg5ZjMyNDM1MTdhNzA2ZGVmNmYzZjU=`"
                                    target="_blank"
                                    >New Small Claims Complaint</a
                                >
                            </div>
                            <hr class="mb-1 mt-0.5" />
                            <div class="text-xs">
                                <a
                                    :href="`https://platform.claris.com/form/430/38?ShortText305=${customer.FirmName}&Email307=${customer.Email}&ShortText304=${customer.AttnyID}#s=bXN0XzJjZWhTQWh5MVhRbW5JVFdJRkdhRncyd0pCajZNb1l5OjVkYWExZDc1YzdlNjBjZThjMWVjNGRlZDI5MmIxODY3NzYzYWZkZDRiNTBkNDNjYjg0NjA1MzhiY2NiOTczNzA=`"
                                    target="_blank"
                                    >New Writ (Small Claims Court)</a
                                >
                            </div>
                        </div>

                        <div></div>
                    </div>
                </div>

                <!-- Table Desktop Table -->
                <div class="hidden sm:block -my-2 sm:-mx-6 lg:-mx-4">
                    <div
                        class="py-2 align-middle inline-block w-full sm:px-6 lg:px-4"
                    >
                        <div
                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                        >
                            <table
                                class="w-full divide-y divide-gray-200 table-auto"
                            >
                                <tbody
                                    class="bg-white divide-y divide-gray-200"
                                >
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        :href="`https://platform.claris.com/form/430/23?Email307=${customer.Email}&ShortText305=${customer.FirmName}&ShortText304=${customer.AttnyID}#s=bXN0XzJacmhVdDNQUEdLcU1hZTVWSXQ4bEdZSnF6ZXlhY3hyOmNkYWUwYTM5Y2M4YWE0OTU4NDYzYjM2MTZiNDllYzU3MDFhMTYxZWI2MjViNDA2MGRkMDI2MTYzZjJkMWRiNzI=`"
                                                        target="_blank"
                                                        >New Service of
                                                        Process</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        :href="`https://platform.claris.com/form/430/34?Email307=${customer.Email}&ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}#s=bXN0XzJjZVFuZmRlN3VaVkxXZHNicURqZ1YxeUpJY2VFamxHOjU4ZDQ1OWU2MDUyMWY4Nzc1ZWVmMmVkN2I3MTk3ZGRiYTUxZTI1ZGM4MjAxNmRjYTk0Y2IwYzQ0ZmU1YjFiNzY=`"
                                                        target="_blank"
                                                        >New Court Run</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a href="PaidInvoices.vue"
                                                        >Upload CSV Bulk File</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        :href="`https://platform.claris.com/form/430/35?ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}&Email307=${customer.Email}#s=bXN0XzJkY0RPUEMxSXNNemxTQkVkWUVFcWRMZzdUaU9WdnQxOjg1ZDJjYTY5YmM4YjUwODhlMTNhOGQ3YzExY2I5NmM3NjJjYTk1NmE3NDE4NjBlNmQxMTI4NTIyMjZjNzZiYjI=`"
                                                        target="_blank"
                                                        >New Eviction Notice</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        :href="`https://platform.claris.com/form/430/36?ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}&Email307=${customer.Email}#s=bXN0XzJoQ0xFOWROaFVmNjlEbXBKTE1GTGVNSExabER1WUlGOjlhY2M1MmRiMWQ0ODJkZDJiZWZhMzc3OTZkNTc2ZDkyYjkxOGVhZDY0ZWRhMzI3MGZlZGNlN2VmNWRhYjdlMGM=`"
                                                        target="_blank"
                                                        >New Summary Eviction</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        :href="`https://platform.claris.com/form/430/37?ShortText304=${customer.AttnyID}&ShortText305=${customer.FirmName}&Email307=${customer.Email}#s=bXN0XzJjZVpLZVVnRmhGSnpQcWpRMzFCdW15QWI5MGJpVnV6OmQ5ZWVhYjEyYWEyODc3Y2FhNjAxOWRjYjA0MWI0YTdiZTIyMGZlN2M4ZTg5ZjMyNDM1MTdhNzA2ZGVmNmYzZjU=`"
                                                        target="_blank"
                                                        >New Small Claims
                                                        Complaint</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="pl-2 md:px-6 py-2 whitespace-nowrap"
                                        >
                                            <div
                                                class="flex items-center hover:text-indigo-500 hover:font-weight-bolder hover:cursor-pointer"
                                            >
                                                <div
                                                    class="text-med font-large"
                                                >
                                                    <a
                                                        :href="`https://platform.claris.com/form/430/38?ShortText305=${customer.FirmName}&Email307=${customer.Email}&ShortText304=${customer.AttnyID}#s=bXN0XzJjZWhTQWh5MVhRbW5JVFdJRkdhRncyd0pCajZNb1l5OjVkYWExZDc1YzdlNjBjZThjMWVjNGRlZDI5MmIxODY3NzYzYWZkZDRiNTBkNDNjYjg0NjA1MzhiY2NiOTczNzA=`"
                                                        target="_blank"
                                                        >New Writ (Small Claims
                                                        Court)</a
                                                    >
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

<script>
import { assertTSUnknownKeyword } from "@babel/types";

export default {
    name: "RightNav",
    props: {
        customers: Object,
        customer: Object,
        sixmoago: String,
    },
    data() {
        return {
            customer: {},
        };
    },
    methods: {
        assertTSUnknownKeyword,
        clickRow: function (customer_id) {
            let url = route("customer.detail", customer_id);
            this.$inertia.get(url);
        },
        getLink() {
            axios.get("/get_customer").then((response) => {
                this.customer = response.data;
                console.log(this.customer);
            });
        },
    },
    created() {
        this.getLink();
    },
};
</script>

<style scoped></style>
