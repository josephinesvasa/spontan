
function show_circle() {

    var counter = 0;
    var val = document.getElementsByClassName('val');
    for (var i = 0; i < val.length; i++) {
        if (counter < val.length - 1) {
            $('.circle').each(function () {
                $(this).circleProgress({
                    value: document.getElementsByClassName('val')[counter].innerHTML,
                    size: 50,
                    thickness: 20,
                    emptyFill: "black",
                    startAngle: 4.7,
                    fill: {
                        gradient: ["red", "orange"]
                    }

                });
                counter++;

            });
        }
    }

}