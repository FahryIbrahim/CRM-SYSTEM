<x-layouts.app title="Edit Client">
    <div class="container">
        <h1>Edit Client</h1>
        <form method="POST" action="{{ route('clients.update', $client) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror"
                    value="{{ old('company_name', $client->company_name) }}" required>
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="vat_number" class="form-label">VAT Number</label>
                <input type="text" name="vat_number" class="form-control @error('vat_number') is-invalid @enderror"
                    value="{{ old('vat_number', $client->vat_number) }}" required>
                @error('vat_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" required>{{ old('address', $client->address) }}</textarea>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Client</button>
        </form>
    </div>
</x-layouts.app>
