<x-app-layout>
    <div class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Product List</h1>

        <div class="flex justify-end mb-6">
            <a href="{{ route('products.create') }}"
                class="bg-blue-600 text-white font-semibold px-6 py-2 rounded hover:bg-blue-700 transition duration-200">
                Create Product
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @if ($products->isEmpty())
                <div class="p-6 text-center">
                    <p class="text-gray-500 text-lg">No products available.</p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-gray-50 border-b">
                            <tr>
                                <th class="text-left px-6 py-3 text-sm font-medium text-gray-600">Name</th>
                                <th class="text-left px-6 py-3 text-sm font-medium text-gray-600">Price</th>
                                <th class="text-left px-6 py-3 text-sm font-medium text-gray-600">Image</th>
                                <th class="text-left px-6 py-3 text-sm font-medium text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 text-gray-800 text-sm">{{ $product->name }}</td>
                                    <td class="px-6 py-4 text-gray-800 text-sm">
                                        LKR {{ number_format($product->price, 2) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                                class="h-16 w-16 object-cover rounded shadow-sm">
                                        @else
                                            <span class="text-gray-500 italic text-sm">No image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-3">
                                            <a href="{{ route('products.show', $product) }}"
                                                class="inline-block bg-green-100 text-green-600 font-semibold text-sm px-4 py-2 rounded hover:bg-green-200 transition duration-200">
                                                view
                                            </a>
                                            <a href="{{ route('products.edit', $product) }}"
                                                class="inline-block bg-blue-100 text-blue-600 font-semibold text-sm px-4 py-2 rounded hover:bg-blue-200 transition duration-200">
                                                Edit
                                            </a>
                                            <div x-data="{ showModal: false }">
                                                <button @click="showModal = true" type="button"
                                                    class="inline-block bg-red-100 text-red-600 font-semibold text-sm px-4 py-2 rounded hover:bg-red-200 transition duration-200">
                                                    Delete
                                                </button>
                                                <x-delete-modal :product="$product" x-show="showModal" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
