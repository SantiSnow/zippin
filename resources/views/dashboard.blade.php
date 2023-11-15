<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-xs text-gray-700 uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Customer name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Address (Billing)
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    City/State
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Quantity
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment method
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                        {{ $order->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $order->address }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $order->city }}, {{ $order->state }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $order->products_count }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ ($order->payment_method==1) ? "Credit Card" : "Store Credits" }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($order->approved==1)
                                            <span class="btn btn-success">
                                                Approved
                                            </span>
                                        @else
                                            <span class="btn btn-danger">
                                                Declined
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
