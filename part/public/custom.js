
function senddata(){

var myName= document.getElementById('myName').value;
var myroll= document.getElementById('myroll').value;
var myClass= document.getElementById('myClass').value;




let url ="/insertdata";

let data ={name:myName,roll:myroll,class:myClass};

axios.post(url,data)

  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert(error);
  });


}