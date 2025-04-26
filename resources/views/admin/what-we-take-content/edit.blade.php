@extends('adminpanel')

@section('content')
    <div class=" admin-container">
        <h1>Edit What We Take Content</h1>
        <form action="{{ route('admin.what-we-take-content.update', $whatWeTakeContent) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="section">Section</label>
                <select name="section" id="section" class="form-control @error('section') is-invalid @enderror" required onchange="toggleFields(this.value)">
                    <option value="what-we-take-title" {{ $whatWeTakeContent->section === 'what-we-take-title' ? 'selected' : '' }}>What We Take Title</option>
                    <option value="item-cards" {{ $whatWeTakeContent->section === 'item-cards' ? 'selected' : '' }}>Item Cards</option>
                    <option value="accordion-title" {{ $whatWeTakeContent->section === 'accordion-title' ? 'selected' : '' }}>Accordion Title</option>
                    <option value="accordion-content" {{ $whatWeTakeContent->section === 'accordion-content' ? 'selected' : '' }}>Accordion Content</option>
                    <option value="exceptions" {{ $whatWeTakeContent->section === 'exceptions' ? 'selected' : '' }}>Exceptions</option>
                </select>
                @error('section')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Standard Fields for what-we-take-title, accordion-title, exceptions -->
            <div id="standard-fields" style="display: {{ in_array($whatWeTakeContent->section, ['what-we-take-title', 'accordion-title', 'exceptions']) ? 'block' : 'none' }};">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $whatWeTakeContent->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content"  id="rich-text-editor" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $whatWeTakeContent->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                    @if ($whatWeTakeContent->image)
                        <img src="{{ asset('storage/' . $whatWeTakeContent->image) }}" alt="{{ $whatWeTakeContent->title }}" style="max-width: 100px; margin-top: 10px;">
                    @endif
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Item Cards Fields -->
            <div id="item-cards-fields" style="display: {{ $whatWeTakeContent->section === 'item-cards' ? 'block' : 'none' }};">
                @php
                    $itemCardsData = $whatWeTakeContent->section === 'item-cards' && $whatWeTakeContent->content ? json_decode($whatWeTakeContent->content, true) : [];
                @endphp
                @foreach (['refrigerators', 'mattresses', 'furniture', 'televisions'] as $key)
                    <div class="card mb-3">
                        <div class="card-header">Item Card: {{ ucfirst($key) }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="item_cards_{{ $key }}_title">Title</label>
                                <input type="text" name="item_cards[{{ $key }}][title]" id="item_cards_{{ $key }}_title" class="form-control @error("item_cards.$key.title") is-invalid @enderror" value="{{ old("item_cards.$key.title", $itemCardsData[$key]['title'] ?? '') }}">
                                @error("item_cards.$key.title")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="item_cards_{{ $key }}_items">Items</label>
                                <textarea name="item_cards[{{ $key }}][items]" id="item_cards_{{ $key }}_items" class="form-control @error("item_cards.$key.items") is-invalid @enderror" rows="5">{{ old("item_cards.$key.items", $itemCardsData[$key]['items'] ?? '') }}</textarea>
                                @error("item_cards.$key.items")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="item_cards_{{ $key }}_image">Image</label>
                                <input type="file" name="item_cards[{{ $key }}][image]" id="item_cards_{{ $key }}_image" class="form-control-file @error("item_cards.$key.image") is-invalid @enderror">
                                <input type="hidden" name="item_cards[{{ $key }}][existing_image]" value="{{ $itemCardsData[$key]['image'] ?? '' }}">
                                @if (isset($itemCardsData[$key]['image']) && $itemCardsData[$key]['image'])
                                    <img src="{{ asset('storage/' . $itemCardsData[$key]['image']) }}" alt="{{ $itemCardsData[$key]['title'] }}" style="max-width: 100px; margin-top: 10px;">
                                @endif
                                @error("item_cards.$key.image")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Accordion Content Fields -->
            <div id="accordion-content-fields" style="display: {{ $whatWeTakeContent->section === 'accordion-content' ? 'block' : 'none' }};">
                @php
                    $accordionData = $whatWeTakeContent->section === 'accordion-content' && $whatWeTakeContent->content ? json_decode($whatWeTakeContent->content, true) : [];
                @endphp
                @foreach (['appliances', 'household', 'office-cleanouts', 'furniture', 'mattress-springboards', 'renovation-construction', 'refrigerators-freezers', 'televisions-tv', 'home-cleanouts', 'junk-disposal', 'exercise', 'electronics', 'recreation', 'bbq-grills', 'pianos', 'hot-tubs', 'tires-rubber'] as $key)
                    <div class="card mb-3">
                        <div class="card-header">Accordion Item: {{ ucwords(str_replace('-', ' ', $key)) }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="accordion_items_{{ $key }}_title">Title</label>
                                <input type="text" name="accordion_items[{{ $key }}][title]" id="accordion_items_{{ $key }}_title" class="form-control @error("accordion_items.$key.title") is-invalid @enderror" value="{{ old("accordion_items.$key.title", $accordionData[$key]['title'] ?? '') }}">
                                @error("accordion_items.$key.title")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="accordion_items_{{ $key }}_content">Content</label>
                                <textarea name="accordion_items[{{ $key }}][content]" id="accordion_items_{{ $key }}_content" class="form-control @error("accordion_items.$key.content") is-invalid @enderror" rows="5">{{ old("accordion_items.$key.content", $accordionData[$key]['content'] ?? '') }}</textarea>
                                @error("accordion_items.$key.content")
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
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