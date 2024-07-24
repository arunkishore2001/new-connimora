document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.animate');

    const animateOnScroll = () => {
        const windowHeight = window.innerHeight;

        animatedElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const animationType = element.classList.contains('left-to-right') ? 'left-to-right' :
                                  element.classList.contains('right-to-left') ? 'right-to-left' :
                                  element.classList.contains('top-to-bottom') ? 'top-to-bottom' : '';

            if (elementTop < windowHeight - 100) {
                element.classList.add('animate-visible');
            } else {
                element.classList.remove('animate-visible');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Initial check
});
