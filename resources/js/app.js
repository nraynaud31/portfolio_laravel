require('./bootstrap');

function getAge(birth){
    var today = new Date();
    var nowyear = today.getFullYear();
    var nowmonth = today.getMonth();
    var nowday = today.getDate();

    var birthyear = birth.getFullYear();
    var birthmonth = birth.getMonth();
    var birthday = birth.getDate();

    var age = nowyear - birthyear;
    var age_month = nowmonth - birthmonth;
    var age_day = nowday - birthday;

    if(age_month < 0 || (age_month === 0 && age_day < 0)){
        age = parseInt(age);
    }
    document.write(age);
}
