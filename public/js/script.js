$(document).ready(function() {
    $('.ply-back').click(function() {
        let spanVal = $('.player-number').text()
        let intVal = parseInt(spanVal)
        if(intVal > 1) {
            intVal--
            $('.player-number').text(intVal)
        }
    });
    $('.ply-next').click(function() {
        let spanVal = $('.player-number').text()
        let intVal = parseInt(spanVal)
        intVal++
        $('.player-number').text(intVal)
    });
});