const icons = [
    {
        src: "assets/icons/book.png",
        position: { left: '10%', top: '20%' },
    },
    {
        src: "assets/icons/hand.png",
        position: { left: '30%', top: '40%' }
    },
    {
        src: "assets/icons/leters.png",
        position: { left: '20%', top: '80%' }
    },
    {
        src: "assets/icons/pen.png",
        position: { left: '550%', top: '30%' }
    },
    {
        src: "assets/icons/study.png",
        position: { left: '75%', top: '15%' }
    },
    {
        src: "assets/icons/book.png",
        position: { left: '65%', top: '85%' }
    }
];

const iconContainer = document.querySelector('.icon-container');

icons.forEach(icon => {
    const img = document.createElement('img');
    img.src = icon.src;
    img.alt = "أيقونة";
    img.classList.add('icon');
    
    // تعيين الموضع
    img.style.position = 'absolute';
    img.style.left = icon.position.left;
    img.style.top = icon.position.top;
    
    iconContainer.appendChild(img);
});