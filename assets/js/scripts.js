//Document.ready insure the page is fully loaded and 'ready' before trying to do anything.  I do this check to make sure the broser is ready before loading the custom cursor
$(document).ready(function(){
	$('body').css('cursor', 'url(/assets/img/cursor.png)  0 16, auto');
});

//for the About Popup Dialog
function init_about_dialog()
{
	$("#about_dialog").dialog({
		title: 'About Us',
		modal: true,
		draggable: false,
		resizable: false,
		show: 'fold',
		hide: 'fold',
		height: 325,
		width: 500
    });
}

//for the Contact Popup Dialog
function init_contact_dialog()
{
	$("#contact_dialog").dialog({
		title: 'Contact Us',
		modal: true,
		draggable: false,
		resizable: false,
		show: 'fold',
		hide: 'fold',
		height: 150,
		width: 500
    });
}

//This controls the divs growing and shrinking when clicked on
var toggleState = true;
function animate_div(div)
{
  if(toggleState) {
    $("#"+div)
		.animate({
			height: 600,
			width: 600,
			backgroundSize: '100%'
		});
		switch(div)
		{
			case "blue_div":
			{
				$("#blue_data_div").show();
				$("#blue_lable_div").hide();
				$("#pink_div").hide();
				$("#orange_div").hide();
				$("#green_div").hide();
				break;
			}
			case "pink_div":
			{
				$("#pink_data_div").show();
				$("#pink_lable_div").hide();
				$("#blue_div").hide();
				$("#orange_div").hide();
				$("#green_div").hide();
				break;
			}
			case "orange_div":
			{
				$("#orange_data_div").show();
				$("#orange_lable_div").hide();
				$("#pink_div").hide();
				$("#blue_div").hide();
				$("#green_div").hide();
				break;
			}
			case "green_div":
			{
				$("#green_data_div").show();
				$("#green_lable_div").hide();
				$("#pink_div").hide();
				$("#orange_div").hide();
				$("#blue_div").hide();
				break;
			}
		}
  }
  else
  {
	$("#"+div)
		.animate({
			height: 200,
			width: 200,
			backgroundSize: '100%'
		});
		switch(div)
		{
			case "blue_div":
			{
				$("#blue_data_div").hide();
				$("#blue_lable_div").show();
				$("#pink_div").show();
				$("#orange_div").show();
				$("#green_div").show();
				break;
			}
			case "pink_div":
			{
				$("#pink_data_div").hide();
				$("#pink_lable_div").show();
				$("#blue_div").show();
				$("#orange_div").show();
				$("#green_div").show();
				break;
			}
			case "orange_div":
			{
				$("#orange_data_div").hide();
				$("#orange_lable_div").show();
				$("#pink_div").show();
				$("#blue_div").show();
				$("#green_div").show();
				break;
			}
			case "green_div":
			{
				$("#green_data_div").hide();
				$("#green_lable_div").show();
				$("#pink_div").show();
				$("#orange_div").show();
				$("#blue_div").show();
				break;
			}
		}
  }
  toggleState = !toggleState;
}