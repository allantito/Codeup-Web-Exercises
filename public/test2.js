$('worthwhile-button').click(function(){


// get the input of the first text box and set to variable
var elementInput = $('#element-input').val();
console.log(elementInput);


// get the input of the seconf box and set it to a variable
var secondBox = $("#value-input").val();
console.log(secondBox);
// select the items(s) that we entered in the first box
// or $(elementInput).addClass('important');
$(elementInput).html(secondBox);
// change the html of the items selected to the second box






});