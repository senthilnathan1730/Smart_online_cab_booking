/*const activepage = window.location.pathname;
  const navlinks =document.querySelectorAll('nav a').
  forEach(link => {
    if(link.href.includes(`${activepage}`)){
     link.classList.add('active');
    }
  })*/


  const hamburger =document.querySelector('.hamburger');
  const navbar = document.querySelector('ul');

  hamburger.addEventListener('click',()=>{
    navbar.classList.toggle('slide');
  })
  
  function formfill(){
         /*let pickup = document.getElementById("pick").values;
         let drop = document.getElementById("drop").values;
         let phone = document.getElementById("mobileno").values;*/
        /*alert("your Order sucessfully...Enjay your Trip.");*/
  }
  function onclick1(){
    document.getElementById("formcontant").innerHTML;
  }
  function fun(){
  let x = document.getElementById("pick").value;
  const from=[
    { id:1, item:"madurai"},
    { id:2, item:"chennai"},
    { id:3, item:"coimbature"},
    { id:4, item:"bengaluru"},

  ]
  let orders = from.findIndex(function(order){
  
  return order.item === x
  })
  console.log(orders);
  }


//  <!-- Script -->

