<div x-show="showModal" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
    <div class="fixed inset-0 bg-black opacity-50"></div>
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6 relative z-50">
            <h3 class="text-lg font-bold mb-4">Confirm Deletion</h3>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this product? This action cannot be undone.</p>
            <div class="flex justify-end space-x-3">
                <button @click="showModal = false" class="px-4 py-2 text-gray-600 bg-gray-100 rounded hover:bg-gray-200 transition duration-200">
                    Cancel
                </button>
                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
