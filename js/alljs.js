$(document).ready(function() {
    $("#submitform").click(function(e) {
        var name = $("#name").val();
        var comment = $("#comment").val();
        var survey = $(".survey:checked").val();
        if(name == ""){
            name="This person";
        }
        $.ajax({
            url: 'comments.php',
            type: 'POST',
            data: {
                survey: survey,
                name: name,
                comment: comment
            },
            success: function(data) {
                $("#feedback-form").hide();
                $("#thankyouModal").show();
                $("#lol").html(data);
                sortList(document.getElementsByClassName('list')[0]);
                countList();
                moodCheck();
                $("#form")[0].reset();
            }
        });
        return false;
    });

    function sortList(ul) {
        var new_ul = ul.cloneNode(false);

        // Add all lis to an array
        var lis = [];
        for (var i = ul.childNodes.length; i--;) {
            if (ul.childNodes[i].nodeName === 'LI')
                lis.push(ul.childNodes[i]);
        }

        // Sort the lis in descending order
        lis.sort(function(a, b) {
            return parseInt(b.childNodes[0].data, 10) -
                parseInt(a.childNodes[0].data, 10);
        });

        // Add them into the ul in order
        for (var i = 0; i < lis.length; i++)
            new_ul.appendChild(lis[i]);
        ul.parentNode.replaceChild(new_ul, ul);
    }

    function countList() {

        var parent = document.getElementById("lol");
        var child = parent.getElementsByTagName("li");
        var i = 5;
        if (parent != null) {
            while (i < child.length) {
                parent.removeChild(child[i]);
            }
        }
    }

    function moodCheck() {

        $('.mood').each(function() {
            var mood = $(".mood");
            if ($(this).text() == " was satisfied") {
                $(this).addClass("happy");
            }
            if ($(this).text() == " was dissatisfied") {
                console.log($(this).text());
                $(this).addClass("sad");
            }
            if ($(this).text() == " was okay") {
                console.log($(this).text());
                $(this).addClass("meh");
            }
        });
    }

});

$("#viewComments").click(function() {
    $("#thankyouModal").toggle();
    $("#feedback-comments").toggle();
});

$("#addNewComments").click(function() {
    $("#feedback-comments").toggle();
    $("#feedback-form").toggle();
});