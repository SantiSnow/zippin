<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Orders
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative overflow-x-auto p-4">
                    <div
                        class="w-full max-w-sm p-8 bg-white border border-gray-200 rounded-lg shadow p-12">
                        <h5 class="mb-4 text-xl font-medium text-gray-500">{{ $order->name }}</h5>
                        <div class="flex items-baseline text-gray-900 dark:text-white mb-4">
                            <span class="ms-1 text-xl font-normal text-gray-500 ">{{ $order->address }}, {{ $order->city }}, {{ $order->state }}</span>
                        </div>
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex mb-4 items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Total products: {{ $order->products_count }}</span>
                            </li>

                            <li class="flex mb-4 items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Payment: {{ ($order->payment_method==1) ? "Credit Card" : "Store Credit" }}</span>
                            </li>

                            <li class="flex mb-4 items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Status: {{ ($order->approved==1) ? "Approved" : "Rejected" }}</span>
                            </li>


                            @if($order->shipping_address)
                                <div class="flex items-baseline text-gray-900 dark:text-white mb-4 mt-8">
                                    <span class="ms-1 text-xl font-normal text-gray-500 ">Shipping Address:</span>
                                </div>
                                <li class="flex mb-4">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $order->shipping_address->address }}</span>
                                </li>
                            @endif

                            <h5 class="mb-4 mt-8 text-l font-medium text-gray-500">Products:</h5>
                            @foreach($order->products as $product)

                                <li>
                                    - {{ $product->name }}
                                </li>

                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
