
$(document).ready(function(){
    $('.wholeArticle').hide()
        $('.readMore').click(function(){
            // alert("Hello, my darling");
            $('.wholeArticle').show()
           $('.abridgedVersion').hide()
            //    $('#alert').toggle(delay)// to add 0.5 seconds to hide

        });

        $('.toBack').click(function(){
            // alert("Hello, my darling");
           $('.abridgedVersion').show()
           $('.wholeArticle').hide()
            //    $('#alert').toggle(delay)// to add 0.5 seconds to hide

        });
});

// $( function() {
// 	$('.js-accordion').accordion({
// 		icons: false
// 	});
// });


// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function() {
//         this.classList.toggle("active");
//         var panel = this.nextElementSibling;
//         if (panel.style.display === "block") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     });
// }

