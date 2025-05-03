<x-layouts.app :title="'Product Categories'">
    <flux:heading>Product Categories</flux:heading>
    <flux:description>Manage your product categories here</flux:description>
    <flux:separator variant="subtile" />

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <flux:input
            name="name"
            label="Name"
            placeholder="Enter Name"
            required
            class="mb-4"
            value="{{ old('name') }}"
        />

        <flux:input
            name="slug"
            label="Slug"
            placeholder="Enter Slug"
            required
            class="mb-4"
            value="{{ old('slug') }}"
        />

        <flux:input
            name="description"
            label="Description"
            placeholder="Enter Description"
            class="mb-4"
            value="{{ old('description') }}"
        />

        <flux:input
            name="image"
            label="Image"
            type="file"
            accept="image/*"
            class="mb-4"
        />

        <flux:button type="submit" variant="primary" class="mt-4">
            Save
        </flux:button>
    </form>
</x-layouts.app>
