@extends('layouts.vertical', ['title' => 'Add User', 'subTitle' => 'User Management'])

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-sm">
                                <input type="password" id="password" name="password" class="form-control" required>
                                <button class="btn btn-outline-gray border toggle-password" type="button"
                                    data-target="#password" aria-label="Show password">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="input-group input-group-sm">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" required>
                                <button class="btn btn-outline-gray border toggle-password" type="button"
                                    data-target="#password_confirmation" aria-label="Show password">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select name="role_id" class="form-select" required>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @selected(old('id', $user->id ?? null) == $role->id)>
                                        {{ ucfirst($role->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-password').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const input = document.querySelector(btn.dataset.target);
            if (!input) return;

            const isHidden = input.type === 'password';
            input.type = isHidden ? 'text' : 'password';
            btn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');

            const icon = btn.querySelector('i');
            if (icon) {
                // eye = visible, eye-off = hidden
                icon.classList.toggle('ri-eye-line', isHidden);
                icon.classList.toggle('ri-eye-off-line', !isHidden);
            }
        });
    });
});
</script>

