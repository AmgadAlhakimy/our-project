function setParentId(input) {
    const list = document.getElementById('fathersList');
    const options = list.getElementsByTagName('option');

    for (let option of options) {
        if (option.value === input.value) {
            this.set('parents_id', option.getAttribute('data-id'));
            break;
        } else if (input.value.trim() === '') {
            this.set('parents_id', null);
        } else {
            this.set('parents_id', 0);
        }
    }
}

function setTeacherId(input) {
    const list = document.getElementById('teachersList');
    const options = list.getElementsByTagName('option');
    for (let option of options) {
        if (option.value === input.value) {
            this.set('teacher_id', option.getAttribute('data-id'));
            break;
        } else if (input.value.trim() === '') {
            this.set('teacher_id', null);
        } else {
            this.set('teacher_id', 0);
        }
    }
}


window.localizedMessages = {
    imageError: "{{ __('validation.image') }}",
    requiredError: "{{ __('validation.required') }}"
};