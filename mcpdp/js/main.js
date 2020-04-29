if ($("#error").html() == "") {
    $("#error").hide();
}
if ($("#success").html() == "") {
    $("#success").hide();
}

$("form").submit(function(e){
    var error = "";
    
    if ($("#teller").val() == "") {
        error += "<br>The teller field is required.";
    }
    
    if ($("#title").val() == "") {
        error += "<br>Select a title. ";
    }
    
    if ($("#program").val() == "") {
        error += "<br>Select a program.";
    }

    if ($("#fullName").val() == "") {
        error += "<br>The Full Name field is required.";
    }
    
    if ($("#status").val() == "") {
        error += "<br>Select your status.";
    }

    if ($("#sex").val() == "") {
        error += "<br>Select your sex.";
    }

    if ($("#pow").val() == "") {
        error += "<br>The Place of work field is required.";
    }

    if ($("#speciality").val() == "") {
        error += "<br>The speciality field is required.";
    }

    if ($("#phone").val() == "") {
        error += "<br>The Phone number field is required.";
    }

    if ($("#email").val() == "") {
        error += "<br>The email field is required.";
    }

    if ($("#licence").val() == "") {
        error += "<br>The license field is required.";
    }

    if ($("#exp").val() == "") {
        error += "<br>The expiring date field is required.";
    }

    if (error != "") {
        error = "<strong>There were error(s) in your form:</strong>" + error;
        $("#error").html(error);
        $("#error").show();
        return false;
    } else {
        $("#error").hide();
        $("form").unbind("submit").submit();
        return true;
    }
});

$(".owl-carousel").on("initialized.owl.carousel", () => {
    setTimeout(() => {
      $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
      $("section").show();
    }, 200);
  });
  
  const $owlCarousel = $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    autoplay: true
 });
  
  
  
  $owlCarousel.on("changed.owl.carousel", e => {
    $(".owl-slide-animated").removeClass("is-transitioned");
  
    const $currentOwlItem = $(".owl-item").eq(e.item.index);
    $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
  
    const $target = $currentOwlItem.find(".owl-slide-text");
    doDotsCalculations($target);
  });
  
  $owlCarousel.on("resize.owl.carousel", () => {
    setTimeout(() => {
      setOwlDotsPosition();
    }, 50);
  });
  
  /*if there isn't content underneath the carousel*/
  //$owlCarousel.trigger("refresh.owl.carousel");
  
  setOwlDotsPosition();
  
  function setOwlDotsPosition() {
    const $target = $(".owl-item.active .owl-slide-text");
    doDotsCalculations($target);
  }
  
  function doDotsCalculations(el) {
    const height = el.height();
    const { top, left } = el.position();
    const res = height + top + 60;
  
    $(".owl-carousel .owl-dots").css({
        top: `${res}px`,
        display: `block`,
        width: `100%`,
        padding: `0`,
        margin: `0`
    });
  
  }

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });
