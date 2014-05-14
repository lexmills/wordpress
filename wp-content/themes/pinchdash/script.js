$(document).ready(function() {
  $('.print-recipe').on('click', function(e){
    window.print();

    e.preventDefault();
  });
});