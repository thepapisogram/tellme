const ajax_php = {
    login: "../assets/php/requests/login.php",
    signup: "../assets/php/requests/signup.php"
}

$('#login').on('submit', function(ev){
    ev.preventDefault();
    let data = {
        username: $('#username').val(),
        password: $('#password').val()
    };
    $.ajax({
        method: 'POST',
        url: ajax_php.login,
        data,
        success: function(data){
            switch(data){
                case 'missing':
                    $('#res').removeClass('alert-dark').addClass('alert-danger');
                    $('#res').html('Account not Found');
                    $('#username').trigger('focus');
                    break;
                case 'incorrect':
                    $('#res').removeClass('alert-dark').addClass('alert-danger');
                    $('#res').html('Invalid Username or Password');
                    $('#password').val('');
                    $('#password').trigger('focus');
                    break;
                case 'success':
                    $('#res').removeClass('alert-dark').addClass('alert-success');
                    $('#res').html('Login Successful');
                    window.location.href = '../';
                    break;
                default:
                    $('#res').removeClass('alert-dark').addClass('alert-danger');
                    $('#res').html('Failed to Connect');
                    break;
            }
        }
    });
});

$('#signup').on('submit', function(ev){
    ev.preventDefault();
    let data = {
        fullname: $('#fullname').val(),
        username: $('#username').val(),
        password: $('#password').val()
    };
    $.ajax({
        method: 'POST',
        url: ajax_php.signup,
        data,
        success: function(data){
            switch(data){
                case 'exists':
                    $('#res').removeClass('alert-dark').addClass('alert-danger');
                    $('#res').html('Username already exists');
                    $('#username').trigger('focus');
                    break;
                case 'success':
                    $('#res').removeClass('alert-dark').addClass('alert-success');
                    $('#res').html('Signup Successful');
                    window.location.href = '../';
                    break;
                default:
                    $('#res').removeClass('alert-dark').addClass('alert-danger');
                    $('#res').html('Failed to Connect');
                    break;
            }
        }
    });
});