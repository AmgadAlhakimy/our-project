const listItems = document.querySelectorAll(".list-ul li ")

listItems.forEach(item =>{
    item.addEventListener("click", ()=>{
        let isActive = item.classList.contains("active");

        listItems.forEach((el) => {
            el.classList.remove("active");
        })

        if (isActive) item.classList.remove("active");
        else item.classList.add("active");
    });
});

const toggleSidebar = document.querySelector(".toggle-sidebar");
const logo = document.querySelector(".my-menu-btn");
const sidebar = document.querySelector(".sidebar");

toggleSidebar.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

logo.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});
// the lunguage bottun
function myfunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.select')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i=0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns [i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}










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


// html
// {{-- <div class="dropdownlang">
//                     <div class="select">
//                         <span class="selected">Languages</span>
//                         <div class="caret"></div>
//                     </div>
//                     <ul class="menulang">
//                         <li class="active">English</li>
//                         <li>Arabic</li>
//                     </ul>
//                 </div> --}}

// CSS
/* .dropdownlang{
  min-width: 150px;
  position: relative;
  margin: 0px 20px;

}
.dropdownlang * {
  box-sizing: border-box;
}
.select {
  background: var(--sidebar-head-bg);
  color: var(--grey-color);
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 2px var(--border-color) solid;
  border-radius: 0.5em;
  padding: 1em;
  cursor: pointer;
  transition: background 0.3s;

  padding-left: 30px;
  padding-right: 10px;
  margin-left: 5px;
  width: 150px;
  transition: width 0.3s;
  border: 1px solid var(--border-color);
  border-radius: 10px;
  box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
  height: 50px;
  transition: all 1s ease;
}
.select:hover{
  background: var(--color_light1);
  color: var(--color_dark2);
  border-color: var(--grey-color);
}
.select-clicked {
  border: 2px #26489a solid;
  box-shadow: 0 0 0.8em #26489a;
}
.caret {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 6px solid var(--grey-color);
  transition: 0.3s;
}
.caret-rotate {
  transform: rotate(180deg);
}
.head .menulang{
  list-style: none;
  padding: 0.2em 0.5em;
  background: #323741;
  border: 1px #323741 solid;
  box-shadow: 0 0.3em 1em rgba(0, 0, 0, 0.2);
  border-radius: 0.5em;
  color: #9fa5b5;
  position: absolute;
  top: 3.78em;
  left: 50%;
  width: 80%;
  transform: translatex(-50%);
  opacity: 0;
  display: none;
  transition: 0.2s;
  z-index: 1;
}
.head .menulang li {
  padding: 0.7em 0.5em;
  border-radius: 0.5em;
  cursor: pointer;
}
.head .menulang li:hover {
  background: #2a2d35;
}
.active {
  background: #23242a;
}
.menulang-open{
  display: block;
  opacity: 1;
} */
