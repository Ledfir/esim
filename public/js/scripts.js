$(document).ready(function(){
    $('#segCompatibilityApple').hide();
    $('#segCompatibilityAppleOther').hide();
    $('#segCompatibilityApleeSuccess').hide();
});
$('#btnVerification').click(function(){
    $('#segCompatibility').fadeIn(300);
    $('#segCompatibilityApple').hide();
    $('#segCompatibilityAppleOther').hide();
    $('#segCompatibilityApleeSuccess').hide();
});
$('.btn-verification').click(function(){
    let brand = $(this).data('brand');
    if(brand == 'apple'){
        $('#segCompatibility').hide();
        $('#segCompatibilityApple').fadeIn(300);
    }else if(brand == 'samsung'){
        $('#segCompatibility').hide();
        $('#segCompatibilityAppleOther').fadeIn(300);
    }else if(brand == 'google-pixel'){
        $('#segCompatibility').hide();
        $('#segCompatibilityApleeSuccess').fadeIn(300);
    }else if(brand == 'apple-success'){
        $('#segCompatibilityApple').hide();
        $('#segCompatibilityApleeSuccess').fadeIn(300);
    }else if(brand == 'apple-other'){
        $('#segCompatibilityApple').hide();
        $('#segCompatibilityAppleOther').fadeIn(300);
    }
});