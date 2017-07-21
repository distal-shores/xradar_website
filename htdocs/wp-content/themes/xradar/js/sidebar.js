$(document).ready(function() {
    $('.menu-item-has-children').click(function(e) {
        e.preventDefault();
        $(this).find('ul').toggle();
        $(this).toggleClass('active');
    });
});

// $(document).ready(function() {
//     // run test on initial page load
//     checkSize();

//     // run test on resize of the window
//     $(window).resize(checkSize);
// });

// //Function to the css rule
// function checkSize(){
//     if ($('#hero-photo p').css("display") == "none" ){
//         // your code here
//     }
// }