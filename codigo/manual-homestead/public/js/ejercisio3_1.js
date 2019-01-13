$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.texto article').hide();
	$('.texto article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.texto article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});

function fristyear()
{

}

function secondyear()
{
	
}