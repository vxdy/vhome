$(document).ready(function(){
    $(".progress").each(function(){
        let $bar = $(this).find(".bar");
        let $val = $(this).find("span");
        let perc = parseInt( $val.text(), 10);

        $({p:0}).animate({p:perc}, {
            duration: 3000,
            easing: "swing",
            step: function(p) {
                $bar.css({
                    transform: "rotate("+ (45+(p*1.8)) +"deg)", // 100%=180° so: ° = % * 1.8
                    // 45 is to add the needed rotation to have the green borders at the bottom
                });
                $val.text(p|0);
            }
        });
    });
});