$(document).ready(function () {

    $('.likeBtn').click(function () {

        let dataID = $(this).attr('data-id');

        $.post("http://localhost/like_dislike/oyla", {
            post_id     : dataID,
            vote_status : 1 
        }, function(resp) {
            alert(resp)
        })
    }) 
    
    $('.dislikeBtn').click(function () {
        
        
        let dataID = $(this).attr('data-id');

        $.post("http://localhost/like_dislike/oyla", {
            post_id     : dataID,
            vote_status : -1 
        }, function(resp) {
            alert(resp)
        })

    }) 

}) 