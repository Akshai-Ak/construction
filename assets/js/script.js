$('.carousel').carousel({
    interval: 1000 * 3  
  })
  $(document).ready(function () {
    console.log("ready!");
    window.addEventListener("scroll", function () {
      console.log("ready!!");
        if (window.scrollY > 100) {
            $('nav').addClass("bg-nav");
            $("#navBr").addClass('scroll-down');
        } else {
            $('nav').removeClass("bg-nav");

        }
    });
});

// $('#signup').on('show.bs.modal', function (event) {
//   console.log("hi");
//   var button = $(event.relatedTarget) // Button that triggered the modal
//   var recipient = button.data('whatever') // Extract info from data-* attributes
//   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//   // var modal = $(this)
//   // modal.find('.modal-title').text('New message to ' + recipient)
//   // modal.find('.modal-body input').val(recipient)
// })


$(".login").click(function name(params) {
  console.log("layout");
  $('.login-btn').attr('name', 'login')
})
function fetchPlotNumber(id) {
  // $('#plot').html('');
  $.ajax({
    type:'post',
    url:'ajaxdata.php',
    data:{project_id:id},
    success:function (data) {
      $('#plot').html(data);
    }
  })
}
let x;
let y;

var xLeft;
var yTop;
let xValue;
let yValue;

let plots
$(".book-layout").click(function booking(event) {
  var x = event.clientX;
  var y = event.clientY;
  var coords = "X coords: " + x + ", Y coords: " + y;
  console.log(coords);

  xLeft=x- this.getBoundingClientRect().left
   xValue=xLeft/this.getBoundingClientRect().width
   yTop=y-this.getBoundingClientRect().top
   yValue=yTop/this.getBoundingClientRect().height
  console.log(xValue,yValue);
  console.log(this.getBoundingClientRect());

  result(xValue,yValue) 
})
let plotCoords=[{
  width:"0.022159547661151125",   
  height:"0.01833545882681518",                                         
  xCoordStart:"0.1789244696002276 ",
  xCoordEnd:"0.20166072816821232 ",
  yCoordStart:"0.3053485375164917",
  yCoordEnd:"0.32412567554296823",
  value:"318"
},{
  xCoordStart:"0.17959494767932313 ",
  xCoordEnd:"0.2006113777269035",
  yCoordStart:"0.3248795027228567",
  yCoordEnd:"0.34189112733300697",
  value:"317"
}
]
function result(c,d) {
  for(i=0;i<plotCoords.length;i++){
  if (plotCoords[i].xCoordStart<c && plotCoords[i].xCoordEnd>c && plotCoords[i].yCoordStart<d && plotCoords[i].yCoordEnd>d) {
     plots=plotCoords[i].value;
    plotBook(plots);
  }
  else{
    console.log("hi");
  }
}
}
function plotBook(id) {
  console.log(id);
  console.log("called");
  $.ajax({
    type:'get',
    url:'ajaxdata.php',
    data:{plot_number:id},
    success:function (data) {
      $('#plot').html(data);
        window.location.href="http://construction.test/_template/_booking.php?plot_number="+plots
    }
  })
}
// console.log(plotCoords[0].filter(a));
// var result=plotCoords[0].filter(plotCoords.xCoordStart>a && plotCoords.xCoordEnd<a &&plotCoords.yCoordStart>b && plotCoords.yCoordEnd<b)
// console.log(result);


let a= 10
let count=0;
for (let i = 1; i <=a; i++) {
  if (a % i == 0) {
    count++
     console.log(count);
  }
  // else{
  //   console.log("prime");
  // }
}
AOS.init();
