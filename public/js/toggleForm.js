document.addEventListener('alpine:init', () => {

    Alpine.data('form', (defaultStatus) => ({
        showForm: defaultStatus,
        toggleForm(e) {
            if (!this.showForm) {
                $('html,body').animate({
                    scrollTop: $('#form').offset().top
                }, 'slow');
            }
            this.showForm = !this.showForm
        }
    }))

})
