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


$(document).ready(function() {
  var prevScrollpos = window.pageYOffset;
  $(window).scroll(function() {
    var currentScrollpos = window.pageYOffset;
    if (prevScrollpos > currentScrollpos) {
      $(".navbar").removeClass("show");
    } else {
      $(".navbar").addClass("show");
    }
    prevScrollpos = currentScrollpos;
  });
});
 