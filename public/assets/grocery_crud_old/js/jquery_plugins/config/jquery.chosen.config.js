$(function(){
	$(".chosen-select,.chosen-select-add,.chosen-multiple-select-add,.chosen-multiple-select").chosen({allow_single_deselect:true,create_option: function(term){var chosen = this; chosen.append_option({value:term,text:term});}});	
});