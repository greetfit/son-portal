@php
    $hotel = $hotel ?? null;
@endphp

<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Name <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control" required
               value="{{ old('name', $hotel->name ?? '') }}">
        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control"
               value="{{ old('city', $hotel->city ?? '') }}">
        @error('city') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-12">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control"
               value="{{ old('address', $hotel->address ?? '') }}">
        @error('address') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control"
               value="{{ old('phone', $hotel->phone ?? '') }}">
        @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control"
               value="{{ old('email', $hotel->email ?? '') }}">
        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Account Manager (User ID)</label>
        <input type="number" name="account_manager" class="form-control"
               value="{{ old('account_manager', $hotel->account_manager ?? '') }}">
        @error('account_manager') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-12">
        <label class="form-label">Category Notes</label>
        <textarea name="category_notes" rows="3" class="form-control">{{ old('category_notes', $hotel->category_notes ?? '') }}</textarea>
        @error('category_notes') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-12 form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active"
               value="1" {{ old('is_active', $hotel->is_active ?? 1) ? 'checked' : '' }}>
        <label class="form-check-label" for="is_active">Active</label>
    </div>
</div>
