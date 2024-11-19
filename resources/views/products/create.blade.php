<x-app-layout>
    <div class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Create Product</h1>

        <div class="bg-white shadow-md rounded-lg p-8">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Product Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none @error('name') border-red-500 @enderror" required>

                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Product Description</label>
                    <textarea name="description" id="description"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none @error('description') border-red-500 @enderror"
                        rows="4">{{ old('description') }}</textarea>

                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">Product Price</label>
                    <input type="number" name="price" id="price" step="0.01" value="{{ old('price') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none @error('price') border-red-500 @enderror" required>

                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">Product Image</label>
                    <input type="file" name="image" id="image"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200 focus:outline-none @error('image') border-red-500 @enderror">

                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('products.index') }}"
                        class="bg-white text-black font-semibold px-4 py-1 border border-red-300 rounded-lg hover:bg-red-500 hover:text-white transition sm:px-6 sm:py-2 sm:text-base">
                        Cancel
                    </a>
                    <button type="submit"
                        class="bg-blue-600 text-white font-semibold px-4 py-1 rounded-lg hover:bg-blue-700 transition duration-200 sm:px-6 sm:py-2 sm:text-base">
                        Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
