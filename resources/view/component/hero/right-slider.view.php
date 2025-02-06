<div id="hero-right-slider" class="relative h-[80vh] max-h-[666px] w-full overflow-hidden">
    <div class="slider-container h-full relative overflow-hidden">
        <?php foreach ($slides as $index => $slide): ?>
            <div
                class="slideHero h-full w-full flex-shrink-0 absolute top-0 left-0 transition-transform duration-700 ease-in-out <?= $index === 0 ? 'translate-x-0' : 'translate-x-full' ?>">
                <img src="<?= $slide['desktopImage'] ?>" alt="Background"
                    class="hidden md:block absolute top-0 left-0 h-full w-full object-cover" />
                <img src="<?= $slide['mobileImage'] ?>" alt="Background"
                    class="block md:hidden absolute top-0 left-0 h-full w-full object-cover" />

                <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-l from-black to-transparent opacity-90">
                </div>

                <div class="absolute right-[15%] bottom-[130px] text-center w-[75%] max-w-[400px] z-10">
                    <div class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">
                        <?= $slide['title'] ?>
                    </div>
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">
                        <?= $slide['subtitle'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Dots posizionati separatamente -->
        <div class="absolute bottom-[40px] left-1/2 transform -translate-x-1/2 flex justify-center gap-[15px] z-20">
            <?php foreach ($slides as $index => $slide): ?>
                <button
                    class="dot w-[12px] h-[12px] bg-white rounded-full transition-opacity duration-300 ease-in-out <?= $index === 0 ? 'opacity-100' : 'opacity-50' ?>"
                    data-index="<?= $index ?>"></button>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.slideHero');
        const dots = document.querySelectorAll('.dot');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('translate-x-0', 'translate-x-full', 'translate-x-[-100%]');
                if (i === index) {
                    slide.classList.add('translate-x-0'); // current view
                } else if (i < index) {
                    slide.classList.add('translate-x-[-100%]'); // previous view
                } else {
                    slide.classList.add('translate-x-full'); // next view
                }
            });

            dots.forEach((dot, i) => {
                dot.classList.remove('opacity-100');
                dot.classList.add('opacity-50');
                if (i === index) {
                    dot.classList.add('opacity-100');
                    dot.classList.remove('opacity-50');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function goToSlide(index) {
            currentIndex = index;
            showSlide(currentIndex);
        }

        // apply event to each dot
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
        });

        setInterval(nextSlide, 8000);
    });
</script>