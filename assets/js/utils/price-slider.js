document.addEventListener("DOMContentLoaded", () => {

    const url = new URL(window.location.href);
    var minPrice = 0;
    var maxPrice = (Math.ceil(productPriceData.maxPrice / 10) * 10) || 99999;
    var currencySymbol = productPriceData.currencySymbol || "";
    const priceFilterBtn = document.querySelector('#price-filter-btn');
    const slider = document.querySelector("#slider");

    // var priceValue = document.getElementById('price-value');

    noUiSlider.create(slider, {
        start: [+url.searchParams.get('min_price') || minPrice, +url.searchParams.get('max_price') || maxPrice], // Starting range values
        connect: true, // Connect the handle for range
        step: 1,
        range: {
            'min': minPrice,
            'max': maxPrice
        },
        tooltips: true, // Display tooltips with the slider values
        format: {
            to: function (value) {
                return currencySymbol + value.toFixed(0); // Format the value as price
            },
            from: function (value) {
                return Number(value.replace(currencySymbol, '')); // Remove the $ symbol when converting back
            }
        }
    });


    slider.style.backgroundColor = '#ccc';

    // Update the displayed price range when the slider value changes
    slider.noUiSlider.on('update', function (values, handle) {
        // priceValue.innerHTML = values.join(' - '); // Show range between handles
    });

    priceFilterBtn.addEventListener("click", () => {
        let values = slider.noUiSlider.get();
        if (values && values.length) {
            values = values.map(value => {
                return +value.replace(currencySymbol, '') || 0;
            });
        }
        const min_price = values[0];
        const max_price = values[1];

        // Update or set the min_price and max_price query parameters
        if (min_price !== undefined) {
            url.searchParams.set('min_price', min_price);
        }
        if (max_price !== undefined) {
            url.searchParams.set('max_price', max_price);
        }

        // Update the URL in the browser without reloading the page
        window.location.href = url.toString();
    });

});
