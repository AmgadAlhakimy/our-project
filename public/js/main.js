const listItems = document.querySelectorAll(".list-ul li ");

listItems.forEach((item) => {
    item.addEventListener("click", () => {
        // حدث الضغط على الرابط الثاني
        let isActive = item.classList.contains("active");

        listItems.forEach((el) => {
            el.classList.remove("active");
        });

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

// --------------------------------------------------------------------------------
//  the dropdown of language
const dropdowns = document.querySelectorAll(".dropDownLang");

dropdowns.forEach((dropdownlang) => {
    const select = dropdownlang.querySelector(".select");
    const caret = dropdownlang.querySelector(".caret");
    const menulang = dropdownlang.querySelector(".menuLang");
    const options = dropdownlang.querySelectorAll(".menuLang li"); //check
    const selected = dropdownlang.querySelector(".selected");

    // add a click event to the select element
    select.addEventListener("click", () => {
        // add the cliked select style to the secect element
        select.classList.toggle("select-clicked");
        // add the torare style to the caret element
        caret.classList.toggle("caret-rotate");
        // add the open style to the menulang element
        menulang.classList.toggle("menulang-open");
    });

    // loop through all option elements
    options.forEach((option) => {
        // add a click event to the option element
        option.addEventListener("click", () => {
            // chang selected inner text to clicked option inner text
            selected.innerText = option.innerText;
            // add the cliched select styles to the select element
            select.classList.remove("select-clicked");
            // add the rotate styles to the caret element
            caret.classList.remove("caret-rotate");
            // add the opent style to the menulang elemnt
            menulang.classList.remove("menulang-open");
            // Remove active class from all option element
            options.forEach((option) => {
                option.classList.remove("active");
            });
            // add active class to cliched option element
            option.classList.add("active");
        });
    });
});
// شرط النصوص مع التشكبوكس
// -----------------------------------------------------------


// ---------------------
function check_test(my_checkbox, my_input1, my_input2){
    if(my_checkbox.checked) {
        my_input1.hidden=false;
        my_input2.hidden=false;
    }else{
        my_input1.hidden=true;
        my_input2.hidden=true;
    }
}
function toggleInput() {
    var checkbox1 = document.getElementById("takeMedicineE");
    var checkbox2 = document.getElementById("haveAllergy");
    var checkbox3 = document.getElementById("healthProblem");
    //
    var input1 = document.getElementById("std_medicine_desc_1")
    var input2 = document.getElementById("std_medicine_desc_2")
    //
    var input3 = document.getElementById("std_allergy_desc_1")
    var input4 = document.getElementById("std_allergy_desc_2")
    //
    var input5 = document.getElementById("std_health_desc_1")
    var input6 = document.getElementById("std_health_desc_2")

    check_test(checkbox1,input1,input2);
    check_test(checkbox2,input3,input4);
    check_test(checkbox3,input5,input6);
}

// table checkbox item
const selectAllCheckbox = document.getElementById('select_all');
const checkboxItems = document.querySelectorAll('.check_item');

selectAllCheckbox.addEventListener('change', function() {
    checkboxItems.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
    });

    checkboxItems.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        const allChecked = [...checkboxItems].every(function(item) {
        return item.checked;
        });
        selectAllCheckbox.checked = allChecked;
    });
    });
// select_bt button
function toggleCheckboxes() {
    var checkboxes = document.querySelectorAll("input[type='checkbox']");
    
        checkboxes.forEach(function(checkbox) {
        if (checkbox.style.display === "none") {
            checkbox.style.display = "block";
        } else {
            checkbox.style.display = "none";
        }
        });
    }
