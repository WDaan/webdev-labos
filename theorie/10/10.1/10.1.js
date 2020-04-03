function Hide() {
  $("#title").hide();
}
function Toggle() {
  $("#title").toggle();
}
function slideToggle() {
  $("#logo").slideToggle("slow", function() {
    $("#slidetoggleresponse").html("The End");
  });
}

let interval;

function Drive() {
  $("#car").animate(
    {
      left: "+=10%"
    },
    { easing: "linear" }
  );
  $("#tree").animate(
    {
      left: "-=10%"
    },
    { easing: "linear" }
  );

  if ($("#tree").position().left <= -250) {
    if (interval) clearInterval(interval);
    $("#tree")
      .stop(true)
      .css({ left: $(window).width() });
    $("#car")
      .stop(true)
      .css({ left: -350 });
    Animate();
  }
}

function Animate() {
  interval = setInterval(Drive, 200);
}

function hidecallback() {
  $("#logo").hide("slow", function() {
    $("#hidecallbackresponse").html("hide callback triggered");
  });
}

function changeCss() {
  $("button").css({ backgroundColor: 'red', color: 'white' });
}
