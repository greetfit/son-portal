@extends('layouts.vertical', ['title' => 'Add Hotel', 'subTitle' => 'Hotels'])

@section('css')
    @vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
    <style>
        .thumb-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(110px,1fr));gap:.75rem}
        .thumb-card{position:relative;border:1px solid #e5e7eb;border-radius:.5rem;padding:.5rem;background:#fff}
        .thumb-card img{width:100%;height:90px;object-fit:cover;border-radius:.35rem}
        .thumb-meta{margin-top:.4rem;font-size:.8rem;display:flex;align-items:center;gap:.35rem}
        .badge-featured{position:absolute;top:.35rem;left:.35rem;background:#0d6efd;color:#fff;font-size:.65rem;padding:.15rem .35rem;border-radius:.35rem;display:none}
        .thumb-card.is-featured .badge-featured{display:inline-block}
        .featured-preview img{max-height:160px;border-radius:.5rem}

        /* Rooms repeater */
        .room-row{border:1px solid #e5e7eb;border-radius:.75rem;padding:1rem;background:#fff}
        .room-row + .room-row{margin-top:1rem}
        .room-row .row-actions{display:flex;gap:.5rem}
        .preset-badges .btn{padding:.15rem .45rem;font-size:.75rem}
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 ">
            <form method="POST" action="{{ route('hotels.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hotel Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- Name --}}
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="hotel-name" class="form-label">Hotel Name <span class="text-danger">*</span></label>
                                    <input type="text" id="hotel-name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- District --}}
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="hotel-district" class="form-label">District</label>
                                    <select class="form-control" data-choices name="district_id" id="hotel-district">
                                        <option value="">-- Select District --</option>
                                        @foreach ($districts as $d)
                                            <option value="{{ $d->id }}" @selected(old('district_id') == $d->id)>{{ $d->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('district_id') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- City (dependent) --}}
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="hotel-city" class="form-label">City</label>
                                    <select class="form-control" name="city_id" id="hotel-city" data-choices data-placeholder="-- Select City --">
                                        <option value="">-- Select City --</option>
                                    </select>
                                    @error('city_id') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="hotel-address" class="form-label">Address</label>
                                    <textarea class="form-control" id="hotel-address" name="address" rows="3" placeholder="Enter address">{{ old('address') }}</textarea>
                                    @error('address') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="hotel-phone" class="form-label">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text fs-20 px-2 py-0"><i class="ri-phone-line"></i></span>
                                        <input type="text" id="hotel-phone" name="phone" class="form-control" placeholder="+94 ..." value="{{ old('phone') }}">
                                    </div>
                                    @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Web --}}
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="hotel-website" class="form-label">Web</label>
                                    <div class="input-group">
                                        <span class="input-group-text fs-20 px-2 py-0"><i class="ri-global-line"></i></span>
                                        <input type="text" id="hotel-website" name="website" class="form-control" placeholder="www..." value="{{ old('website') }}">
                                    </div>
                                    @error('website') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="hotel-email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text fs-20 px-2 py-0"><i class="ri-mail-line"></i></span>
                                        <input type="text" id="hotel-email" name="email" class="form-control" placeholder="info@example.com" value="{{ old('email') }}">
                                    </div>
                                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Account Manager --}}
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="hotel-manager" class="form-label">Account Manager</label>
                                    <select class="form-control" id="hotel-manager" name="account_manager" data-choices data-placeholder="Select manager">
                                        <option value="">— Select —</option>
                                        @foreach ($users as $u)
                                            <option value="{{ $u->id }}" @selected(old('account_manager') == $u->id)>{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('account_manager') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Star Rating --}}
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="star-rating" class="form-label">Star Rating Review</label>
                                    <select class="form-control" id="star-rating" name="star_rating" data-choices data-placeholder="Select rating">
                                        <option value="">— Select —</option>
                                        @for ($i=1; $i<=5; $i++)
                                            <option value="{{ $i }}" @selected(old('star_rating') == (string)$i)>{{ $i }} {{ $i==1?'Star':'Stars' }}</option>
                                        @endfor
                                    </select>
                                    @error('star_rating') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Notes --}}
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="hotel-category-notes" class="form-label">Notes</label>
                                    <textarea class="form-control" id="hotel-category-notes" name="category_notes" rows="3" placeholder="Notes...">{{ old('category_notes') }}</textarea>
                                    @error('category_notes') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Hotel Photos (multiple) + choose one as featured --}}
                            <div class="col-lg-12">
                                <div class="col-lg-6 p-0">
                                    <div class="mb-3">
                                        <label class="form-label">Hotel Photos</label>
                                        <input type="file" id="hotel-photos" name="photos[]" class="form-control" accept="image/*" multiple>
                                        @error('photos') <div class="text-danger small">{{ $message }}</div> @enderror
                                        @error('photos.*') <div class="text-danger small">{{ $message }}</div> @enderror

                                        <input type="hidden" name="featured_from_gallery" id="featured-from-gallery" value="">
                                        <div class="thumb-grid mt-2" id="gallery-previews"></div>
                                        <small class="text-muted d-block mt-1">
                                            Tip: Click “Use as featured” on a thumbnail to mark it as featured.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            {{-- Amenities (multi) --}}
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="hotel-amenities" class="form-label">Amenities</label>
                                    <select class="form-control" id="hotel-amenities" name="amenities[]" data-choices multiple data-placeholder="Select amenities">
                                        @foreach ($amenities as $a)
                                            <option value="{{ $a->id }}" @selected(collect(old('amenities'))->contains($a->id))>{{ $a->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('amenities') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Categories (multi) --}}
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="hotel-categories" class="form-label">Categories</label>
                                    <select class="form-control" id="hotel-categories" name="categories[]" data-choices multiple data-placeholder="Select categories">
                                        @foreach ($categories as $c)
                                            <option value="{{ $c->id }}" @selected(collect(old('categories'))->contains($c->id))>{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('categories') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Active switch --}}
                            <div class="col-lg-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">Active</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ROOMS REPEATER --}}
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Rooms for this Hotel</h4>
                        <button type="button" class="btn btn-sm btn-primary" id="add-room-btn">
                            <i class="ri-add-line me-1"></i> Add Room
                        </button>
                    </div>
                    <div class="card-body">
                        <div id="rooms-wrap"></div>

                        {{-- validation errors for rooms (optional generic) --}}
                        @if ($errors->has('rooms') || collect($errors->keys())->first(fn($k)=>str_starts_with($k,'rooms.')) )
                            <div class="text-danger small mt-2">Please fix the room fields marked in red.</div>
                        @endif
                    </div>
                </div>

                {{-- Submit --}}
                <div class="mb-3 rounded mt-3">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-primary w-100">Create Hotel</button>
                        </div>
                        <div class="col-lg-2">
                            <a href="{{ route('hotels.index') }}" class="btn btn-danger w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Template for a room row --}}
    <template id="room-row-template">
        <div class="room-row">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0">Room <span class="room-number">#1</span></h6>
                <div class="row-actions">
                    <button type="button" class="btn btn-sm btn-outline-danger remove-room">
                        <i class="ri-delete-bin-6-line"></i> Remove
                    </button>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Room Type</label>
                    <select class="form-control room-type" data-choices>
                        <option value="">— Select —</option>
                        @foreach ($roomTypes as $rt)
                            <option value="{{ $rt->id }}">{{ $rt->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback d-block d-none rt-error"></div>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Room Category</label>
                    <select class="form-control room-category" data-choices>
                        <option value="">— Select —</option>
                        @foreach ($roomCategories as $rc)
                            <option value="{{ $rc->id }}">{{ $rc->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback d-block d-none rc-error"></div>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Total Rooms</label>
                    <input type="number" class="form-control total-rooms" min="1" value="1">
                </div>

                <div class="col-md-6">
                    <label class="form-label d-flex align-items-center justify-content-between">
                        <span>Base Occupancy</span>
                        <span class="preset-badges">
                            <button class="btn btn-outline-secondary btn-sm preset" data-val="1" type="button">SGL (1)</button>
                            <button class="btn btn-outline-secondary btn-sm preset" data-val="2" type="button">DBL (2)</button>
                            <button class="btn btn-outline-secondary btn-sm preset" data-val="3" type="button">TPL (3)</button>
                            <button class="btn btn-outline-secondary btn-sm preset" data-val="4" type="button">Family (4)</button>
                        </span>
                    </label>
                    <input type="number" class="form-control base-occ" min="1" value="2">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Max Occupancy</label>
                    <input type="number" class="form-control max-occ" min="1" value="3">
                </div>
            </div>

            {{-- Hidden inputs (names assigned by JS) --}}
            <input type="hidden" class="name-room-type" name="">
            <input type="hidden" class="name-room-category" name="">
            <input type="hidden" class="name-total-rooms" name="">
            <input type="hidden" class="name-base-occ" name="">
            <input type="hidden" class="name-max-occ" name="">
        </div>
    </template>
@endsection

@section('script-bottom')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    @vite(['node_modules/choices.js/public/assets/scripts/choices.min.js', 'resources/js/components/form-fileupload.js'])

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // ====== Init Choices for existing selects ======
        const choicesMap = {};
        document.querySelectorAll('[data-choices]').forEach(function (el) {
            choicesMap[el.id || Math.random().toString(36).slice(2)] = new Choices(el, {
                shouldSort: false,
                searchEnabled: true,
                removeItemButton: el.hasAttribute('multiple'),
                placeholder: true,
                placeholderValue: el.getAttribute('data-placeholder') || 'Select an option'
            });
        });

        // ====== District -> City cascade ======
        const districtSelect = document.getElementById('hotel-district');
        const cityEl = document.getElementById('hotel-city');
        const cityChoices = Object.values(choicesMap).find(c => c.passedElement.element === cityEl);

        async function loadCities(districtId, preselectCityId = null) {
            if (!cityChoices) return;
            cityChoices.clearStore();
            cityChoices.setChoices([{ value: '', label: '-- Select City --', selected: !preselectCityId }], 'value', 'label', true);
            if (!districtId) return;
            try {
                const { data } = await axios.get(`/district/${districtId}/cities`);
                cityChoices.setChoices(
                    data.map(city => ({
                        value: city.id,
                        label: city.name_en,
                        selected: preselectCityId && String(preselectCityId) === String(city.id)
                    })),
                    'value','label',true
                );
            } catch (e) {
                console.error(e);
                cityChoices.setChoices([{ value: '', label: 'Failed to load. Try again.', disabled: true }], 'value','label',true);
            }
        }
        districtSelect?.addEventListener('change', function(){ loadCities(this.value, null); });
        const oldDistrictId = @json(old('district_id'));
        const oldCityId = @json(old('city_id'));
        if (oldDistrictId) loadCities(oldDistrictId, oldCityId);

        // ====== Gallery previews / featured selection ======
        const galleryInput = document.getElementById('hotel-photos');
        const galleryWrap  = document.getElementById('gallery-previews');
        const featuredFromGallery = document.getElementById('featured-from-gallery');

        function renderGallery(files){
            galleryWrap.innerHTML = '';
            Array.from(files).forEach((file, idx) => {
                if(!file.type.startsWith('image/')) return;
                const url = URL.createObjectURL(file);
                const card = document.createElement('div');
                card.className = 'thumb-card';
                card.innerHTML = `
                    <span class="badge-featured">Featured</span>
                    <img src="${url}" alt="photo-${idx}">
                    <div class="thumb-meta">
                        <input type="radio" id="feat-${idx}" name="feat-radio" value="${idx}">
                        <label for="feat-${idx}" class="mb-0">Use as featured</label>
                    </div>`;
                galleryWrap.appendChild(card);
                const radio = card.querySelector('input[type="radio"]');
                radio.addEventListener('change', function(){
                    featuredFromGallery.value = String(idx);
                    document.querySelectorAll('.thumb-card').forEach(el => el.classList.remove('is-featured'));
                    card.classList.add('is-featured');
                });
            });
        }
        galleryInput?.addEventListener('change', function(){ featuredFromGallery.value=''; renderGallery(this.files||[]); });

        // ====== Rooms repeater ======
        const roomsWrap = document.getElementById('rooms-wrap');
        const tmpl = document.getElementById('room-row-template');
        const addBtn = document.getElementById('add-room-btn');
        let roomIndex = 0;

        function refreshNumbers(){
            roomsWrap.querySelectorAll('.room-row').forEach((row, i)=>{
                row.querySelector('.room-number').textContent = `#${i+1}`;
            });
            // hide remove if only one
            const rows = roomsWrap.querySelectorAll('.room-row');
            rows.forEach(r => r.querySelector('.remove-room').disabled = (rows.length===1));
        }

        function initChoicesOn(row){
            row.querySelectorAll('select[data-choices]').forEach(function(el){
                new Choices(el, { shouldSort:false, searchEnabled:true, placeholder:true });
            });
        }

        function setNames(row, idx){
            row.querySelector('.name-room-type').setAttribute('name', `rooms[${idx}][room_type_id]`);
            row.querySelector('.name-room-category').setAttribute('name', `rooms[${idx}][room_category_id]`);
            row.querySelector('.name-total-rooms').setAttribute('name', `rooms[${idx}][total_rooms]`);
            row.querySelector('.name-base-occ').setAttribute('name', `rooms[${idx}][base_occupancy]`);
            row.querySelector('.name-max-occ').setAttribute('name', `rooms[${idx}][max_occupancy]`);
        }

        function wireDataSync(row){
            const rtSel = row.querySelector('.room-type');
            const rcSel = row.querySelector('.room-category');
            const tot   = row.querySelector('.total-rooms');
            const base  = row.querySelector('.base-occ');
            const maxo  = row.querySelector('.max-occ');

            const rtHidden = row.querySelector('.name-room-type');
            const rcHidden = row.querySelector('.name-room-category');
            const totHidden= row.querySelector('.name-total-rooms');
            const baseHidden=row.querySelector('.name-base-occ');
            const maxHidden = row.querySelector('.name-max-occ');

            const syncAll = ()=>{
                rtHidden.value = rtSel.value || '';
                rcHidden.value = rcSel.value || '';
                totHidden.value = tot.value || 1;
                baseHidden.value = base.value || 1;
                maxHidden.value = maxo.value || base.value || 1;
            };
            ['change','input'].forEach(ev=>{
                rtSel.addEventListener(ev, syncAll);
                rcSel.addEventListener(ev, syncAll);
                tot.addEventListener(ev, syncAll);
                base.addEventListener(ev, e=>{ 
                    if (parseInt(maxo.value||0) < parseInt(base.value||0)) maxo.value = base.value;
                    syncAll();
                });
                maxo.addEventListener(ev, syncAll);
            });
            syncAll();

            // Presets for occupancy
            row.querySelectorAll('.preset').forEach(btn=>{
                btn.addEventListener('click', ()=>{
                    const val = btn.dataset.val;
                    base.value = val;
                    if(parseInt(maxo.value||0) < parseInt(val)) maxo.value = val;
                    syncAll();
                });
            });
        }

        function addRoomRow(prefill){
            const node = tmpl.content.cloneNode(true);
            const row  = node.querySelector('.room-row');
            roomsWrap.appendChild(row);
            setNames(row, roomIndex++);
            initChoicesOn(row);
            wireDataSync(row);

            if (prefill){
                // set values after Choices is ready
                if (prefill.room_type_id)  row.querySelector('.room-type').value = prefill.room_type_id;
                if (prefill.room_category_id) row.querySelector('.room-category').value = prefill.room_category_id;
                if (prefill.total_rooms) row.querySelector('.total-rooms').value = prefill.total_rooms;
                if (prefill.base_occupancy) row.querySelector('.base-occ').value = prefill.base_occupancy;
                if (prefill.max_occupancy) row.querySelector('.max-occ').value = prefill.max_occupancy;
                // trigger sync
                row.dispatchEvent(new Event('input', {bubbles:true}));
            }

            row.querySelector('.remove-room').addEventListener('click', function(){
                row.remove();
                refreshNumbers();
            });

            refreshNumbers();
        }

        addBtn.addEventListener('click', ()=> addRoomRow());

        // Load old rooms on validation error, else add one row by default
        const oldRooms = @json(old('rooms', []));
        if (Array.isArray(oldRooms) && oldRooms.length){
            oldRooms.forEach(r => addRoomRow(r));
        } else {
            addRoomRow({ base_occupancy: 2, max_occupancy: 3, total_rooms: 1 });
        }
    });
    </script>
@endsection
