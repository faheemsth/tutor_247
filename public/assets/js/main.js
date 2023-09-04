$(function () {
    $(".card-center").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    arrows: false,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    arrows: false,
                },
            },
        ],
    });

    // signup form

    var form_count = 1;
    var total_forms = $("fieldset").length;

    // Hide all fieldsets except the first one
    $("fieldset:not(:first)").hide();

    // Function to set the progress bar
    function setProgressBar(curStep) {
        var percent = ((curStep - 1) / (total_forms - 1)) * 100;
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent.toFixed(0) + "%");
    }

    // Function to show the next step and hide the current step
    function showNextStep() {
        var currentFieldset = $("fieldset:visible");
        var nextFieldset = currentFieldset.next("fieldset");

        if (nextFieldset.length > 0) {
            currentFieldset.hide();
            nextFieldset.show();
            form_count++;
            setProgressBar(form_count);
        }
    }

    // Function to show the previous step and hide the current step
    function showPreviousStep() {
        var currentFieldset = $("fieldset:visible");
        var previousFieldset = currentFieldset.prev("fieldset");

        if (previousFieldset.length > 0) {
            currentFieldset.hide();
            previousFieldset.show();
            form_count--;
            setProgressBar(form_count);
        }
    }

    // Handle the "Next" button click
    $(".next").click(function () {
        showNextStep();
    });

    // Handle the "Previous" button click
    $(".previous").click(function () {
        showPreviousStep();
    });

    // Handle the "Submit" button click (you can adjust this as needed)
    $(".submit").click(function () {
        // You can add your form submission logic here
        alert("Form submitted!");
    });


    $('.input-phone').intlInputPhone();
});
