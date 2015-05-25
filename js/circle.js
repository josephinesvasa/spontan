
function show_circle() {

    var counter = 0;
    var hej = document.getElementsByClassName('val');
    for (var i = 0; i < hej.length; i++) {
        if (counter < hej.length - 1) {
            $('.circle').each(function () {
                $(this).circleProgress({
                    value: document.getElementsByClassName('val')[counter].innerHTML,
                    size: 80,
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