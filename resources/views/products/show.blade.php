<x-app-layout>
    <div class="container mx-auto py-12 px-6">
        <div class="bg-white shadow-xl rounded-lg p-8 max-w-4xl mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">View Product</h1>

                <div class="flex space-x-6">
                    <a href="{{ route('products.edit', $product->id) }}"
                        class="text-blue-600 hover:text-blue-800 transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                        </svg>
                    </a>

                    <div x-data="{ showModal: false }">
                        <button @click="showModal = true" type="button"
                            class="text-red-600 hover:text-red-800 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </button>
                        <x-delete-modal :product="$product" x-show="showModal" />
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-6">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                        class="h-80 w-full object-cover rounded-lg shadow-lg">
                @else
                    <span class="text-gray-500 italic">No image available</span>
                @endif
            </div>

            <p class="text-2xl font-medium text-gray-900 mb-3">{{ $product->name }}</p>
            <p class="text-gray-700 text-lg mb-5">{{ $product->description }}</p>
            <p class="text-lg font-semibold text-gray-800">LKR {{ number_format($product->price, 2) }}</p>
        </div>
    </div>
</x-app-layout>
