@extends('adminpanel')

@section('content')
    <div class="admin-container">
        <h1>Add New What We Take Content</h1>
        <form action="{{ route('admin.what-we-take-content.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="section">Section</label>
                <select name="section" id="section" class="form-control @error('section') is-invalid @enderror" required onchange="toggleFields(this.value)">
                    <option value="what-we-take-title">What We Take Title</option>
                    <option value="item-cards">Item Cards</option>
                    <option value="accordion-title">Accordion Title</option>
                    <option value="accordion-content">Accordion Content</option>
                    <option value="exceptions">Exceptions</option>
                </select>
                @error('section')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Standard Fields for what-we-take-title, accordion-title, exceptions -->
            <div id="standard-fields" style="display: none;">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content"  id="rich-text-editor" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Item Cards Fields -->
            <div id="item-cards-fields" style="display: none;">
                @foreach (['refrigerators', 'mattresses', 'furniture', 'televisions'] as $key)
                    <div class="card mb-3">
                        <div class="card-header">Item Card: {{ ucfirst($key) }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="item_cards_{{ $key }}_title">Title</label>
                                <input type="text" name="item_cards[{{ $key }}][title]" id="item_cards_{{ $key }}_title" class="form-control @error("item_cards.$key.title") is-invalid @enderror" value="{{ old("item_cards.$key.title") }}">
                                @error("item_cards.$key.title")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="item_cards_{{ $key }}_items">Items</label>
                                <textarea name="item_cards[{{ $key }}][items]" id="item_cards_{{ $key }}_items" class="form-control @error("item_cards.$key.items") is-invalid @enderror" rows="5">{{ old("item_cards.$key.items") }}</textarea>
                                @error("item_cards.$key.items")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="item_cards_{{ $key }}_image">Image</label>
                                <input type="file" name="item_cards[{{ $key }}][image]" id="item_cards_{{ $key }}_image" class="form-control-file @error("item_cards.$key.image") is-invalid @enderror">
                                @error("item_cards.$key.image")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Accordion Content Fields -->
            <div id="accordion-content-fields" style="display: none;">
                @foreach (['appliances', 'household', 'office-cleanouts', 'furniture', 'mattress-springboards', 'renovation-construction', 'refrigerators-freezers', 'televisions-tv', 'home-cleanouts', 'junk-disposal', 'exercise', 'electronics', 'recreation', 'bbq-grills', 'pianos', 'hot-tubs', 'tires-rubber'] as $key)
                    <div class="card mb-3">
                        <div class="card-header">Accordion Item: {{ ucwords(str_replace('-', ' ', $key)) }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="accordion_items_{{ $key }}_title">Title</label>
                                <input type="text" name="accordion_items[{{ $key }}][title]" id="accordion_items_{{ $key }}_title" class="form-control @error("accordion_items.$key.title") is-invalid @enderror" value="{{ old("accordion_items.$key.title") }}">
                                @error("accordion_items.$key.title")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="accordion_items_{{ $key }}_content">Content</label>
                                <textarea name="accordion_items[{{ $key }}][content]" id="accordion_items_{{ $key }}_content" class="form-control @error("accordion_items.$key.content") is-invalid @enderror" rows="5">{{ old("accordion_items.$key.content") }}</textarea>
                                @error("accordion_items.$key.content")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.what-we-take-content.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    @section('scripts')
        <!-- <script>
            function toggleFields(section) {
                document.getElementById('standard-fields').style.display = ['what-we-take-title', 'accordion-title', 'exceptions'].includes(section) ? 'block' : 'none';
                document.getElementById('item-cards-fields').style.display = section === 'item-cards' ? 'block' : 'none';
                document.getElementById('accordion-content-fields').style.display = section === 'accordion-content' ? 'block' : 'none';
            }
        </script> -->
        @include('admin.partials.scripts')
    @endsection
@endsection