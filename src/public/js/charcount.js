$('textarea').keyup(function () {
    const characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');

    current.text(characterCount);

    const styles = [
        { max: 39, color: '#666', weight: 'normal' },
        { max: 79, color: '#6d5555', weight: 'normal' },
        { max: 99, color: '#841c1c', weight: 'strong' },
        { max: Infinity, color: '#8f0001', weight: 'strong' }
    ];

    const style = styles.find(function (style) {
        return characterCount <= style.max;
    });

    current.css('color', style.color);
    theCount.css('font-weight', style.weight);

    maximum.css('color', characterCount >= 100 ? '#8f0001' : '#666');
});
