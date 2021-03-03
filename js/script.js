feather.replace();
$(document).ready(function(){
  /*var limit = new Date(2021,2,12);
  var fecha = new Date();
  if(limit.getTime()<fecha.getTime())
  {
    console.log('debe mostrar separated');
    $('#allin').hide();
    $('#separated').show();
  }
  else
  {
    $('#separated').hide();
    $('#allin').show();
  }
  console.log(fecha+'---'+limit);*/
 $('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

});


		