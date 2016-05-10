jQuery(document).ready(function() {

  // Active links
  var sections = $("section"),
  navigation_links = $("#navigation a");

  sections.waypoint( {
    handler: function(event, direction) {
      var active_section;

      active_section = $(this);
      if (direction === "up") active_section = active_section.prev();

      var active_link = $('#navigation a[href="#' + active_section.attr("id") + '"]');

      navigation_links.parent().removeClass("active");
      active_link.parent().addClass("active");
    },
    offset: '50%'
  });

  // Right navigation collapses navbar in mobile view
  $(function() {
    $('.navbar-right a').on('click', function(){
      if ($('.navbar-toggle').css('display') !='none'){
        $(".navbar-toggle").trigger( "click" );
      }
    });
  });

  // Scroll to top
  $('body').append('<div id="back-top"><span class="icon-arrow-up2"></span></div>');
  $("#back-top").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
      $('#back-top').fadeIn();
      } else {
      $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top').click(function () {
      $('body,html').animate({
      scrollTop: 0
      }, 800);
      return false;
    });
  });

  // IE 10 in Windows 8 and Windows Phone 8 fix
  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
      document.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
    )
    document.querySelector('head').appendChild(msViewportStyle)
  }

  // Android stock browser fix
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }

  // add fixed navigation placeholder padding
  (function(){
    var navigation = $('#navigation');
    if(navigation.length) {
      $('body').css('padding-top',navigation.outerHeight())
    }
  })();

  // payment interval toggle
  $('body').on('click', '.js-payment-interval-toggle', function(e){
    var $this = $(this),
        paymentIntervalCost = $('#payment-interval-cost'),
        paymentIntervalInfo = $('#payment-interval-info'),
        monthlyCost = $this.data('interval-cost');

    $this.next(':radio').prop("checked", true).valid();

    // show payment info
    paymentIntervalInfo.show();
    // change monthly cost
    paymentIntervalCost.text(monthlyCost);

    // toggle payment switcher
    $('.js-payment-interval-toggle').removeClass('active');
    $this.addClass('active');

    e.preventDefault();
  })

  // tooltips
  $('[data-toggle="tooltip"]').tooltip();

  // info link
  $('.info-link').on('click', function(e){
    // prevent input:focus when inside the label
    e.preventDefault();
  })


  /* masked input */
  // phone mask
  $('.js-phone-mask').each(function(){
    $(this).mask("?(999) 999-99999");
  })
  // credit card mask
  $('.js-credit-mask').each(function(){
    $(this).mask("?9999 9999 9999 9999", {
      placeholder:" "
    });
  })
  // date MM mask
  $('.js-mm-mask').each(function(){
    $(this).mask("?99", {
      placeholder:" "
    });
  })
  // date YYYY mask
  $('.js-yyyy-mask').each(function(){
    $(this).mask("?9999", {
      placeholder:" "
    });
  })
  // CVC/CVV mask
  $('.js-cvv-mask').each(function(){
    $(this).mask("?999", {
      placeholder:" "
    });
  })


  // forms validation
  $('form').each(function(){
    var $form = $(this);

    // $form.on('submit', function(){
    //   $form.addClass('is-submit');
    // })

    $form.validate({
      highlight: function(element) {
        var formGroup = $(element).closest('[class*="form-group"], .input-group');
        formGroup.addClass('has-error').removeClass('has-success');
        $(element).addClass('has-error').removeClass('has-success');
      },
      unhighlight: function(element) {
        var formGroup = $(element).closest('[class*="form-group"], .input-group');

        $(element).removeClass('has-error').addClass('has-success');
        
        // improve unhighlight behaviour
        if(!$('[required]:not(.has-success)', formGroup).length) {
          formGroup.removeClass('has-error').addClass('has-success');
        } else if(!$('.has-error', formGroup).length) {
          formGroup.removeClass('has-error');
        }
      },
      errorElement: 'span',
      errorClass: 'help-block',
      errorPlacement: function(error, element) {
        var errorPlacement = element.closest('[class*="form-group"], .input-group').find('.error-placement');

        if(errorPlacement.length) {
          errorPlacement.append($('<div class="help-block-wrap" />'));
          $('.help-block-wrap', errorPlacement).append(error);
        } else {
          var helpBlock = element.next('.help-block-wrap');

          if(helpBlock.length) {
            helpBlock.append(error);
          } else {
            var helpBlockInner = $('<div class="help-block-wrap"></div>').append(error)
            element.after(helpBlockInner);
          }
          
        }
      }
    });
  })

  // input focusout validation hack
  $('.form-control').on('focusout', function(){
    var $this = $(this);

    setTimeout(function(){
      $this.trigger('keyup');
    })
  })
});
