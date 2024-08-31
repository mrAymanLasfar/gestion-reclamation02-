document.addEventListener('DOMContentLoaded', function () {
    console.log('DOMContentLoaded fired');
    const container = document.getElementById('produitsContainer');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const scrollAmount = 200;

    console.log(container, prevBtn, nextBtn);

    if (container && prevBtn && nextBtn) {
        prevBtn.addEventListener('click', function () {
            console.log('Prev button clicked');
            container.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', function () {
            console.log('Next button clicked');
            container.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    } else {
        console.log('One or more elements not found');
    }
});
