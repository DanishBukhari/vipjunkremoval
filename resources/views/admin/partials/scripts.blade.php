<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Standard content field
        if (document.getElementById('content')) {
            CKEDITOR.replace('content');
        }
        // Item cards items
        @foreach (['refrigerators', 'mattresses', 'furniture', 'televisions'] as $key)
            if (document.getElementById('item_cards_{{ $key }}_items')) {
                CKEDITOR.replace('item_cards_{{ $key }}_items');
            }
        @endforeach
        // Accordion items content
        @foreach (['appliances', 'household', 'office-cleanouts', 'furniture', 'mattress-springboards', 'renovation-construction', 'refrigerators-freezers', 'televisions-tv', 'home-cleanouts', 'junk-disposal', 'exercise', 'electronics', 'recreation', 'bbq-grills', 'pianos', 'hot-tubs', 'tires-rubber'] as $key)
            if (document.getElementById('accordion_items_{{ $key }}_content')) {
                CKEDITOR.replace('accordion_items_{{ $key }}_content');
            }
        @endforeach
    });
</script>