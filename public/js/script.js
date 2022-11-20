// alert("hello");

// $('h1').css('color','blue');

function check() {
    if (window.confirm('Are you sure to logout?')) {
        alert('logout done');
        location.href='/logout';
    } else {
        alert('logout canceled');
    }
}

function test() {
    if (window.confirm('Are you sure?')){
        $('h2').css('color','red');
    } else {
        $('a').css('color','yellow');
    };
}

function check_pass() {
    var enter = prompt('Enter your password');
    if (enter == password) {
        location.href='/profile/'+id;
    } else {
        alert("Enter password again!");
    }
}

function check_pass2() {

};

function hello(){
    
    // alert('www');
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    
    if (pass1==false || pass2==false) {
        alert("Enter both password properly");
    } else if (pass1 !== pass2) {
        alert("Enter same password");
    } else if (pass1 == pass2) {
        alert("Password Updated");
    }
    
}

function delete_user(){
    if (window.confirm('Are you sure to delete this account?')){
        alert('This account deleted');
        location.href='/delete_user';
    } else {
        alert('This account remained');
        location.href='/profile/'+session('id');
    }
}

function delete2() {
    
    if (window.confirm('Are you sure to delete this post?')){
        alert('This post deleted');
        return true;
        
    } else {
        alert('This post remained');
        return false;
    }
}


function delete3() {
    
    if (window.confirm('Are you sure to delete this account?')){
        alert('This account deleted');
        return true;
        
    } else {
        alert('This account remained');
        return false;
    }
}


// $('.like1').click(function(){
//     if ($(this).hasClass('fa-regular')) {
//         $(this).removeClass('fa-regular');
//         $(this).addClass('fa-solid');
        
//     } else {
//         $(this).removeClass('fa-solid');
//         $(this).addClass('fa-regular');
//     }
// });


    $('.like1').on('click',function(){
        let id = $(this).data('id1');
        // if ($(this).hasClass('fa-regular')) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                url: "/like1",
                async: true,
                type: 'POST',
                dataType: "text",
                data: {'id':id}
                
            })
            .done(function(){
                alert('you liked it');
            })
            .fail(function(){
                alert('miss')
            })
        // } else {

        // }
        
    });
    

