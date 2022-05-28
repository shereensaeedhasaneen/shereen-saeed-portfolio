/////////open and close mobile menu //////////
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


  //////// add active to clicked links in header //////////

  $('.transition_link li').on('click' , function(){

    /// to highlight header links ////
      for (const li of document.querySelectorAll(".transition_link li")) {
        li.classList.remove("active");
        unactive_links_href = $(li).find('a').attr('href')
        $(`${unactive_links_href}`).addClass('hide_section')
      }
      $(this).addClass('active')
    /// End to highlight header links ////
   
   

    ///// to hide and show section //////////
    var href = $(this).find('a').attr('href');
    $(`${href}`).removeClass('hide_section')
    $(`${href}`).addClass('show_section')
  

  })