function viewInput()
    {
        KEG1.value = document.getElementById("KFname").value;
        KEG2.value = document.getElementById("KLname").value;
        KEG3.value = document.getElementById("KEmail").value;
        KEG4.value = document.getElementById("KArea").value;
        KEG5.value = document.getElementById("KPtn").value;
        KEG6.value = document.getElementById("KAddress").value;
        KEG7.value = document.getElementById("KCity").value;
        KEG8.value = document.getElementById("KState").value;
        KEG9.value = document.getElementById("KZip").value;
        KEG10.value = document.getElementById("KCountry").value;
        KEG11.value = document.getElementById("KCompany").value;
        KEG12.value = document.getElementById("KAttendee").value;
    }

var numOne, numTwo, res, temp;
function compute()
{
  numOne = parseInt(document.getElementById("value1").value);
  numTwo = parseInt(document.getElementById("KAttendee").value);
  if(numOne && numTwo)
  {
    temp = document.getElementById("res");
    temp.style.display = "block";
    res = numOne * numTwo;
    document.getElementById("compute").value = "$" + res;
  }
}

function checkforblank() {

if (document.getElementById('KFname').value == "") {
    alert('Please enter your FIRST NAME');

    return false;   
}

if (document.getElementById('KLname').value == "") {
    alert('Please enter your LAST NAME');
    return false;
}

if (document.getElementById('KEmail').value == "") {
    alert('Please enter your EMAIL ADDRESS');
    return false;
}

if (document.getElementById('KArea').value == "") {
    alert('Please enter the AREA CODE');
    return false;
}

if (document.getElementById('KPtn').value == "") {
    alert('Please enter your PHONE NUMBER');
    return false;
}

if (document.getElementById('KAddress').value == "") {
    alert('Please enter your ADDRESS');
    return false;
}

if (document.getElementById('KCity').value == "") {
    alert('Please enter your CITY');
    return false;
}

if (document.getElementById('KState').value == "") {
    alert('Please enter your STATE');
    return false;
}

if (document.getElementById('KZip').value == "") {
    alert('Please enter the ZIP CODE');
    return false;
}

if (document.getElementById('KCountry').value == "") {
    alert('Please enter your COUNTRY');
    return false;
}

if (document.getElementById('KCompany').value == "") {
    alert('Please enter the name of the COMPANY');
    return false;
}

if (document.getElementById('KAttendee').value == "") {
    alert('Please enter the count of ATTENDEES');
    return false;
}


}

document.addEventListener('invalid', (function () {
    return function (e) {
      e.preventDefault();
  
    };
  })(), true);

function IsEmpty() {
    if (document.forms['frm'].f1.value === "") {
      alert("Please fill up all fields!!!");
      return false;
    }
    if (document.forms['frm'].f2.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    if (document.forms['frm'].f3.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    if (document.forms['frm'].f4.value === "") {
          alert("Please fill up all fields!!!");
          return false;
    }
    if (document.forms['frm'].f5.value === "") {
      alert("Please fill up all fields!!!");
      return false;
    }
    if (document.forms['frm'].f6.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    if (document.forms['frm'].f7.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    if (document.forms['frm'].f8.value === "") {
          alert("Please fill up all fields!!!");
          return false;
    }
    if (document.forms['frm'].f9.value === "") {
      alert("Please fill up all fields!!!");
      return false;
    }
    if (document.forms['frm'].f10.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    if (document.forms['frm'].f11.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    if (document.forms['frm'].f12.value === "") {
          alert("Please fill up all fields!!!");
          return false;
    }
    if (document.forms['frm'].f13.value === "") {
        alert("Please fill up all fields!!!");
        return false;
    }
    return true;
  }

function showElement() {
    element = document.querySelector('.container');
    element.style.visibility = 'visible';

}

function hideElement() {
    element = document.querySelector('.container');
    element.style.visibility = 'hidden';

}

  