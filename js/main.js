    var today = new Date().toISOString().split('T')[0];
    //document.getElementsByName("start_date")[0].setAttribute('min', today);
    document.getElementById("voting_date").setAttribute('min', today);
    document.getElementsByName("finish_date")[0].setAttribute('min', today);
    document.getElementsByName("start_date")[0].addEventListener('change', changeDateSelect);


function changeDateSelect(){
    var second = document.getElementsByName("start_date")[0].value;
    document.getElementsByName("finish_date")[0].setAttribute('min', second);
}