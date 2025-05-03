<x-layouts.app : title="Product Categories">
    <flux:heading>Product Categories</flux:heading>
    <flux:description>Manage your Product categories hire</flux:description>
    <flux:separator variant="subtile"/>

    <div class="mt-4 mb-4">
        <flux:button 
        icon="plus"
        variant="primary"
        href="{{ route('categories.create') }}">Create New Category</flux:button>
    </div>

    <table class="min-w-full divide-y divide-gray-200 border border-gray-300 shadow-sm">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$category->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$category->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$category->slug}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$category->description}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$category->created_at}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <!-- Add action buttons here -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    
</x-layouts.app>