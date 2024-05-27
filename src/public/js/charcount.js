$('textarea').keyup(function () {

    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');

    current.text(characterCount);

    if (characterCount < 40) {
        current.css('color', '#666');
    }
    if (characterCount > 40 && characterCount < 79) {
        current.css('color', '#6d5555');
    }

    if (characterCount > 80 && characterCount < 99) {
        current.css('color', '#841c1c');
    }

    if (characterCount >= 100) {
        maximum.css('color', '#8f0001');
        current.css('color', '#8f0001');
        theCount.css('font-weight', 'strong');
    } else {
        maximum.css('color', '#666');
        theCount.css('font-weight', 'normal');
    }

});
