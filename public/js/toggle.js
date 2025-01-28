const icons = [
    {
        src: "assets/icons/book.png",
        position: { left: '10%', top: '20%' },
        
        
        // animation: {move: "1s". infinite, alternate} 

    },{
        src: "assets/icons/hand.png",
        position: { left: '30%', top: '40%' }
    },{
        src: "assets/icons/leters.png",
        position: { left: '20%', top: '80%' }
    },{
        src: "assets/icons/pen.png",
        position: { left: '55%', top: '30%' }
    },{
        src: "assets/icons/study.png",
        position: { left: '70%', top: '15%' }
    },{
        src: "assets/icons/shape.png",
        position: { left: '85%', top: '85%' }
    }
];

const iconContainer = document.querySelector('.icon-container');

icons.forEach(icon => {
    const img = document.createElement('img');
    img.src = icon.src;
    img.alt = "أيقونة";
    img.classList.add('icon');
    
    
    img.style.position = 'absolute';
    img.style.left = icon.position.left;
    img.style.top = icon.position.top;
    
    iconContainer.appendChild(img);
});


