const listItems = document.querySelectorAll(".list-ul li ")

listItems.forEach(item =>{
    item.addEventListener("click", ()=>{
        // حدث الضغط على الرابط الثاني
        let isActive = item.classList.contains("");

        listItems.forEach((el) => {
            el.classList.remove("active");
        })

        if (isActive) item.classList.remove("active");
        else item.classList.add("active");
    });
});

// const toggleSidebar = document.querySelector(".toggle-sidebar");
const logo = document.querySelector(".my-menu-btn");
const sidebar = document.querySelector(".sidebar");

// toggleSidebar.addEventListener("click", () => {
//     sidebar.classList.toggle("close");
// });
logo.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

// --------------------------------------------------------------------------------
//  the dropdown of language 
const dropdowns = document.querySelectorAll('.dropdownlang');

dropdowns.forEach(dropdownlang => {
    const select = dropdownlang.querySelector('.select');
    const caret = dropdownlang.querySelector('.caret');
    const menulang = dropdownlang.querySelector('.menulang');
    const options = dropdownlang.querySelectorAll('.menulang li'); //check
    const selected = dropdownlang.querySelector('.selected');


    // add a click event to the select element
    select.addEventListener('click', () =>{
        // add the cliked select style to the secect element
        select.classList.toggle('select-clicked');
        // add the torare style to the caret element
        caret.classList.toggle('caret-rotate');
        // add the open style to the menulang element
        menulang.classList.toggle('menulang-open');
    });

    // loop through all option elements
    options.forEach(option => {
        // add a click event to the option element
        option.addEventListener('click', () => {
            // chang selected inner text to clicked option inner text
            selected.innerText = option.innerText;
            // add the cliched select styles to the select element
            select.classList.remove('select-clicked');
            // add the rotate styles to the caret element
            caret.classList.remove('caret-rotate');
            // add the opent style to the menulang elemnt 
            menulang.classList.remove('menulang-open');
            // Remove active class from all option element
            options.forEach(option => {
                option.classList.remove('active');
            });
            // add active class to cliched option element
            option.classList.add('active');
        });
    });

});


// the lunguage bottun
// function myfunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// window.onclick = function(event) {
//     if (!event.target.matches('.select')) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i=0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns [i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }
