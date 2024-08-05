var numOne, numTwo, res, temp;
function add()
{
  numOne = parseInt(document.getElementById("val1").value);
  numTwo = parseInt(document.getElementById("Attendee").value);
  if(numOne && numTwo)
  {
    temp = document.getElementById("res");
    temp.style.display = "block";
    res = numOne * numTwo;
    document.getElementById("add").value = '$' +  res;
  }
}


function check()
{
document.getElementById('f1').innerHTML = document.myform.FnameKG.value; 
document.getElementById('f2').innerHTML = document.myform.LnameKG.value;
document.getElementById('f3').innerHTML = document.myform.EmailKG.value;
document.getElementById('f4').innerHTML = document.myform.AreaKG.value; 
document.getElementById('f5').innerHTML = document.myform.PtnKG.value;
document.getElementById('f6').innerHTML = document.myform.AddressKG.value;
document.getElementById('f7').innerHTML = document.myform.City.value;
document.getElementById('f8').innerHTML = document.myform.StateKG.value; 
document.getElementById('f9').innerHTML = document.myform.ZipKG.value;
document.getElementById('f10').innerHTML = document.myform.CountKG.value; 
document.getElementById('f11').innerHTML = document.myform.Comp.value; 
document.getElementById('f12').innerHTML = document.myform.AcKG.value;
}

function checkforblank() {

    if (document.getElementById('First').value == "") {
        alert('Please enter your FIRST NAME');
        return false;   
    }

    if (document.getElementById('Last').value == "") {
        alert('Please enter your Last NAME');
        return false;
    }

    if (document.getElementById('Email').value == "") {
        alert('Please enter your Email');
        return false;
    }

    if (document.getElementById('Area').value == "") {
        alert('Please enter Area Code');
        return false;
    }

    if (document.getElementById('Ptn').value == "") {
        alert('Please enter Phone Number');
        return false;
    }

    if (document.getElementById('Address').value == "") {
        alert('Please enter your Address');
        return false;
    }

    if (document.getElementById('City').value == "") {
        alert('Please enter your City');
        return false;
    }

    if (document.getElementById('State').value == "") {
        alert('Please enter your State/Province');
        return false;
    }

    if (document.getElementById('Zip').value == "") {
        alert('Please enter your City');
        return false;
    }

    if (document.getElementById('Country').value == "") {
        alert('Please enter your Country');
        return false;
    }

    if (document.getElementById('Comp').value == "") {
        alert('Please enter the name of the Company');
        return false;
    }

    if (document.getElementById('Attendee').value == "") {
        alert('Please enter number of Attendees');
        return false;
    }



    
}