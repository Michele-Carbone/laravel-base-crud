const deleteFormElements = document.querySelectorAll('.delete-form');

deleteFormElements.forEach(form => {
    form.addEventListener('submit', function (event) {
        const name = form.getAttribute('data-title');
        event.preventDefault();

        const confirm = window.confirm(`Sei Sicuro di voler eliminare questo ${name} fumetto?`);
        if (confirm) this.submit();
    });
});