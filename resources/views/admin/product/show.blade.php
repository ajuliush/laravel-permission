<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 flex justify-between items-center">
                    <h1
                        class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 block sm:inline-block flex">
                        {{ __('Show product') }}</h1>
                    <a href="{{ route('product.index') }}"
                        class="px-4 py-2 text-white mr-4 bg-blue-600">{{ __('Back to all product') }}</a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden" id="yourDivId">
                    <div class="py-2">
                        <label for="name"
                            class="block font-medium text-sm text-gray-700{{ $errors->has('name') ? ' text-red-400' : '' }}">{{ __('Name') }}</label>
                        <input id="name"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('name') ? ' border-red-400' : '' }}"
                            type="text" name="name" value="{{ old('name', $product->name) }}" readonly />
                    </div>
                    <div class="py-2">
                        <label for="description"
                            class="block font-medium text-sm text-gray-700{{ $errors->has('description') ? ' text-red-400' : '' }}">{{ __('Description') }}</label>
                        <input id="description"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('description') ? ' border-red-400' : '' }}"
                            type="text" name="description" value="{{ old('description', $product->description) }}"
                            readonly />
                    </div>
                    <div class="py-2">
                        <label for="price"
                            class="block font-medium text-sm text-gray-700{{ $errors->has('price') ? ' text-red-400' : '' }}">{{ __('Price') }}</label>
                        <input id="price"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('price') ? ' border-red-400' : '' }}"
                            type="number" name="price" value="{{ old('price', $product->price) }}" readonly />
                    </div>
                    <div class="py-2">
                        <label for="quantity"
                            class="block font-medium text-sm text-gray-700{{ $errors->has('quantity') ? ' text-red-400' : '' }}">{{ __('Quantity') }}</label>
                        <input id="quantity"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('quantity') ? ' border-red-400' : '' }}"
                            type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}"
                            readonly />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
     window.onload = function() {
    // Print specific div
    var divToPrint = document.getElementById("yourDivId");
    var printWindow = window.open('height=500,width=500');
    printWindow.document.write('<html><head><title>Print</title>');
    printWindow.document.write('<style>@media print { body { margin: 0; padding: 0; } .print-content { width: 100%; } .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; } .block { display: block; } .font-medium { font-weight: 500; } .text-sm { font-size: 0.875rem; } .text-gray-700 { color: #4b5563; } .text-red-400 { color: #f87171; } .rounded-md { border-radius: 0.375rem; } .shadow-sm { box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); } .border-gray-300 { border-color: #e5e7eb; } .focus:border-indigo-300 { --tw-border-opacity: 1; border-color: rgba(66, 153, 225, var(--tw-border-opacity)); border-color: #93c5fd; } .focus:ring { --tw-ring-opacity: 1; ring-color: rgba(66, 153, 225, var(--tw-ring-opacity)); ring-color: #93c5fd; } .focus:ring-opacity-50 { --tw-ring-opacity: 0.5; } .mt-1 { margin-top: 0.25rem; } .w-full { width: 100%; } .border-red-400 { border-color: #f87171; } }</style>');
    printWindow.document.write('</head><body>'); // Start writing the content of the new window
    printWindow.document.write('<div class="print-content">' + divToPrint.innerHTML + '</div>'); // Write the content of the specific <div> element
    printWindow.document.write('</body></html>'); // Close the HTML tags
    printWindow.document.close(); // Close the document
    printWindow.onload = function() {
        printWindow.print(); // Print the new window
        printWindow.close(); // Close the new window after printing
    };
};
    </script>
</x-app-layout>
