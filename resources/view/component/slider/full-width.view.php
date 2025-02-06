<div class="relative py-20 md:py-20">
    <div class="w-full md:w-[calc(100%-230px)] max-w-[1200px] mx-auto overflow-hidden">
        <ul class="fullSlider m-0 flex transition-transform duration-500 ease-in-out">
            <?php foreach ($slides as $slide): ?>
                <li class="slide relative left-0 m-0 w-full flex-shrink-0">
                    <img src="<?= $slide['mobileImage'] ?>" alt="<?= $slide['title'] ?>"
                        class="w-full min-h-[500px] object-cover object-center block md:hidden" />
                    <img src="<?= $slide['desktopImage'] ?>" alt="<?= $slide['title'] ?>"
                        class="w-full min-h-[500px] object-cover object-center hidden md:block" />
                    <div
                        class="overlay absolute top-0 right-0 w-full h-[80vh] z-1 bg-gradient-to-l from-black to-transparent opacity-75">
                    </div>
                    <div
                        class="absolute inset-y-0 right-0 left-0 md:left-auto md:right-[15%] p-4 text-white w-full md:w-[45%] max-w-full md:max-w-[400px] flex flex-col justify-end md:justify-center z-20 font-inter text-base font-normal leading-[150%]">
                        <div class="text-5xl font-semibold tracking-tight text-white sm:text-5xl z-4">
                            <?= $slide['title'] ?>
                        </div>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">
                            <?= $slide['subtitle'] ?>
                        </p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div
        class="absolute left-1/2 -translate-x-1/2 my-10 z-10 flex justify-center h-[50px] pb-[30px] gap-[15px] flex-wrap max-w-[250px] md:max-w-none">
        <?php foreach ($slides as $index => $slide): ?>
            <button class="dotSlider w-5 h-5 bg-blue-600 opacity-50 hover:opacity-100 transition-opacity rounded-full"
                aria-label="Vai alla slide <?= $index + 1 ?>"></button>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slider = document.querySelector('.fullSlider');
        const slides = slider.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dotSlider');
        let currentIndex = 0;

        function showSlide(index) {
            const offset = -index * 100;
            slider.style.transform = `translateX(${offset}%)`;

            dots.forEach((dot, i) => {
                dot.classList.toggle('opacity-100', i === index);
                dot.classList.toggle('opacity-50', i !== index);
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

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
        });

        setInterval(nextSlide, 8000);

        showSlide(currentIndex); // Mostra la prima slide all'inizio
    });
</script>