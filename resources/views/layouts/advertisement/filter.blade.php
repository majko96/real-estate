<div class="filter collapse d-md-block" id="filterCollapse">
    <div class="d-flex justify-content-between mt-2">
        <div>
            <span class="fw-bold">
                Filters
            </span>
        </div>
        <div class="d-flex align-items-center gap-1">
            <small>
                <a href="#">
                    Reset filters
                </a>
            </small>
            <div class="badge bg-secondary">
                5
            </div>
        </div>
    </div>
    <div class="mt-3">
        Property Type
        <ul class="list-unstyled">
            <li>
                <input type="checkbox" id="house" name="property_type" value="house" class="me-2">
                <label for="house">House</label>
            </li>
            <li>
                <input type="checkbox" id="apartment" name="property_type" value="apartment" class="me-2">
                <label for="apartment">Apartment</label>
            </li>
            <li>
                <input type="checkbox" id="room" name="property_type" value="room" class="me-2">
                <label for="room">Room</label>
            </li>
            <li>
                <input type="checkbox" id="townhall" name="property_type" value="townhall" class="me-2">
                <label for="townhall">Townhall</label>
            </li>
            <li>
                <input type="checkbox" id="parking" name="property_type" value="parking" class="me-2">
                <label for="parking">Parking</label>
            </li>
        </ul>
    </div>
    <div class="mt-3">
        Style of Home
        <ul class="list-unstyled">
            <li>
                <input type="checkbox" id="a-frame" name="style_of_house" value="a-frame" class="me-2">
                <label for="a-frame">A-Frame</label>
            </li>
            <li>
                <input type="checkbox" id="bungalow" name="style_of_house" value="bungalow" class="me-2">
                <label for="bungalow">Bungalow</label>
            </li>
            <li>
                <input type="checkbox" id="cottage" name="style_of_house" value="cottage" class="me-2">
                <label for="cottage">Cottage</label>
            </li>
            <li>
                <input type="checkbox" id="dome" name="style_of_house" value="dome" class="me-2">
                <label for="dome">Dome</label>
            </li>
            <li>
                <input type="checkbox" id="spanish" name="style_of_house" value="spanish" class="me-2">
                <label for="spanish">Spanish</label>
            </li>
        </ul>
    </div>
    <div class="price-range mt-3">
        <div class="w-100">
            <label for="min-price" class="form-label">Min. Price</label>
            <select id="min-price" name="min_price" class="form-select w-100">
                <option value="10000">10,000</option>
                <option value="20000">20,000</option>
                <option value="30000">30,000</option>
                <option value="40000">40,000</option>
                <option value="50000">50,000</option>
            </select>
        </div>
        <div class="w-100">
            <label for="max-price" class="form-label">Max. Price</label>
            <select id="max-price" name="max_price" class="form-select w-100">
                <option value="">Any</option>
                <option value="100000">100,000</option>
                <option value="200000">200,000</option>
                <option value="300000">300,000</option>
                <option value="400000">400,000</option>
                <option value="500000">500,000</option>
            </select>
        </div>
    </div>
    <div class="price-range mt-3">
        <div class="w-100">
            <label for="min-price" class="form-label">Bedroom</label>
            <select id="min-price" name="min_price" class="form-select w-100">
                <option value="">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="w-100">
            <label for="max-price" class="form-label">Bathroom</label>
            <select id="max-price" name="max_price" class="form-select w-100">
                <option value="">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </div>
    <div class="price-range mt-3">
        <div class="w-100">
            <label for="min-size" class="form-label">Size (Min)</label>
            <select id="min-size" name="min_size" class="form-select w-100">
                <option value="1500">1500</option>
                <option value="2500">2500</option>
                <option value="3500">3500</option>
            </select>
        </div>
        <div class="w-100">
            <label for="max-size" class="form-label">Size (Max)</label>
            <select id="max-size" name="max_size" class="form-select w-100">
                <option value="2500">2500</option>
                <option value="3500">3500</option>
                <option value="4500">4500</option>
            </select>
        </div>
    </div>
    <div class="mt-3">
        Accessibility Features
        <ul class="list-unstyled">
            <li>
                <input type="checkbox" id="ewd" name="accessibility_features" value="ewd" class="me-2">
                <label for="ewd">Extra-wide doorways</label>
            </li>
            <li>
                <input type="checkbox" id="ramps" name="accessibility_features" value="ramps" class="me-2">
                <label for="ramps">Ramps</label>
            </li>
            <li>
                <input type="checkbox" id="gb" name="accessibility_features" value="gb" class="me-2">
                <label for="gb">Grab bars</label>
            </li>
            <li>
                <input type="checkbox" id="lch" name="accessibility_features" value="lch" class="me-2">
                <label for="lch">Lower counter heights</label>
            </li>
            <li>
                <input type="checkbox" id="spa" name="accessibility_features" value="spa" class="me-2">
                <label for="spa">Spanish</label>
            </li>
        </ul>
    </div>
</div>
<button class="btn btn-secondary d-md-none mb-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#filterCollapse" aria-expanded="false" aria-controls="filterCollapse" id="filterToggleButton">
</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var checkboxes = document.querySelectorAll('.list-unstyled input[type="checkbox"]');
        checkboxes.forEach(function (checkbox) {
            var listItem = checkbox.parentElement;
            function updateOpacity() {
                if (checkbox.checked) {
                    listItem.style.opacity = '1';
                } else {
                    listItem.style.opacity = '0.65';
                }
            }
            checkbox.addEventListener('change', updateOpacity);
            updateOpacity();
        });

        var filterToggleButton = document.getElementById('filterToggleButton');
        var filterCollapse = document.getElementById('filterCollapse');
        function updateButtonText() {
            if (filterCollapse.classList.contains('show')) {
                filterToggleButton.textContent = 'Hide Filter';
            } else {
                filterToggleButton.textContent = 'Show Filter';
            }
        }
        filterCollapse.addEventListener('shown.bs.collapse', updateButtonText);
        filterCollapse.addEventListener('hidden.bs.collapse', updateButtonText);
        updateButtonText();
    });
</script>
