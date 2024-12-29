const listItems = document.querySelectorAll(".list-ul li ");

listItems.forEach((item) => {
    item.addEventListener("click", () => {
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

// toggleSidebar.addEventListener("click", () => {
//     sidebar.classList.toggle("close");
// });
logo.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

// ========== تعليق السايد بار
// sidebar.classList.toggle("close");

// ====================
// ====================
// ====================

window.addEventListener("DOMContentLoaded", function () {
    const my_toggle = document.getElementById("my_toggle");
    const _clicked = document.getElementById("_clicked");
    const body = document.querySelector("body");

    function checkScreenWidth() {
        if (window.innerWidth < 560) {
            my_toggle.style.margin = "0px 0px 0px 0px";
            my_toggle.classList.remove("active");
        }
    }

    function setToggleStyles(isActive) {
        if (window.innerWidth >= 560) {
            if (body.dir === "rtl") {
                my_toggle.style.transition = "all .5s ease";
                if (isActive) {
                    my_toggle.style.margin = "0px 90px 0px 0px";
                    // my_toggle.style.backgroundColor = "blue";
                } else {
                    my_toggle.style.margin = "0px 240px 0px 0px";
                    // my_toggle.style.backgroundColor = "black";
                }
            } else {
                my_toggle.style.transition = "all .5s ease";
                if (isActive) {
                    my_toggle.style.margin = "0px 0px 0px 90px";
                    // my_toggle.style.backgroundColor = "green";
                } else {
                    my_toggle.style.margin = "0px 0px 0px 240px";
                    // my_toggle.style.backgroundColor = "yellow";
                }
            }
        }
    }

    checkScreenWidth();
    window.addEventListener("resize", checkScreenWidth);

    _clicked.addEventListener("click", () => {
        const isActive = my_toggle.classList.toggle("active");
        setToggleStyles(isActive);
    });


    setToggleStyles(false);
});

// الكود السابق
// window.addEventListener("DOMContentLoaded", function () {
//     var my_toggle = document.getElementById("my_toggle");
//     const _clicked = document.getElementById("_clicked");


//     function checkScreenWidth() {
//         if (window.innerWidth < 560) {
//             my_toggle.style.margin = "0px 0px 0px 0px";
//         }
//     }
//     checkScreenWidth();
//     window.addEventListener("resize", function () {
//         checkScreenWidth();
//     });
// });

// (function () {
// document.addEventListener("DOMContentLoaded", function () {
//     const _clicked = document.getElementById("_clicked");
//     const my_toggle = document.getElementById("my_toggle");
//     var body = document.querySelector("body");

//     if (body.dir === "rtl") {
//         my_toggle.style.margin = "0px 240px 0px 0px";
//         my_toggle.style.transition = "all .5s ease";

//         _clicked.addEventListener("click", () => {
//             if (my_toggle.classList.contains("active")) {
//                 my_toggle.classList.remove("active");
//                 my_toggle.style.transition = "all .5s ease";
//                 my_toggle.style.margin = "0px 240px 0px 0px";
//                 my_toggle.style.backgroundColor = "black";
//             } else {
//                 my_toggle.classList.add("active");
//                 my_toggle.style.transition = "all 0.5s ease";
//                 my_toggle.style.margin = "0px 100px 0px 0px";
//                 my_toggle.style.backgroundColor = "blue";
//             }
//         });
//     } else {
//         my_toggle.style.margin = "0px 0px 0px 240px";
//         my_toggle.style.transition = "all .5s ease";

//         _clicked.addEventListener("click", () => {
//             if (my_toggle.classList.contains("active")) {
//                 my_toggle.classList.remove("active");
//                 my_toggle.style.transition = "all .5s ease";
//                 my_toggle.style.margin = "0px 0px 0px 240px";
//                 my_toggle.style.backgroundColor = "yellow";
//             } else {
//                 my_toggle.classList.add("active");
//                 my_toggle.style.transition = "all 0.5s ease";
//                 my_toggle.style.margin = "0px 0px 0px 100px";
//                 my_toggle.style.backgroundColor = "green";
//             }
//         });
//     }
// });
// })();

// --------------------------------------------------------------------------------

//  the dropdown of language
const dropdowns = document.querySelectorAll(".dropDownLang");

dropdowns.forEach((dropdownlang) => {
    const select = dropdownlang.querySelector(".select");
    const caret = dropdownlang.querySelector(".caret");
    const menulang = dropdownlang.querySelector(".menuLang");
    const options = dropdownlang.querySelectorAll(".menuLang li"); //check
    const selected = dropdownlang.querySelector(".selected");

    select.addEventListener("click", () => {
        select.classList.toggle("select-clicked");
        caret.classList.toggle("caret-rotate");
        menulang.classList.toggle("menulang-open");
    });

    // loop through all option elements
    options.forEach((option) => {
        option.addEventListener("click", () => {
            selected.innerText = option.innerText;
            select.classList.remove("select-clicked");
            caret.classList.remove("caret-rotate");
            menulang.classList.remove("menulang-open");
            options.forEach((option) => {
                option.classList.remove("active");
            });
            option.classList.add("active");
        });
    });
});
// شرط النص مع التشكبوكس
// -----------------------------------------------------------

// ---------------------
function check_test(my_checkbox, my_input1, my_input2) {
    if (my_checkbox.checked) {
        my_input1.hidden = false;
        my_input2.hidden = false;
    } else {
        my_input1.hidden = true;
        my_input2.hidden = true;
    }
}

// deleted if you want _ its not used inymore
function toggleInput() {
    var checkbox1 = document.getElementById("takeMedicineE");
    var checkbox2 = document.getElementById("haveAllergy");
    var checkbox3 = document.getElementById("healthProblem");
    //
    var input1 = document.getElementById("std_medicine_desc_1");
    var input2 = document.getElementById("std_medicine_desc_2");
    //
    var input3 = document.getElementById("std_allergy_desc_1");
    var input4 = document.getElementById("std_allergy_desc_2");
    //
    var input5 = document.getElementById("std_health_desc_1");
    var input6 = document.getElementById("std_health_desc_2");

    check_test(checkbox1, input1, input2);
    check_test(checkbox2, input3, input4);
    check_test(checkbox3, input5, input6);
}

// table checkbox item
const selectAllCheckbox = document.getElementById("select_all");
const checkboxItems = document.querySelectorAll(".check_item");

selectAllCheckbox.addEventListener("change", function () {
    checkboxItems.forEach(function (checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
});

checkboxItems.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
        const allChecked = [...checkboxItems].every(function (item) {
            return item.checked;
        });
        selectAllCheckbox.checked = allChecked;
    });
});
// select_bt button
function toggleCheckboxes() {
    var checkboxes = document.querySelectorAll("input[type='checkbox']");

    checkboxes.forEach(function (checkbox) {
        if (checkbox.style.display === "none") {
            checkbox.style.display = "block";
        } else {
            checkbox.style.display = "none";
        }
    });
}

// hide the options from the subjects select
function hidOptions() {
    var select = document.getElementById("sub_select");
    var options = select.options;

    for (var i = 0; i < options.length; i++) {
        options[i].style.display = "none";
    }
}


// AMGAD CODE
function populateClassrooms() {
    var educationalLevelId = document.getElementById('educational_level').value;
    var classroomSelect = document.getElementById('classroom');

    // Clear existing options
    classroomSelect.innerHTML = '';

    if (educationalLevelId !== '') {
        // Send an AJAX request to fetch the classrooms
        $.ajax({
            url: '/classrooms/' + educationalLevelId,
            type: 'GET',
            success: function(data) {
                // Ensure the response data is an array
                if (Array.isArray(data)) {
                    // Populate classrooms based on the response
                    data.forEach(function(classroom) {
                        classroomSelect.innerHTML += '<option value="' + classroom.id + '">' + classroom.name + '</option>';
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
}


// parent list code

    function showOptions() {
        const select = document.getElementById('parent');
        select.style.display = 'block';
    }

    function hideOptions() {
        const select = document.getElementById('parent');
        select.style.display = 'none';
    }

    function filterOptions() {
        const input = document.getElementById('customInput');
        const select = document.getElementById('parent');
        const options = select.options;

        for (let i = 0; i < options.length; i++) {
            const option = options[i];
            option.style.display = option.text.toLowerCase().includes(input.value.toLowerCase()) ? 'block' : 'none';
        }
    }

    function selectParent() {
        const select = document.getElementById('parent');
        const input = document.getElementById('customInput');
        input.value = select.options[select.selectedIndex].text;
        hideOptions();
    }

    document.addEventListener('click', (event) => {
        if (!event.target.closest('.parents_dropdown')) {
            hideOptions();
        }
    });

// wratting a single name with out space for stuedents name
    document.getElementById('singleWordInput').addEventListener('input', function() {
    this.value = this.value.replace(/\s+/g, '');
});
