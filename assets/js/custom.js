$(document).ready(function () {

    $('.post_list').on('click','.likeBtn' , function () {

        let dataID = $(this).attr('data-id');
        let t = $(this);

        $.post("http://localhost/like_dislike/oyla", {
            post_id     : dataID,
            vote_status : 1 
        }, function(resp) {
            //$('.post_list').html(resp);
            
            t.parent().parent().html(resp);
        })
    }) 
    
    $('.post_list').on('click', '.dislikeBtn' , function () {
        
        
        let dataID = $(this).attr('data-id');
        let t = $(this);
        
        $.post("http://localhost/like_dislike/oyla", {
            post_id     : dataID,
            vote_status : -1 
        }, function(resp) {
            //$('.post_list').html(resp);

            t.parent().parent().html(resp);
        })

    }) 

}) 