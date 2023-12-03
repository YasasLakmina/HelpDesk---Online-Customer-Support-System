function autoSlide()
{
	var counter = 1;
	setInterval(function autoSlide(){
		document.getElementById("radio" + counter).checked = true;
		counter++;
		if(counter > 4)
		{
			counter = 1;
		}

	},4500);
}

autoSlide();


// script.js
function enableButton() 
{
    if (document.getElementById("checkbox").checked) 
	{
        document.getElementById("subBtn").disabled = false;
    } else 
	{
        document.getElementById("subBtn").disabled = true;
    }	
}


/*faq script*/
function faqanswer(id) {
    var answer = document.getElementById(id);
    answer.classList.toggle("show");
  }


