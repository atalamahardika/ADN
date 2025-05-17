<style>
.counter {
    font-size: 2.5rem;
    color: #14532d;
    font-weight: bold;
}
.count-section img {
    margin-bottom: 10px;
}
</style>

<div class="count-section py-5" style="background-color: rgba(219, 234, 213, 0.35); margin-bottom: 40px;">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('group.png') }}" alt="Member" style="height: 50px;">
                <h2 class="counter mt-2" data-target="1500">0</h2>
                <p>Member</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('file.png') }}" alt="Publication" style="height: 50px;">
                <h2 class="counter mt-2" data-target="1500">0</h2>
                <p>Publication</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('newspaper-folded.png') }}" alt="News" style="height: 50px;">
                <h2 class="counter mt-2" data-target="1500">0</h2>
                <p>News</p>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    let started = false;

    const startCounting = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;

            const updateCount = () => {
                const increment = target / 200;
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    const onScroll = () => {
        const section = document.querySelector('.count-section');
        const sectionTop = section.getBoundingClientRect().top;
        const triggerPoint = window.innerHeight - 150;

        if (sectionTop < triggerPoint && !started) {
            started = true;
            startCounting();
        }
    };

    window.addEventListener('scroll', onScroll);
});
</script>
