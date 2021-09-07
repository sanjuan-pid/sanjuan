$(document).ready(function(){
        //for buttons
        // setInterval(function(){
        //     $("img#city").click();
        // }, 60000);
        $(".4th").css("background-color","#56a4ff");
        $(".4th").css("border-color","#56a4ff");
        $(".4th").css("color","#fff");
        //for contents
        $("#3rd_contents").css("display","none");
        $("#2ND_contents").css("display","none");
        $("#UG_contents").css("display","none");
        $("#LG_contents").css("display","none");
        //for cards
        $("#directory .col-med-3:nth-child(even) .card").addClass( "blue" );
        $("#directory .col-med-3:nth-child(odd) .card").addClass( "red" );
        // $("#directory .col-med-3:nth-child(odd) .card").addClass( "green" );
        $(".4th").click(function(){

            $("#tabs button").css("background-color","#fff");
            $("#tabs button").css("border-color","#6c757d");
            $("#tabs button").css("color","#6c757d");

            $(this).css("background-color","#56a4ff");
            $(this).css("border-color","#56a4ff");
            $(this).css("color","#fff");

            $("#4th_contents").css("display","block");
            $("#3rd_contents").css("display","none");
            $("#2ND_contents").css("display","none");
            $("#UG_contents").css("display","none");
            $("#LG_contents").css("display","none");
        });
        $(".3rd").click(function(){
        //   $("label").slideToggle();
            // $("#3rd").
            // $("#4th").
            $("#tabs button").css("background-color","#fff");
            $("#tabs button").css("border-color","#6c757d");
            $("#tabs button").css("color","#6c757d");
            $(this).css("background-color","#56a4ff");
            $(this).css("border-color","#56a4ff");
            $(this).css("color","#fff");
            $("#4th_contents").css("display","none");
            $("#3rd_contents").css("display","block");
            $("#2ND_contents").css("display","none");
            $("#UG_contents").css("display","none");
            $("#LG_contents").css("display","none");
        });
        $(".2nd").click(function(){
        //   $("label").slideToggle();
            // $("#3rd").
            // $("#4th").
            $("#tabs button").css("background-color","#fff");
            $("#tabs button").css("border-color","#6c757d");
            $("#tabs button").css("color","#6c757d");
            $(this).css("background-color","#56a4ff");
            $(this).css("border-color","#56a4ff");
            $(this).css("color","#fff");
            $("#4th_contents").css("display","none");
            $("#3rd_contents").css("display","none");
            $("#2ND_contents").css("display","block");
            $("#UG_contents").css("display","none");
            $("#LG_contents").css("display","none");
        });
        $(".UG").click(function(){
        //   $("label").slideToggle();
            // $("#3rd").
            // $("#4th").
           $("#tabs button").css("background-color","#fff");
            $("#tabs button").css("border-color","#6c757d");
            $("#tabs button").css("color","#6c757d");
            $(this).css("background-color","#56a4ff");
            $(this).css("border-color","#56a4ff");
            $(this).css("color","#fff");
            $("#4th_contents").css("display","none");
            $("#3rd_contents").css("display","none");
            $("#2ND_contents").css("display","none");
            $("#UG_contents").css("display","block");
            $("#LG_contents").css("display","none");
        });
        $(".LG").click(function(){
        //   $("label").slideToggle();
            // $("#3rd").
            // $("#4th").
            $("#tabs button").css("background-color","#fff");
            $("#tabs button").css("border-color","#6c757d");
            $("#tabs button").css("color","#6c757d");
            $(this).css("background-color","#56a4ff");
            $(this).css("border-color","#56a4ff");
            $(this).css("color","#fff");
            $("#4th_contents").css("display","none");
            $("#3rd_contents").css("display","none");
            $("#2ND_contents").css("display","none");
            $("#UG_contents").css("display","none");
            $("#LG_contents").css("display","block");
        });
            $(".card").click(function(){
              var id= $(this).attr('id')
              //alert("#"+id+" .int_title ")
            //   setTimeout(function(){
            //     $(this).css("opacity","0.8");
            //     }, 300);
            //     $(this).css("opacity","1");

              $(".int_title").css("display", "block");
              $(".contents_orig").css("display", "none");
              $("#"+id+" .contents_orig").css("display", "block");
              $("#"+id+" .int_title ").css("display", "none");
              $("#"+id+" .contents_orig").css("top", "0");
              $("#"+id+" .contents_orig ").css("color", "#fff");
              $("#"+id+" .contents_orig").css("width", "100%");
              $("#"+id+" .contents_orig").addClass("likod_txt");
              $("#"+id+" .contents_orig a").css("color", "#fff");
              $("#"+id+" .contents_orig").removeClass( "shadow_text" );
              $("#"+id+" .contents_orig").css("z-index", "0");
              $("#"+id+" .contents_orig").css("height", "100%");
            });
            // $(".card").mouseout(function(){

            //  var id= $(this).attr('id')
            //   $(".contents_orig").css("top", "-2550%");
            //   $("#"+id+" .contents_orig").css("top", "0");
            //  $("#"+id+" .int_title").css("display", "block");
            // //   $("#"+id+" .contents_orig").css("top", "-550%");
            //   $("#"+id+" .contents_orig").css("z-index", "-1");
            // //   $("#"+id+" .contents_orig").css("width", "100%");
            // //   $("#"+id+" .contents_orig").addClass("shadow_text");
            // //   $("#"+id+" .contents_orig").css("color", "transparent");
            // //   $("#"+id+" .contents_orig").css("position", "relative");
            // //   $("#"+id+" .contents_orig a").css("color", "transparent");
            // //   $("#"+id+" .contents_orig").removeClass( "likod_txt" );
            // });


            $(".navbar-toggler").click(function(){
                $("div#mobile_nav").slideToggle();
            });

    });

    $(document).ready(function(){
        setTimeout(function(){
            $("#directory").css("visibility","visible")
            $("#directory").fadeIn();
        }, 800);
            setTimeout(function(){
            $("#mayors_corner").css("visibility","visible")
            $("#mayors_corner").fadeIn();
        }, 1500);
        setTimeout(function(){
            $("#news").css("visibility","visible")
            $("#news").fadeIn();
        }, 3000);
    });


    $(document).ready(function(){
        $(".crame").click(function(){
            $(".descriptionsss").css("display","none")
            $("#crame_con").css("display","block");
        });
        $(".gh").click(function(){
           $(".descriptionsss").css("display","none")
           $("#gh_con").css("display","block");
         });
         $(".ah").click(function(){
             $(".descriptionsss").css("display","none")
             $("#ah_con").css("display","block");
         });
         $(".lb").click(function(){
             $(".descriptionsss").css("display","none")
             $("#lb_con").css("display","block");
         });
         $("#mayt.nas").click(function(){
             $(".descriptionsss").css("display","none")
             $("#maytunas_con").css("display","block");
         });
         $(".nse").click(function(){
             $(".descriptionsss").css("display","none")
             $("#Onse_con").css("display","block");
         });
         $(".sl").click(function(){
             $(".descriptionsss").css("display","none")
             $("#sl_con").css("display","block");
         });
         $(".stjo").click(function(){
             $(".descriptionsss").css("display","none")
             $("#stjo_con").css("display","block");
         });
         $(".isb").click(function(){
             $(".descriptionsss").css("display","none")
             $("#isb_con").css("display","block");
         });
         $(".kab").click(function(){
             $(".descriptionsss").css("display","none")
             $("#kab_con").css("display","block");
         });
         $(".tib").click(function(){
             $(".descriptionsss").css("display","none")
             $("#tib_con").css("display","block");
         });
         $(".bat").click(function(){
             $(".descriptionsss").css("display","none")
             $("#bat_con").css("display","block");
         });
         $(".sp").click(function(){
             $(".descriptionsss").css("display","none")
             $("#sp_con").css("display","block");
         });
         $(".rog").click(function(){
             $(".descriptionsss").css("display","none")
             $("#prog_con").css("display","block");
         });
         $(".riv").click(function(){
             $(".descriptionsss").css("display","none")
             $("#riv_con").css("display","block");
         });
         $(".PC").click(function(){
             $(".descriptionsss").css("display","none")
             $("#PC_con").css("display","block");
         });
         $(".CDJ").click(function(){
             $(".descriptionsss").css("display","none")
             $("#cora_con").css("display","block");
         });
         $(".BB").click(function(){
             $(".descriptionsss").css("display","none")
             $("#bb_con").css("display","block");
         });
         $(".Sa").click(function(){
             $(".descriptionsss").css("display","none")
             $("#sa_con").css("display","block");
         });
         $(".Erm").click(function(){
             $(".descriptionsss").css("display","none")
             $("#ermi_con").css("display","block");
         });
         $(".Pas").click(function(){
             $(".descriptionsss").css("display","none")
             $("#pas_con").css("display","block");
         });
         $("#cityhall").click(function(){
            $(".descriptionsss").css("display","none")
            $("#sj").css("display","block");
          })
     });



   
    $(document).ready(function(){

        $("#optic_btn").click(function(){
            $(".optic_").trigger('pause');
            $(".anti_").trigger('pause');
            $(".bike_").trigger('pause')
            setTimeout(function(){
                $(".optic_").trigger('play');
            }, 800);
        });
        $("#dangling_btn").click(function(){
            $(".optic_").trigger('pause');
            $(".anti_").trigger('pause');
            $(".bike_").trigger('pause')
            setTimeout(function(){
                $(".anti_").trigger('play');
            }, 800);
        });
        $("#bike_btn").click(function(){
            $(".optic_").trigger('pause');
            $(".anti_").trigger('pause');
            $(".bike_").trigger('pause')
            setTimeout(function(){
                $(".bike_").trigger('play');
            }, 800);
        });
        $(".close_pause").click(function(){
            setTimeout(function(){
                $(".optic_").trigger('pause');
                $(".anti_").trigger('pause');
                $(".bike_").trigger('pause')
            }, 500);
        });


        var vid = document.getElementById("first_vid");
        $("#myCarousel  a.carousel-control-prev ,#myCarousel  a.carousel-control-next").click(function(){
            $("#myCarousel #first_vid").trigger('paused');
            $("#myCarousel  #second_vid").trigger('paused');
            $("#myCarousel  #third_vid").trigger('paused');
            setTimeout(function(){
                $("#myCarousel .active #first_vid").trigger('playe');
                $("#myCarousel .active #second_vid").trigger('playe');
                $("#myCarousel .active #third_vid").trigger('playe');
            }, 800);

          
           
            // $("#first_vid").trigger('pause');
            // $(".active #second_vid").trigger('play');
        });
        
            
            // alert("click");
        
        
        $(window).scroll(function() {
            var $height = $(window).scrollTop();
            $("nav.navbar.navbar-expand-lg.navbar-light").css("background","#fff");
          if($height > 50) {
                $("nav.navbar.navbar-expand-lg.navbar-light").css("background","#314096");
                $("#nav a").css("color","#fff");
                $(".dropdown-item").css("color","#000");
            //    alert("pause"); 
                $('video').get(0).pause();
                $('video').get(1).pause();
            } else {
                $("nav.navbar.navbar-expand-lg.navbar-light").css("background","#fff");
                $("#nav a").css("color","#314096");
                $(".dropdown-item").css("color","##314096");

            }
        });
    });

    $(document).ready(function(){
    $("#profile_btn").click(function(){
        $("div#profile_row").css("display","flex");
        $("div#profile_row").fadeIn("slow");
        $("div#achievement_row,.news_row, div#carousel_row,div#agenda_row").fadeOut("fast");

    });
     $("a#achievement_btn").click(function(){
        $("div#achievement_row").css("display","flex");
        $("div#profile_row,.news_row, div#carousel_row,div#agenda_row").fadeOut("fast");

        $("div#achievement_row").fadeIn("fast");
    });

     $("a#programs_btn").click(function(){
        $("div#agenda_row").css("display","block");
        $("div#agenda_row").fadeIn("fast");
        $("div#profile_row,.news_row, div#carousel_row,#achievement_row").fadeOut("fast");

    });

       $("a#news_btn").click(function(){
        $("div.news_row").css("display","block");
        $("ddiv.news_row").fadeIn("fast");
        $("div#profile_row,#agenda_row, div#carousel_row,#achievement_row").fadeOut("fast");

    });
    $("#profile_btn_mob").click(function(){
        $("div#profile_row").css("display","block");
        $("div#profile_row").fadeIn("slow");
        $("div#achievement_row,.news_row, div#carousel_row,div#agenda_row").fadeOut("fast");

    });
     $("a#achievement_btn_mob").click(function(){
        $("div#achievement_row").css("display","block");
        $("div#profile_row,.news_row, div#carousel_row,div#agenda_row").fadeOut("fast");

        $("div#achievement_row").fadeIn("fast");
    });

     $("a#programs_btn_mob").click(function(){
        $("div#agenda_row").css("display","block");
        $("div#agenda_row").fadeIn("fast");
        $("div#profile_row,.news_row, div#carousel_row,#achievement_row").fadeOut("fast");

    });

       $("a#news_btn_mob").click(function(){
        $("div.news_row").css("display","block");
        $("ddiv.news_row").fadeIn("fast");
        $("div#profile_row,#agenda_row, div#carousel_row,#achievement_row").fadeOut("fast");

    });

    //history_page
    $(document).ready(function(){
      $(".t1").click(function(){
       $("div#prgph0").slideToggle( "fast" );
       $("#h").slideToggle( "fast" );
       //  $("div#con1 h1").css("border-bottom","2px")
       // $(this).css("border-bottom"," 2px solid red")
      })

      $(".t2").click(function(){
       $("div#prgph1").slideToggle( "fast" );
        $("#t").slideToggle( "slow" );
       // $("div#con1 h1").css("border-bottom","0px")
       // $(this).css("border-bottom"," 2px solid red")
      })
      $(".t3").click(function(){
       $("div#prgph2").slideToggle( "slow" );
       $("#g").slideToggle( "slow" );
       // $("div#con1 h1").css("border-bottom","0px")
       // $(this).css("border-bottom"," 2px solid red")
      })
      $(".t4").click(function(){
       $("div#prgph3").slideToggle( "slow" );
       $("#r").slideToggle( "slow" );
       // $("div#con1 h1").css("border-bottom","0px")
       // $(this).css("border-bottom"," 2px solid red")
      })
  });


});
  //history_page
  $(document).ready(function(){

  });

  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }