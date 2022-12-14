function emailIsNew() {
    $(document).ready(function() {
        $('div[data-field-type="email"]').change(function() {
            $.post('emailVerification.php', {'email' : emailVal}, function(data) {
                if(data == 'exists') return false;
                else $('div[data-form-element="form-inline"]').submit();
            });
        });
    })
}

emailIsNew();